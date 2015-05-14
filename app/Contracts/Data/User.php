<?php namespace App\Contracts\Data;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

interface User extends AuthenticatableContract, CanResetPasswordContract {

    public function Usuario();

    public function UsuarioWeb();

    public function Sociais();
}
