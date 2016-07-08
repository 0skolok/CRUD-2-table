/**
 * Created by Виктор on 08.07.2016.
 */

$(document).ready(function() {
    $(".delStud").click(function (e) {
        e.preventDefault();
        var clickedID = this.id.split("-"); //Разбиваем строку (Split работает аналогично PHP explode);
        var DbNumberID = clickedID[1]; //и получаем номер из массива
        var myData = 'recordToDelete='+ DbNumberID; //выстраиваем  данные для POST
        jQuery.ajax({
            type: "POST", // HTTP метод  POST или GET
            url: "http://project3:81/public/student/delete", //url-адрес, по которому будет отправлен запрос
            dataType: "text", // Тип данных
            data:myData, //post переменные
            success:function(){
                // в случае успеха, скрываем, выбранный пользователем для удаления, элемент
                $('#med_'+DbNumberID).fadeOut("slow");
            },
            error:function (xhr, ajaxOptions, thrownError){
                //выводим ошибку
                alert(thrownError);
            }
        });
    });

    $('.crtStud').click( function(e){
        e.preventDefault();
        //statements to validate the form
        if (($('input[name="name"]').val() != "")) {
            //hide the form
            var clickedID = $('select[name="id_group"]').val().split("-"); //Разбиваем строку (Split работает аналогично PHP explode)
            var name = $.trim($('#name').val());

            $.ajax({
                type: 'POST',
                url: 'http://project3:81/public/student/create',
                data: {name : name, id_group: clickedID},
                error: function(req, text, error) {
                    alert('Ошибка AJAX: ' + text + ' | ' + error);
                },
                success: function (html) {
                    //$('#name').val("");
                    //$(html).insertAfter($(".afthid"));
                    alert('Запись добавлена');
                },
                dataType: 'text'
            });
            //stay on the page
            return false;
        }
        else alert('Заполните поле ФИО!');
    });

    //function update_table()
    //{
    //    var clickedID = $('select[name="id_group"]').val().split("-"); //Разбиваем строку (Split работает аналогично PHP explode)
    //    var name = $.trim($('#name').val());
    //
    //    $.ajax({
    //        type: 'POST',
    //        url: 'http://project3:81/public/student/create',
    //        data: {name : name, id_group: clickedID},
    //        error: function(req, text, error) {
    //            alert('Ошибка AJAX: ' + text + ' | ' + error);
    //        },
    //        success: function (html) {
    //            //$('#name').val("");
    //            //$(html).insertAfter($(".afthid"));
    //            alert('Запись добавлена');
    //        },
    //        dataType: 'text'
    //    });
    //}
});