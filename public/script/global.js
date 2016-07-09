/**
 * Created by Виктор on 08.07.2016.
 */

$(document).ready(function() {

    /*
    *
    *  Student
    *
     */
    $(".delStud").click(function (e) {
        e.preventDefault();
        var clickedID = this.id.split("-"); //Разбиваем строку (Split работает аналогично PHP explode);
        var DbNumberID = clickedID[1]; //и получаем номер из массива
        var myData = 'recordToDelete='+ DbNumberID; //выстраиваем  данные для POST
        jQuery.ajax({
            type: "POST", // HTTP метод  POST или GET
            url: "student/delete", //url-адрес, по которому будет отправлен запрос
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
        var name = $.trim($('#name').val());
        if (name != "") {
            //hide the form
            var clickedID = $('select[name="id_group"]').val(); //Разбиваем строку (Split работает аналогично PHP explode)
            $.ajax({
                type: 'POST',
                url: 'student/create',
                data: {
                    name : name,
                    id_group: clickedID
                },
                error: function(req, text, error) {
                    alert('Ошибка AJAX: ' + text + ' | ' + error);
                },
                success: function () {
                    //$('#name').val("");
                    //$(html).insertAfter($(".afthid"));
                    location.reload();
                },
                dataType: 'text'
            });
            //stay on the page
            return false;
        }
        else alert('Заполните поле ФИО!');
    });

    $('.chanStud').click( function(e){
        e.preventDefault();
        //statements to validate the form
        var name = $.trim($('#name').val());
        var date = $.trim($('#date').val());
        var id_group = $.trim($('#id_group').val());
        var id = $.trim($('#id').val());
        if (name != "") {
            //hide the form
            $.ajax({
                type: 'POST',
                url: 'student/edit',
                data: {
                    name : name,
                    id: id,
                    id_group: id_group,
                    date: date
                },
                error: function(req, text, error) {
                    alert('Ошибка AJAX: ' + text + ' | ' + error);
                },
                success: function () {
                    //$('#name').val("");
                    //$(html).insertAfter($(".afthid"));
                    location.href = 'student';
                },
                dataType: 'text'
            });
            //stay on the page
            return false;
        }
        else alert('Поле ФИО пустое!');
    });

    /*
    * End student
    * */

    /*
    *
    * Group
    *
    * */

    $(".delGr").click(function (e) {
        e.preventDefault();
        var clickedID = this.id.split("-"); //Разбиваем строку (Split работает аналогично PHP explode);
        var DbNumberID = clickedID[1]; //и получаем номер из массива
        var myData = 'recordToDelete='+ DbNumberID; //выстраиваем  данные для POST
        jQuery.ajax({
            type: "POST", // HTTP метод  POST или GET
            url: "group/delete", //url-адрес, по которому будет отправлен запрос
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

    $('.crtGr').click( function(e){
        e.preventDefault();
        //statements to validate the form
        var name = $.trim($('#name').val());
        if (name != "") {
            //hide the form
            $.ajax({
                type: 'POST',
                url: 'group/create',
                data: {
                    name : name
                },
                error: function(req, text, error) {
                    alert('Ошибка AJAX: ' + text + ' | ' + error);
                },
                success: function () {
                    //$('#name').val("");
                    //$(html).insertAfter($(".afthid"));
                    location.reload();
                },
                dataType: 'text'
            });
            //stay on the page
            return false;
        }
        else alert('Заполните поле название группы!');
    });

    $('.chanGr').click( function(e){
        e.preventDefault();
        //statements to validate the form
        var name = $.trim($('#name').val());
        var date = $.trim($('#date').val());
        var id = $.trim($('#id').val());
        if (name != "") {
            //hide the form
            $.ajax({
                type: 'POST',
                url: 'group/edit',
                data: {
                    name : name,
                    id: id,
                    date: date
                },
                error: function(req, text, error) {
                    alert('Ошибка AJAX: ' + text + ' | ' + error);
                },
                success: function () {
                    //$('#name').val("");
                    //$(html).insertAfter($(".afthid"));
                    location.href = 'group';
                },
                dataType: 'text'
            });
            //stay on the page
            return false;
        }
        else alert('Поле название группы пустое!');
    });
    /*
     * End group
     * */
});