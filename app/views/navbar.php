<?php
/**
 * Created by PhpStorm.
 * User: Виктор
 * Date: 08.07.2016
 * Time: 14:27
 */
?>
<nav class="nav_bar navbar navbar-default navbar-fixed-top">
    <div id="nav" class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<? echo $this->config->base_url_directory(); ?>">Admin panel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav">
                <li><a href="<? echo $this->config->base_url_directory(); ?>">Главная</a></li>
                <li><a href="<? echo $this->config->base_url_directory(); ?>student">Студенты</a></li>
                <li><a href="<? echo $this->config->base_url_directory(); ?>group">Группы</a></li>
            </ul>
        </div>
    </div>
</nav>