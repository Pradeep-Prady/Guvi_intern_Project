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

    if(email != '' && pass != ''){
        alert("Login successfull");
    }

}


function vfun1(){

    var uname1 = document.forms["myform2"]["uname1"].value;
    var email1 = document.forms["myform2"]["email1"].value;
    var upswd1 = document.forms["myform2"]["upswd1"].value;
    var upswd2 = document.forms["myform2"]["upswd2"].value;


    if(uname1 == null || uname1 ==""){
        document.getElementById("errorbox").innerHTML = "enter the name";
        return false;
    }

    if(email1 == null || email1 ==""){
        document.getElementById("errorbox").innerHTML = "enter the email";
        return false;
    }

    if(upswd1 == null || upswd1 ==""){
        document.getElementById("errorbox").innerHTML = "enter the password";
        return false;
    }

    if(upswd2 == null || upswd2 ==""){
        document.getElementById("errorbox").innerHTML = "enter the password";
        return false;
    }


    if(upswd2 != upswd2){
        document.getElementById("errorbox").innerHTML = "password don't match";
        return false;
    }


    if(uname1 != '' && email1 != '' && upswd2 != '' && upswd2 != ''){
        alert("Register successfull");
    }
}