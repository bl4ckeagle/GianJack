var Button;
{
    del:function deleting(id) {
        var r = confirm("Are you sure?");
        /*Get old link*/
        var oldLink = window.location.href;
        if (r == true) {

//rideriect
            window.location.href = oldLink + "/delete" + "/" + id;
        }
        else {
            //ABORT


        }
    }
    edit:function editing(id) {


        /*Get old link*/
        var oldLink = window.location.href;
        if (r == true) {

//rideriect
            window.location.href = oldLink + "/editing" + "/" + id;
        }
        else {
            //ABORT


        }
    }
   insert:function inserting ()
   {
       /*Get old link*/
       var oldLink = window.location.href;
       window.location.href = oldLink + "/insert"

   }

   goBack:function goback()
    {
        location.href = document.referrer


    }

}

