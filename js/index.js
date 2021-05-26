function submitForm() {

    var fname = document.forms["myForm"]["fname"].value;
    var lname = document.forms["myForm"]["lname"].value;
    var email = document.forms["myForm"]["email"].value;
    var gender = document.forms["myForm"]["gender"].value;
    var city = document.forms["myForm"]["city"].value;
    var errorMsg = document.getElementById("errorMsg");

    if (fname == null || fname == "") {
        errorMsg.innerHTML = "Please enter your first name!";
        return false;
    }
    if (lname == null || lname == "") {
        errorMsg.innerHTML = "Please enter your last name!";
        return false;
    }
    else if (email == null || email == "") {
        errorMsg.innerHTML = "Please enter your email id!";
        return false;
    }
    else if ((gender[0].checked == false) && (gender[1].checked == false) && (gender[2].checked == false)) {
        errorMsg.innerHTML = "Please select gender!";
        return false;
    }
    else if (city.selectedIndex == 0) {
        errorMsg.innerHTML = "Please select one city!";
        return false;
    }
}
