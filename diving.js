const  displayProducts = async () => {
    var apiResponse = await fetch(`http://localhost/FunClo_Alexandrescu_Nicolae_Vacaru_Robert_2A4/methods/getDivingProducts.php`);
    var items = await apiResponse.json(); // This is also a promise so must also wait for it

    let productRow = document.querySelector("div.row:not(.row-2)");
    if (items && productRow) {
        productRow.innerHTML = ``;
       
        for (let i = 0; i <= items.length; ++i) {
            productRow.innerHTML += `
            <div class="col4">
                <a href="product-details-${items[i].id}.php">
                    <img src="images/product${items[i].id}.jpg"></a>
                <h4>${items[i].small_desc}</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>$${items[i].price}</p>
            </div>
            `;
        }

    }
}

displayProducts();