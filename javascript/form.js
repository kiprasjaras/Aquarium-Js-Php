function validform() {

    var a = document.forms["my-form"]["full_name"].value;
    var b = document.forms["my-form"]["email_address"].value;
    var c = document.forms["my-form"]["phone_number"].value;
    var d = document.forms["my-form"]["message"].value;

    if (a==null || a=="")
    {
        alert("Please fill in the required fields");
        return false;
    }else if (b==null || b=="")
    {
        alert("Please fill in the required fields");
        return false;
    }else if (c==null || c=="")
    {
        alert("Please fill in the required fields");
        return false;
    }else if (d==null || d=="")
    {
        alert("Please fill in the required fields");
        return false;
    }else if (e==null || e=="")
    {
    }

}