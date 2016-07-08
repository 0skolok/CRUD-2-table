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
if($data['group'] == [])
{
    echo "<h1 align=\"center\">Записи отсутствуют!</h1>";
}
else
{
    echo "<h1 align=\"center\">Группы</h1>";

?>
    <!-- Форма добавления группы -->
    <form action='<? echo $this->config->base_url_directory() ?>group/create' method='post'>
        <h3 align='center'>Добавить новую группу</h3>
        <table class="table-bordered table-condensed" border='1' align="center">
            <tr>
                <td>
                    Название
                </td>
                <td>
                    <input class='form-control' name='name'></input>
                </td>
            </tr>
            <tr>
                <td align="center" colspan='2'>
                    <input class='btn btn-success btn-sm' type='submit' value="Добавить группу">
                </td>
            </tr>
        </table>
    </form>
    <!-- Конец формы -->

    <!-- Таблица для вывода групп -->
    <table class="table table-bordered table-condensed table-hover" border='1' align='center'>
        <tr>
            <td>
                Название
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
        <h3 align='center'>Управление группами</h3>
        <?
        foreach ($data['group'] as $group){
            echo "
                    <tr>

                    <td>
                        <a href='{$this->config->base_url_directory()}group/search?id={$group['id']}'>" .$group['name']."</a>
                    </td>

                    <td>
                        ".date("d.m.Y", strtotime($group['date']))."
                    </td>

                    <!-- Форма редактирования --->
                    <form action='{$this->config->base_url_directory()}group' method='get'>
                        <td class='align-btn'>
                            <input name='id' type='hidden' value=" .$group['id']. ">
                            <input class='btn btn-warning btn-sm' align='center' type='submit' value='Редактировать'>
                        </td>
                    </form>
                    <!-- Конец формы -->

                    <!-- Форма удаления записи --->
                    <form action='{$this->config->base_url_directory()}group/delete' method='post'>
                        <td class='align-btn'>
                            <input name='id' type='hidden' value=" .$group['id'].">
                            <input class='btn btn-danger btn-sm' width type='submit' value='Удалить'>
                        </td>
                    </form>
                    <!-- Конец формы -->

                    </tr>";
        };
        ?>
    </table>
<? } ?>
</div>
