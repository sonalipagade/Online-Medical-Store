$(document).ready(function () {
    // Retrieve items from localStorage
    bindCardData();
    getTotalCartValue();
 });

 function bindCardData() {
    var items = localStorage.getItem('cartData');
    $('#tblCheckOutList').html('');
    // Check if items exist
    if (items) {
        // Convert the JSON string to an array
        items = JSON.parse(items);
        // Display items in UI
        if (items.length > 0) {
            items.forEach(function (item) {
                var total = item.price * item.quantity;
                $('#tblCheckOutList').append('<tr><td>' + item.product + ' </td>'+
                    '<td style="text-align: center">' + item.quantity + ' </td>'+
                    '<td style="text-align: center">' + total + '</td>'+
                    '</tr>');
            });  
    }
        else {
            $('#tblCheckOutList').append('<tr><td colspan="6"><h3>No Product into the cart</h3></td></tr>');
        } 
    }
    
}



 function getTotalCartValue(){
    var items = localStorage.getItem('cartData');
    if (items) {
        items = JSON.parse(items);
        var totalValue = 0;
        items.forEach(function (item) {
            var total = item.price * item.quantity;
            totalValue += total;
        });
        // $('#totalValue').append(totalValue);
        document.getElementById("totalAmountInput").value = totalValue;
     
    }

}

