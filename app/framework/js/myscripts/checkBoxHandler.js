/**
 * Created by Kevin on 14.09.2016.
 */

$(function () {

    /*get all pictures with checkbox id*/
    var checkboxes = [];
    var dataToSend = [];
    var url = window.location.href;
    $('.picturesDeleteForm').find('input').each(function () {
        checkboxes.push(this.id)
    });


    $('#button2').click(function () {

        /*ittarate over checkboxes = id of checkboxes*/
        checkboxes.forEach(function (entry) {

            console.log(entry);
            /*check if checkboxes is checked*/
            if ($('#' + entry).is(":checked")) {

                console.log("checked");
                var path = $('#img' + entry).attr("src");
                console.log(path)

                dataToSend.push($.trim(path));
            } else {
                console.log("nothing checked")
            }


        });

        console.log(dataToSend)

        $.ajax({
            url: url,
            type: 'POST',
            data: JSON.stringify(dataToSend),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            async: true
        });
        /*erease content of dataToSend*/
        dataToSend = [];
        /*set timeout and reload page*/
     /*   $(function () {
            setTimeout(function () {
                location.reload();
            }, 1000)


        })
*/

    });


});