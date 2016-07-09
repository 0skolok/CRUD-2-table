<?php
/**
 * Created by PhpStorm.
 * User: Виктор
 * Date: 05.07.2016
 * Time: 15:05
 */

?>
    <link rel="stylesheet" type="text/css" href="<? echo $this->config->base_url_directory();?>css/table.css">

<div class="container stud">
    <br><br>
    <?
        if($data['student'] == [])
        {
            echo "<h1 align=\"center\">Запись отсутствует!</h1>";
        }
        else
        {
            echo "<h1 align=\"center\">Редактирование данных студента</h1>";
    ?>
    <br>
    <!-- Форма изменения данных студента -->
    <form name="cform">
        <table class="table-bordered table-condensed" border='1' align="center">
            <?
            //While начало
               foreach ($data['student'] as $student){
                    echo "
                                <tr>
                                    <td>
                                        ФИО
                                    </td>
                                    <td>
                                         <input id='name' class='form-control' name='name' value='{$student['name']}'></input>
                                    </td>
                                </tr>

                                <input id='date' class='form-control' type='hidden' name='date' value='{$student['date']}'></input>

                                <tr>
                                    <td>
                                        Группа
                                    </td>
                                    <td>
                                        <select id='id_group' class='form-control' name='id_group'>
                     ";


                    foreach ($data['group'] as $group) {
                        echo "<option ";
                        if ($student['id_group'] == $group['id_group']) echo " selected "; /* если нужная группа, то выделить */
                        echo " value='{$group['id']}'>{$group['name']}</option>";
                    }


                    echo "
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td align='center' colspan='2'>
                                    <input id='id' name='id' type='hidden' value='{$student['id']}'>
                                    <a href='' class='btn btn-success btn-sm chanStud'>Сохранить</a>
                                </td>
                            </tr>
                    ";
                }
            //While конец
            ?>
        </table>
    </form>
    <!-- Конец формы -->
    <? } ?>
</div>
