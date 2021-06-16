let carts = document.querySelectorAll('.btn');

let products = [
    {
        name: 'GRey',
        tag: 'grtsh',
        price: 15.50,
        inCart: 0
    },

    {
        name: 'TSLA',
        tag: 'TSLA',
        price: 15.99,
        inCart: 0
    }
];


for (let i = 0; i < carts.length; ++i) {
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i]);
    })
}

function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');

    if (productNumbers) {
        document.querySelector('.navbar span').textContent = productNumbers;
    }
}

function cartNumbers(product) {

    let productNumbers = localStorage.getItem('cartNumbers');

    productNumbers = parseInt(productNumbers);

    if (productNumbers) {
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.navbar span').textContent = productNumbers + 1;
    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.navbar span').textContent = 1;
    }

    setItems(product);
}

function setItems(product) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if (cartItems != null) {

        if (cartItems[product.tag] == undefined) {
            cartItems = {
                ...cartItems,
                [product.tag]: product
            }
        }
        cartItems[product.tag].inCart += 1;
    } else {
        product.inCart = 1;

        cartItems = {
            [product.tag]: product
        }
    }

    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalCost(product) {

    let cartCost = localStorage.getItem('totalCost');

    if (cartCost != null) {
        cartCost = parseFloat(cartCost);
        localStorage.setItem("totalCost", cartCost + product.price);
    } else {
        localStorage.setItem("totalCost", product.price);
    }

}

function displayCart() {
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);

    let productContainer = document.querySelector(".x");
    let totalContainer = document.querySelector(".total-price");
    let cartCost = localStorage.getItem('totalCost');

    if (cartItems && productContainer) {
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
            <tr class="x">
                <td>
                    <div class="cart-info">
                        <a href="${item.name}.html">
                            <img src="images/${item.tag}.jpg">
                        </a>
                        <div>
                            <p>${item.name}</p>
                            <small>Price: ${item.price}</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="${item.inCart}"></td>
                <td>$${item.price * item.inCart}</td>
            </tr>
            `;
        });

        var transp=35.0;

        totalContainer.innerHTML += `
        <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>$${cartCost}</td>
            </tr>
            <tr>
                <td>Transport</td>
                <td>$35</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>$${parseInt(cartCost) + transp}</td>
            </tr>
        </table>
    </div>
        `
    }
}

onLoadCartNumbers();
displayCart();