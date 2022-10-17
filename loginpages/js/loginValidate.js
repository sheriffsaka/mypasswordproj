// validate username, password, phone
function validate()
{
    var username=document.forms["loginform"]["username"].value;
    var password1=document.forms["loginform"]["password1"].value;
    
    
    
    if ((username==null || username=="") || (password1==null || password1==""))
    {
        alert("Please fill all mandatory fields!");return false;
    }

    // if(password1!=password2)
    // {
    //     alert("Passwords do not match!");return false;
    // }
    
    else
    return true;
}

// validate the password
// function pwdconfirm()
// {
//     var password1=document.forms["loginform"]["password1"].value;
//     if(password1!=password2)
//     {
//         alert("Passwords do not match!");return false;
//     }
// }
