<?php
/**
 * Created by PhpStorm.
 * User: Виктор
 * Date: 08.07.2016
 * Time: 2:56
 */

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    public $table = 'users';

    //public $timestamps = [];

    protected $fillable = ['username', 'email'];
}