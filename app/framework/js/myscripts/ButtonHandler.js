{
   function deleting(id) {
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
    function editing(id) {


        /*Get old link*/
        var oldLink = window.location.href;
        window.location.href = oldLink + "/editing" + "/" + id;
    }



 function inserting ()
   {
       /*Get old link*/
       var oldLink = window.location.href;
       window.location.href = oldLink + "/insert"

   }

  function goback()
    {

        location.href = document.referrer


    }

    function photoInserter()
    {
        /*Get old link*/
        var oldLink = window.location.href;
        window.location.href = oldLink + "/photoinsert"

    }

    function bandmembers()
    {

        location.href='bioband/members'
    }
    
    function frontendmembers(name) {

        location.href='biography/'+name





        
    }

}
