let cart = [];
if(sessionStorage.getItem('shoppingCart') != null ) cart.push(sessionStorage.getItem('shoppingCart'));
let output = document.getElementById("output");
// Save cart 
function saveCart() {
    sessionStorage.setItem('shoppingCart' , cart);    
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
    if (cart.length == null) {
        var item = new Item(id, name, price, image, 1);
        cart.push(item);
    }
    for (var item in cart) {
        console.log(cart[item].id);
        if (cart[item].id = id ){
            cart[item].count++;
        } else{
            var item = new Item(id, name, price, image, 1);
            cart.push(item);
            break;
        }        
    }
    saveCart();
    console.log(cart);
    console.log(sessionStorage.getItem('shoppingCart'));
}