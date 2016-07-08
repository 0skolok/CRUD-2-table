<?php
/**
 * Created by PhpStorm.
 * User: Виктор
 * Date: 08.07.2016
 * Time: 4:22
 */
class Config
{
    protected $base_url;

    protected $directory;

    public function __construct()
    {
        $this->base_url = "http://project3:81";
        $this->directory = "public";
    }

    public function base_url()
    {
        return $this->base_url;
    }

    public function base_url_directory()
    {
        return $this->base_url.'/'.$this->directory.'/';
    }
}

?>

