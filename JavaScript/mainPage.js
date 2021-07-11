
function openCard(id){
    var item = document.getElementById(id);
    item.style.display = "flex";
}
function calculateSum(id, cost, sale) {
    var sum = 0;
    var item = document.getElementById("number" + id).value;
    var sumOutput = document.getElementById("sum" + id);
    if (sale == 0) sum = cost * item;
    else sum = item * sale;
    sumOutput.innerHTML = sum  + " Гривен";
}
jQuery(function($){
$(document).mouseup(function (e){ 
    var div = $(".cards__field"); 
    var currency__popup = $(".cards__details"); 
    if (!div.is(e.target) 
        && div.has(e.target).length === 0) {
        currency__popup.fadeOut("slow");
    }
});
});