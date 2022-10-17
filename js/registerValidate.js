// validate username, password, phone
function validate()
{
    var username=document.forms["register"]["username"].value;
    var fullname=document.forms["register"]["realname"].value;
    var email=document.forms["register"]["email"].value;
    var password1=document.forms["register"]["password"].value;
    var password2=document.forms["register"]["repassword"].value;
    
    
    
    if ((username==null || username=="") ||(fullname==null || fullname=="") || (email==null || email=="") ||
     (password1==null || password1=="") || (password2==null || password2==""))
    {
        alert("Please fill all mandatory fields!");return false;
    }

    if(password1!=password2)
    {
        alert("Passwords do not match!");return false;
    }
    
    else
    return true;
}

// validate the password
function pwdconfirm()
{
    var password1=document.forms["register"]["password1"].value;
    var password2=document.forms["register"]["password2"].value;
    if(password1!=password2)
    {
        alert("Passwords do not match!");return false;
    }
}
