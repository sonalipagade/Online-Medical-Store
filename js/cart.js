$(document).ready(function () {
    // Retrieve items from localStorage
    bindCardData();
    getTotalCartValue();
 });

 function bindCardData() {
    var items = localStorage.getItem('cartData');
    $('#tblCartList').html('');
    // Check if items exist
    if (items) {
        // Convert the JSON string to an array
        items = JSON.parse(items);
        // Display items in UI
        if (items.length > 0) {
        items.forEach(function (item) {
            // $('#itemList').append('<li>' + item + '</li>');
            var total = item.price * item.quantity;
            $('#tblCartList').append('<tr><td class="product-thumbnail"><img src="images/' + item.image + '" alt="Image" class="img-fluid"></td>'+
                '<td class="product-name"><h2 class="h5 text-black">' + item.product + '</h2></td><td>' + item.price + '</td>'+
                '<td>' + item.quantity + '</td>'+
                '<td>' + total + '</td>'+
                '<td><a href="javascript:" onclick="removeFromCart(' + item.indexNumber + ')" class="btn btn-primary height-auto btn-sm">X</a></td></tr>');
        });  
    }
        else {
            $('#tblCartList').append('<tr><td colspan="6"><h3>No Product into the cart</h3></td></tr>');
        } 
    }
    
}



 function getTotalCartValue(){
    $('#totalValue').html('');
    $('#subTotal').html('');
    var items = localStorage.getItem('cartData');
    if (items) {
        items = JSON.parse(items);
        var totalValue = 0;
        items.forEach(function (item) {
            var total = item.price * item.quantity;
            totalValue += total;
        });
        $('#totalValue').append('<b>' + totalValue + '</b>');
        $('#subTotal').append('<b>' + totalValue + '</b>');
    }

}


 function removeFromCart(item){
    console.log(item);
    var items = localStorage.getItem('cartData');
    if (items) {
        items = JSON.parse(items);
        let indexToRemove = items.findIndex(data => Number(data.indexNumber) === Number(item));
        if (indexToRemove !== -1) {
            items.splice(indexToRemove, 1);
        }
        localStorage.setItem("cartData", JSON.stringify(items));
        bindCardData();
        getTotalCartValue();
    }

}
