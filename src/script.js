function sprawdzEmail2() {
    let email2 = document.forms["formularz2"]["email2"].value;
    if (email2.indexOf("@zs6sobieski.edu.pl") <= 1) {
        alert("Ten e-mail nie jest w domenie Sobieskiego :(");
        return false;
    } else {
        alert("Ankieta została przesłana");
    }
}

function sprawdzEmail() {
    let email = document.forms["formularz"]["email"].value;
if (email.indexOf("@zs6sobieski.edu.pl") <= 1) {
        alert("Ten e-mail nie jest w domenie Sobieskiego :(");
        return false;
    } else {
        alert("Ankieta została przesłana");
    }
}
