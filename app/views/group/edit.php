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
    <form action='<? echo $this->config->base_url_directory() ?>group/edit' method='post'>
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
                                             <input class='form-control'  name='name' value='{$group['name']}'></input>
                                        </td>
                                    </tr>

                                    <input type='hidden' name='date' value='{$group['date']}'></input>

                                    <tr>
                                        <td align='center' colspan='2'>
                                            <input name='id' type='hidden' value=".$group['id'].">
                                            <input class='btn btn-success btn-sm'   type='submit' value='Сохранить'>
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