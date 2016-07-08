<?php
/**
 * Created by PhpStorm.
 * User: Виктор
 * Date: 08.07.2016
 * Time: 2:10
 */

class Home extends Controller
{
    protected $title = "Главная";

    protected $table;

    public function index()
    {
        $this->view('header', ['title' => $this->title]);
        $this->view('navbar');
        $this->view('home/index');
        $this->view('footer');
    }
}