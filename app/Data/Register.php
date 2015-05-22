<?php namespace App\Data;

use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Contracts\Data\Register as RegisterContratc;
use Illuminate\Database\Eloquent\SoftDeletes;

class Register extends Eloquent implements RegisterContratc  {

    use SoftDeletes;

    protected $table        = 'gda_register';
    protected $primaryKey   = 'id';
    protected $fillable     = ['cpfcnpj','name','email','password','news','terms'];

    protected $guarded      = ['deleted_at'];

}
    