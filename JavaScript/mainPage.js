// vars 
var mostPreferable = document.getElementsByClassName("items_first");
for (let index = 0; index < mostPreferable.length; index++) {
    var size = Math.random()*100 + 400;
    var rotate = Math.random()*360;
    mostPreferable[index].style.height = size+"px";
    mostPreferable[index].style.width = size+"px";
    

}