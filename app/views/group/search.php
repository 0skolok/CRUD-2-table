<?php
/**
 * Created by PhpStorm.
 * User: Виктор
 * Date: 05.07.2016
 * Time: 13:30
 */

?>
<link rel="stylesheet" type="text/css" href="<? echo $this->config->base_url_directory();?>css/table.css">
<br>
<div class="container stud">
    <?
    foreach ($data['name'] as $name)
    if($data['student'] == [])
    {
        echo "<h1>Записи по заданной группе (".$name['name'].") отсутствуют!</h1>";
    }
    else {
        echo "<h1 align=\"center\">Просмотр состава группы ". $name['name'] ."</h1>";


    ?>
    <!-- Таблица для вывода студентов в конкрентой группе -->
    <table class="table-bordered table-condensed" border='1' align='center'>
        <tr>
            <td>
                №
            </td>
            <td>
                Название
            </td>
            <td>
                Дата добавления
            </td>
        </tr>
        <br><br>
        <?
        $i = 1;
        foreach ($data['student'] as $student)
        {
            echo "
                    <tr>
                        <td>
                            ".$i++."
                        </td>

                        <td>
                            ".$student['name']."
                        </td>

                        <td>
                            ".$student['date']."
                        </td>
                    </tr>";
        };
        ?>

    </table>
<? } ?>
</div>