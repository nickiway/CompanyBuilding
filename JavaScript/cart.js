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
// Save cart 
loadCart();
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
// Add to Cart 
function addCart(id, name, price, image) {
    var check = 0;
    for (var item in cart) {
        if (cart[item].id == id) {
            cart[item].count++;
            check++;
            break;
        }
    }
    if (check == 0) {
        var item = new Item(id, name, price, image, 1);
        cart.push(item);  
    }
    saveCart();     
}
function clearCart() {
    cart = null ;
    sessionStorage.removeItem('shoppingCart');
}