function sprawdzEmail() {
    let email = document.forms["formularz"]["email"].value;
    if (email.indexOf("@zs6sobieski.edu.pl") >= 1)
    {
        alert("Ten e-mail jest w domenie Sobieskiego");
        return false;
    }
}