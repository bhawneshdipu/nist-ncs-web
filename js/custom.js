$(document).ready(function(){
    $('#uname').keyup(function(){
        var username = $(this).val(); // Get username textbox using $(this)
        var Result = $('#usernamemsg'); // Get ID of the result DIV where we display the results
        if(username.length > 2) { // if greater than 2 (minimum 3)
            Result.html('<span class="glyphicon glyphicon-refresh text-success"> Loading...</span>'); // you can use loading animation here
            var dataPass = 'action=usernameavailability&username='+username;
            $.ajax({ // Send the username val to available.php
                type : 'POST',
                data : dataPass,
                url  : 'check.php',
                success: function(responseText){ // Get the result
                    if(responseText == 0){
                        Result.html('<span class="glyphicon glyphicon-ok text-success"> Available</span>' );
                    }
                    else if(responseText > 0){
                        Result.html('<span class="glyphicon glyphicon-remove text-danger"> Taken</span>' );
                    }
                    else{
                        alert('Problem with sql query'+responseText);
                    }
                }
            });
        }else{
            Result.html('<span class="glyphicon glyphicon-remove text-danger"> Enter atleast 3 characters</span>');
        }
        if(username.length == 0) {
            Result.html('');
        }
    });
    $('#uemail').keyup(function(){
        var username = $(this).val(); // Get username textbox using $(this)
        var Result = $('#useremailmsg'); // Get ID of the result DIV where we display the results
        var filter = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;



        if(username.length > 3 && filter.test(username)) { // if greater than 2 (minimum 3)
            Result.html('<span class="glyphicon glyphicon-refresh text-success"> Loading...</span>'); // you can use loading animation here
            var dataPass = 'action=useremailavailability&useremail='+username;
            $.ajax({ // Send the username val to available.php
                type : 'POST',
                data : dataPass,
                url  : 'check.php',
                success: function(responseText){ // Get the result
                    if(responseText == 0){
                        Result.html('<span class="glyphicon glyphicon-ok text-success">  Available</span>');
                    }
                    else if(responseText > 0){
                        Result.html('<span class="glyphicon glyphicon-remove text-danger">  Taken</span>');
                    }
                    else{
                        alert('Problem with sql query'+responseText);
                    }
                }
            });
        }else{
            Result.html('<span class="glyphicon glyphicon-remove text-danger">  Enter valid email</span>');
        }
        if(username.length == 0) {
            Result.html('');
        }
    });
    $('#unistid').keyup(function(){
        var username = $(this).val(); // Get username textbox using $(this)
        var Result = $('#usernistidmsg'); // Get ID of the result DIV where we display the results
        if(username.length==9) { // if greater than 2 (minimum 3)
            Result.html('Loading...'); // you can use loading animation here
            var dataPass = 'action=usernistidavailability&usernistid='+username;
            $.ajax({ // Send the username val to available.php
                type : 'POST',
                data : dataPass,
                url  : 'check.php',
                success: function(responseText){ // Get the result
                    if(responseText == 0){
                        Result.html('<span class="glyphicon glyphicon-ok text-success">   Available</span>');
                    }
                    else if(responseText > 0){
                        Result.html('<span class="glyphicon glyphicon-remove text-danger">   Taken</span>');
                    }
                    else{
                        alert('Problem with sql query'+responseText);
                    }
                }
            });
        }else{
            Result.html('<span class="glyphicon glyphicon-remove text-danger">   Enter valid nist id</span>');
        }
        if(username.length == 0) {
            Result.html('');
        }
    });
    $('#umobile').keyup(function(){
        var username = $(this).val(); // Get username textbox using $(this)
        var Result = $('#usermobilemsg'); // Get ID of the result DIV where we display the results
        if(username.length ==10) { // if greater than 2 (minimum 3)
            Result.html('Loading...'); // you can use loading animation here
            var dataPass = 'action=usermobileavailability&usermobile='+username;
            $.ajax({ // Send the username val to available.php
                type : 'POST',
                data : dataPass,
                url  : 'check.php',
                success: function(responseText){ // Get the result
                    if(responseText == 0){
                        Result.html('<span class="glyphicon glyphicon-ok text-success">   Available</span>');
                    }
                    else if(responseText > 0){
                        Result.html('<span class="glyphicon glyphicon-remove text-danger">   Taken</span>');
                    }
                    else{
                        alert('Problem with sql query'+responseText);
                    }
                }
            });
        }else if(username.length == 0) {
            Result.html('');
        }else{

            Result.html('<span class="glyphicon glyphicon-remove text-danger">   Enter  10 Mobile Number </span>');
        }


    });


    $('#upass').keyup(function()
    {
        $('#useropmsg').html(checkStrength($('#upass').val()))
    })

    /*
     checkStrength is function which will do the
     main password strength checking for us
     */

    function checkStrength(password)
    {
        //initial strength
        var strength = 0

        //if the password length is less than 6, return message.
        if (password.length < 4) {
            return '<span class="glyphicon glyphicon-remove text-danger">   Too short</span>'
        }

        //length is ok, lets continue.

        //if length is 8 characters or more, increase strength value
        if (password.length > 7) strength += 1

        //if password contains both lower and uppercase characters, increase strength value
        if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/))  strength += 1

        //if it has numbers and characters, increase strength value
        if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/))  strength += 1

        //if it has one special character, increase strength value
        if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/))  strength += 1

        //if it has two special characters, increase strength value
        if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1

        //now we have calculated strength value, we can return messages

        //if value is less than 2
        if (strength < 2 )
        {
            return '<span class="glyphicon glyphicon-exclamation-sign text-warning">   Weak</span>'
        }
        else if (strength == 2 )
        {
            return '<span class="glyphicon glyphicon-ok text-success">   Good</span>'
        }
        else
        {
            return '<span class="glyphicon glyphicon-thumbs-up text-success">   Strong</span>'
        }
    }

    $('#ucpass').keyup(function(){
        var usercp = $(this).val(); // Get username textbox using $(this)
        var Result = $('#usercpmsg'); // Get ID of the result DIV where we display the results
        var userop=$('#upass').val();
        if(usercp!=userop){
            Result.html('<span class="glyphicon glyphicon-remove text-warning">   Password did not matched</span>')
        }else{
            Result.html('<span class="glyphicon glyphicon-thumbs-up text-success">   Accepted</span>');
        }
    });

    $('#uaccount').change(function(){
        var ua = $(this).val(); // Get username textbox using $(this)
        var Result = $('#userpcodediv');
        if(ua=='mentor') { // if greater than 2 (minimum 3)
            Result.removeClass('hidden');
        }else{
            Result.addClass('hidden');
            
        }
    });

    $('#userpcode').keyup(function(){
        var usercode = $(this).val(); // Get username textbox using $(this)
        var Result = $('#userpcodemsg');// Get ID of the result DIV where we display the results
       
        if(usercode.length > 2) { // if greater than 2 (minimum 3)
            Result.html('<span class="glyphicon glyphicon-exclamation-sign text-warning">   </span>'); // you can use loading animation here
            var dataPass = 'action=userpcodeavailability&userpcode='+usercode;
            $.ajax({ // Send the username val to available.php
                type : 'POST',
                data : dataPass,
                url  : 'check.php',
                success: function(responseText){ // Get the result
                    if(responseText == '1'){
                    $('#register').prop('disabled', false);

                        Result.html('<span class="glyphicon glyphicon-ok text-success">   </span>');
                    }
                    else if(responseText == '0'){
                        Result.html('<span class="glyphicon glyphicon-remove text-danger">   </span>');
                        $('#register').prop('disabled', true);
                    }
                    else{
                        alert('Problem with sql query'+responseText);
                    }
                }
            });
        }else{
            Result.html('<span class="glyphicon glyphicon-exclamation-sign text-warning">   </span>');
        }
        if(usercode.length == 0) {
            Result.html('');
        }
    });


});