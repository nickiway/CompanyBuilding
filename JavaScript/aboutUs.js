var circles = document.getElementsByClassName("circles");
var info = document.getElementsByClassName("info");
function ShowInfo1(){
    circles[0].addEventListener('mouseover', new function (){
        info[0].style.border = '1pt solid black';
    });
}
function ShowInfo2(){
    circles[1].addEventListener('mouseover', new function (){
        info[1].style.border = '1pt solid black';
    });
}
function ShowInfo3(){
    circles[2].addEventListener('mouseover', new function (){
        info[2].style.border = '1pt solid black';
    });
}
function ShowInfo4(){
    circles[3].addEventListener('mouseover', new function (){
        info[3].style.border = '1pt solid black';
    });
}