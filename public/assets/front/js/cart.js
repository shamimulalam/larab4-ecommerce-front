$(function () {
    cartDetails();
    $('.addToCart').click(function () {
        let productId = $(this).attr('cus-product-id');
        let productName = $(this).attr('cus-product-name');
        let productPrice = $(this).attr('cus-product-price');
        let productImage = $(this).attr('cus-product-image');

        let product = {
            'productId':productId,
            'productName':productName,
            'productPrice':productPrice,
            'productQuantity':1,
            'productImage':productImage,
        };

        let cart = [];
        if(localStorage.getItem('cart') === null)
        {

        }else{
            cart = JSON.parse(localStorage.getItem('cart'));
        }
        cart.push(product);
        localStorage.setItem("cart",JSON.stringify(cart));
        cartDetails();
    });
});
function cartDetails() {
    if(localStorage.getItem('cart') === null)
    {

    }else {

        let cartData = JSON.parse(localStorage.getItem('cart'));
        $('.number-shopping-cart').html(cartData.length);

        let totalPrice = 0;

        let cartHtml = '';

        cartData.forEach(function (data) {
            cartHtml += '<tr>\n' +
                '                                    <td class="text-center" style="width:70px">\n' +
                '                                        <a href="#">\n' +
                '                                            <img src="' + data.productImage + '" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview">\n' +
                '                                        </a>\n' +
                '                                    </td>\n' +
                '                                    <td class="text-left"> <a class="cart_product_name" href="product.html">' + data.productName + '</a> </td>\n' +
                '                                    <td class="text-center"> x' + data.productQuantity + ' </td>\n' +
                '                                    <td class="text-center"> $' + data.productQuantity * data.productPrice + ' </td>\n' +
                '                                    <td class="text-right">\n' +
                '                                        <a href="product.html" class="fa fa-edit"></a>\n' +
                '                                    </td>\n' +
                '                                    <td class="text-right">\n' +
                '                                        <a onclick="cart.remove(\'2\');" class="fa fa-times fa-delete"></a>\n' +
                '                                    </td>\n' +
                '                                </tr>';
            totalPrice += (data.productPrice * data.productQuantity);
        });

        $('.cart-table').html(cartHtml);
        $('.cart-total').html('$'+totalPrice);
    }
}