<?php
/**
 * Created by PhpStorm.
 * User: Виктор
 * Date: 08.07.2016
 * Time: 2:07
 */

class Controller
{
    protected $config;

    public function __construct()
    {
        $this->config = new Config();
    }

    protected function model($model)
    {
        require_once '../app/models/'.$model.'.php';
        return new $model();
    }

    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}