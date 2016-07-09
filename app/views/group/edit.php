<?php
/**
 * Created by PhpStorm.
 * User: Виктор
 * Date: 05.07.2016
 * Time: 20:19
 */

?>
<link rel="stylesheet" type="text/css" href="<? echo $this->config->base_url_directory();?>css/table.css">

<div class="container stud">
    <br><br>
    <?
    if($data['group'] == [])
    {
        echo "<h1 align=\"center\">Запись отсутствует!</h1>";
    }
    else
    {
        echo "<h1 align=\"center\">Редактирование группы</h1>";
    ?>
    <br>
    <!-- Форма изменения данных группы -->
    <form name="cform">
        <table class="table-bordered table-condensed"  border='1' align="center">
            <?
            //While начало
            foreach($data['group'] as $group)
            {
                echo "
                                    <tr>
                                        <td>
                                            Название
                                        </td>
                                        <td>
                                             <input id='name' class='form-control'  name='name' value='{$group['name']}'></input>
                                        </td>
                                    </tr>

                                    <input id='date' type='hidden' name='date' value='{$group['date']}'></input>

                                    <tr>
                                        <td align='center' colspan='2'>
                                            <input id='id' name='id' type='hidden' value=".$group['id'].">
                                            <a href='' class='btn btn-success btn-sm chanGr'>Сохранить</a>
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