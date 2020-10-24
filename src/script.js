function sprawdzEmail()
{
    let email = document.forms["formularz"]["email"].value;
    let tresc = document.forms["formularz"]["tresc"].value;
    if(email.indexOf("zs6sobieski.edu.pl") >=1)
    {
        alert("Ten e-mail jest w w domenie Sobieskiego!");
        return false;
    }
    else
    {
        alert("Ten e-mail nie jest w domenie Sobieskiego :(");
        return false;
    }
}