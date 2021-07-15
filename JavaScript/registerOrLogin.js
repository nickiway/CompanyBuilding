function showPass(id) {
    var item = document.getElementById(id);
    var button = document.getElementsByClassName("register__button");
    if (item.type != "text") {
        item.type = "text";
        button[0].innerHTML = "Hide password";
    } else{ 
        item.type = "password";
        button[0].textContent = "Show password";
    }
}