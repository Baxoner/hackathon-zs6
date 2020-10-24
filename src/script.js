function sprawdzEmail()
{
    let email = document.forms["formularz"]["email"].value;
    if(email.indexOf("zs6sobieski.edu.pl") >=1)
    {
        alert("e-mail jest w w domenie Sobieskiego!");
        return false;
    }
    else
    {
        alert("e-mail nie jest w domenie Sobieskiego :(");
        return false;
    }
}