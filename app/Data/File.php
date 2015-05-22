<?php namespace App\Data;

use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Contracts\Data\File as FilesContratc;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Eloquent implements FilesContratc  {

    use SoftDeletes;

    protected $table = 'gda_files';
    protected $primaryKey = 'id';

    protected $guarded    = array('');

    public function User (){

        return $this->hasOne(Usuario::class, 'id_user');
    }

}
