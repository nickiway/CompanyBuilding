// variables label and input items 
const labelItems = document.getElementsByClassName("register__notification"),
inputItems = document.getElementsByTagName("input");

// Functions 
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
function checkMail(email) {
    const re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    return re.test(String(email).toLowerCase());
}
function checkLength(itemToCheck, itemDisplay) {
    if(itemToCheck.value.length <= 3) {
        itemDisplay.style.display = "none";
        return false;
    } else return true; 
}

// function getIndex(labelItems, inputItems) {
//     counter = 0;
//     labelItems.map(function () {
//         if (inputItems[counter].name == labelItems.name) return counter;
//         counter++; 
//     });
// }
// console.log(getIndex(labelItems, inputItems));
setInterval(() => {
    // if input < 3 just display none label;
    checkLength(inputItems['Email'], labelItems[0]);
    // Checking the email password
    if (checkLength(inputItems['Email'], labelItems[0]) == true && checkMail(inputItems['Email'].value) == false) {
            labelItems[0].style.display = "block";
    } else labelItems[0].style.display = "none";    
    // Password Checking 
    if (inputItems['Pass'].value.length <= 6 && inputItems['Pass'].value != "") {
        labelItems[1].style.display = "block",
        labelItems[1].style.backgroundColor = "red",
        labelItems[1].innerHTML = "✕";
        
    }
    else if (inputItems['Pass'].value == "") 
        labelItems[1].style.display = "none";
    else{
        labelItems[1].style.backgroundColor = "green";
        labelItems[1].innerHTML = "✔";
    }
}, 100);