
document.getElementById("order-submit").addEventListener("click", function () {
    
    var name = document.getElementById("name").value;
    var address = document.getElementById("address").value;
    var phone = document.getElementById("phone").value;
    localStorage.setItem("name",document.getElementById("name").value);
    var productsInCart = localStorage.getItem('productsInCart'); 
    var totalCosts = localStorage.getItem('totalCost');
    $.ajax({
        url: "addOrder.php",
        type: "POST",
        data: {
            name: name,
            phone: phone,
            address: address,
            productsInCart:productsInCart,
            totalCosts:totalCosts,
        },
        cache: false,
        success: function (dataResult) {
            var dataResult = JSON.parse(dataResult);
            if (dataResult.statusCode == 200) {
                console.log("am ajuns");
            }
            else if (dataResult.statusCode == 201) {
                alert("Error occured !");
            }

        }
    });
    localStorage.clear();
});
