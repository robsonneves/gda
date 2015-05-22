<?php namespace App\Modules\Site\Http\Controllers;

use App\Contracts\Data\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Factory as Storage;


class UploadController extends Controller {

    private $file;
    private $storage;

    public function  __construct(File $file,Storage $storage)
    {
        $this->middleware('auth');
        $this->file    =  $file;
        $this->storage = $storage->disk('s3');
    }

    public function index()
    {
        $files = $this->file->whereUserId(\Auth::user()->id)->get();
        return view('layouts.site.widget')->nest('key', 'uploads.index', array('files' =>  $files));
    }

    public function create(Request $request)
    {
        //return view('uploads.create')->with('ficha',$request->route('ficha'))->with('inc',$request->route('inc'));
        return view('layouts.site.widget')->nest('key', 'uploads.create', ['ficha' => $request->route('ficha'), 'inc' => $request->route('inc') ] );
    }

    public  function show($id)
    {
        try{
            $file = $this->file->find($id);
            $s3 = $this->storage->get($file->directory.'/'.$file->filename);
            return \Response::make( $s3, 200,['Content-type' => $file->type,'Content-Disposition'   => 'attachment; filename='.$file->filename ]);

        }catch (\Exception $e) {

            return redirect()->back()->with('error','Download');
        }
    }

    public function store(Request $request)
    {
        try{

            $doc    = $request->file('file');
            $dir    = $request->input('ficha').'-'.$request->input('inc');

            $this->storage->makeDirectory($dir);
            $this->storage->put($doc->getClientOriginalName(),  \File::get($doc));
            $this->storage->move($doc->getClientOriginalName(),$dir.'/'.$doc->getClientOriginalName());

            $this->file->filename     = $doc->getClientOriginalName();
            $this->file->type         = $doc->getClientMimeType();
            $this->file->ficha        = $request->input('ficha');
            $this->file->incidente    = $request->input('inc');
            $this->file->directory    = $dir;
            $this->file->user_id      = \Auth::user()->id;
            $this->file->save();

            if ($request->ajax()) { return response()->json(['success'=>'Enviado com sucesso!!']); }
            return redirect()->back()->with('success','Enviado com sucesso!!');

        }catch (\Exception $e) {

            if ($request->ajax()) { return response()->json(['error'=>'Error envio']); }
            return redirect()->back()->with('error','Error envio');
        }

    }

    public function destroy($id)
    {
        try{

            $file = $this->file->find($id);
            $this->storage->delete($file->directory."/".$file->filename);
            $file->delete();

            return redirect()->back()->with('success','Excluido!');

        }catch (\Exception $e) {

            return redirect()->back()->with('error','Ao Deletar');
        }

    }
}

