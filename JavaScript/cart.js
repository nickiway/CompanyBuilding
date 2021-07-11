var cartCount = 0;
let cart = [];
// Uploading the cart till the session 
function loadCart() {
    if (JSON.parse(sessionStorage.getItem('shoppingCart')) != null) {
        var length = JSON.parse(sessionStorage.getItem('shoppingCart')).length;
        for (let index = 0; index < length; index++) {
            cart.push(JSON.parse(sessionStorage.getItem('shoppingCart'))[index]);
        }
    }
}
loadCart();
// Save cart 
function saveCart() {
    sessionStorage.setItem('shoppingCart' , JSON.stringify(cart));    
}
// Constructor
function Item(id, name, price, image, count) {
    this.id = id;
    this.name = name;
    this.price = price;
    this.image = image;
    this.count = count;
  }

// Getting Count of Cart just for load
for (var item in cart) cartCount += cart[item].count;  
document.getElementById("cartResult").innerHTML = cartCount;
// Uploading Cart
function uploadCart() {
    var cartBlock = document.getElementById("cart");
    cartBlock.innerHTML = null;
    var totalPrice = 0;
    cartBlock.innerHTML += "<h3>Корзина</h3>";
    for (var item in cart) {
        totalPrice += Number(cart[item].price) * cart[item].count;
        cartBlock.innerHTML += "<p class = 'toCenter'>"+
        "<img class = \"cart__image\" src = \"../images/" +
         cart[item].image+ "\">" +  cart[item].name+ "  "+
         cart[item].price +"  "+  cart[item].count + "</p>";
    }
    cartBlock.innerHTML += "Total price : " + totalPrice;
}
// Add to Cart 
function addCart(id, name, price, image) {
    var check = 0;
    for (var item in cart) {
        if (cart[item].id == id) {
            cart[item].count++;
            check++;
        }
    }
    if (check == 0) {
        var item = new Item(id, name, price, image, 1);
        cart.push(item);  
    }
    cartCount++;
    saveCart();  
    uploadCart();
// Uploading the counter if we click
    document.getElementById("cartResult").innerHTML = cartCount;
}

// Clear Cart
function clearCart() {
    cart = [];
    cartCount = 0;
    sessionStorage.setItem('shoppingCart', null);
    document.getElementById("cartResult").innerHTML = cartCount;
    uploadCart();
}
function openCart() {
    var cart = document.getElementById("cart-container");
    cart.style.display = "flex";
}