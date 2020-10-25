function sprawdzEmail() {
    let email = document.forms["formularz"]["email"].value;
    if (email.indexOf("zs6sobieski.edu.pl") >= 1) {

    }
    else {
        alert("Ten e-mail nie jest w domenie Sobieskiego :(");
        return false;
    }
}