function vfun(){
    var email = document.forms["myform"]["email"].value;
    var pass = document.forms["myform"]["pass"].value;


    if(email == null || email ==""){
        document.getElementById("errorbox").innerHTML = "enter the email";
        return false;
    }

    if(pass == null || pass ==""){
        document.getElementById("errorbox").innerHTML = "enter the password";
        return false;
    }



}