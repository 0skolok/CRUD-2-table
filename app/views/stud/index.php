<?php
/**
 * Created by PhpStorm.
 * User: Виктор
 * Date: 04.07.2016
 * Time: 21:20
 */
?>

<link rel="stylesheet" type="text/css" href="<? echo $this->config->base_url_directory();?>css/table.css">

<div class="container stud">
    <?
    if($data['student'] == [])
    {
        echo "<h1 align=\"center\">Записи отсутствуют!</h1>";
    }
    else
    {
        echo "<h1 align=\"center\">Студенты</h1>";
        ?>
    <!-- Форма добавления студентов -->
    <form name="cform" action="#" method="post">
    <h3 align='center'>Добавить студента</h3>
    <table class="table-bordered table-condensed" border='1' align="center">
        <tr>
            <td>
                ФИО
            </td>
            <td>
                <input id="name" class="form-control" name='name'></input>
            </td>
        </tr>
        <tr>
            <td>
                Группа
            </td>
            <td>
                <select name="id_group" class="form-control">
                    <?
                    foreach ($data['group'] as $group){
                        echo "<option value='{$group['id']}'>{$group['name']}</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td align="center" colspan='2'>
                <a href="#" class="btn btn-success btn-sm crtStud">Добавить студента</a>
            </td>
        </tr>
    </table>
    </form>
    <!-- ***Конец формы -->

    <!-- Таблица для вывода студентов -->
    <table class="table table-bordered table-condensed table-hover" border='1' align='center'>
        <tr>
            <td>
                №
            </td>
            <td>
                ФИО
            </td>
            <td>
                Группа
            </td>
            <td>
                Дата создания
            </td>
            <td>
                Редактировать
            </td>
            <td>
                Удалить
            </td>
        </tr>
        <br><br>
        <?
        if($data['student'] == [])
        {
            echo "<h3 align=\"center\">Записи отсутствуют!</h3>";
        }
        else echo "<h3 align=\"center\">Управление записями</h3>";
        ?>
        <tbody>
        <input type="hidden" class="afthid">
        <?
        $init = 0;
        foreach ($data['student'] as $student)
        {
            $init++;
            echo "
                <tr id='med_{$student['id']}'>

                <td>
                    {$init}
                </td>

                <td>
                    {$student['name']}
                </td>

                <td>
                    {$student['name_group']}
                </td>

                <td>
                    ".date("d.m.Y", strtotime($student['date']))."
                </td>

                <!-- Форма редактирования --->
                <form action='{$this->config->base_url_directory()}student' method='get'>
                    <td class='align-btn'>
                        <input name='id' type='hidden' value=" .$student['id']. ">
                        <input class='btn btn-warning btn-sm' align='center' type='submit' value='Редактировать'>
                    </td>
                </form>
                <!-- Конец формы -->

                <!-- Форма удаления записи о студенте --->
                <form>
                    <td class='align-btn'>
                        <a href='' id='delbt-{$student['id']}' class='btn btn-danger btn-sm delStud'>Удалить</a>
                    </td>
                </form>
                <!-- Конец формы -->

                </tr>";
        };
        ?>
        </tbody>

    </table>
    <? } ?>
</div>
