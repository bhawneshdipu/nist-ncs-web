$(document).ready(function(){

    $('#searchid').keyup(function(){
        var searchid = $(this).val();
        var dataString = 'searchid='+searchid;
        var Result = $('#resultid');
        Result.html("Please wait..."+searchid);
        
        if(searchid!=null){
            $.ajax({
                type: 'POST',
                url: 'student_search_result.php',
                data: dataString,
                success: function(html)
                {

                    Result.html(html).show();
                }
            });
        }else{
            Result.html("----");
        }
    });


});


