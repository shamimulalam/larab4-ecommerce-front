$(function () {
    // localStorage.clear();
    cartDetails();
    checkoutcartDetails();
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

        let index=checkCart(product);
        if(index == -1){
            addToCart(cart,product);
        }else{
            updateCart(product,index);
        }

        cartDetails();
    });

    $(document).on('click','.removeItem',function () {
        let productId = $(this).attr('cus-product-id');
        let cartNo = $(this).attr('cart_item_no');
        console.log(productId);
        console.log(cartNo);
        let cart = JSON.parse(localStorage.getItem('cart'));
        if(productId == cart[cartNo].productId){
            cart.splice(cartNo, 1);
        }
        localStorage.setItem("cart",JSON.stringify(cart));
        cartDetails();
    });
    $('.checkoutBtn').click(function () {
        if(checkCartItems())
        {
            let cartData = JSON.parse(localStorage.getItem('cart'));
            let client = {
                name : $('#input-name').val(),
                email : $('#input-email').val(),
                phone : $('#input-phone').val(),
                address : $('#input-address').val(),
            };
            if(client.name != '' && client.email != '' && client.phone != '' && client.address != '') {
                let url = $(this).attr('cus-url');
                $.ajax({
                    url: url,
                    data:{data:
                            {
                                client:client,
                                cart:cartData,
                            }
                        },
                    type:'get',
                    success: function (response) {
                        let res = JSON.parse(response);
                        if(res.order_id)
                        {
                            localStorage.clear();
                            cartDetails();
                            checkoutcartDetails();
                            refreshClientForm();
                            let redirectUrl = $('url').attr('val');
                            window.location.replace(redirectUrl+'/'+res.order_id);
                        }else{
                            alert('Something went wrong, please try again');
                        }
                    },
                    failed: function () {
                            alert('Something went wrong, please try again');

                    }
                });
            }else{
                alert('All fields are required');
            }
        }

    });
    function refreshClientForm() {
        $('#input-name').val('');
        $('#input-email').val('');
        $('#input-phone').val('');
        $('#input-address').val('');
    }
    function updateCart(product,index) {
        let cart = JSON.parse(localStorage.getItem('cart'));
        cart[index].productQuantity +=1;
        localStorage.setItem("cart",JSON.stringify(cart));
    }

    function addToCart(cart,product){
        cart.push(product);
        localStorage.setItem("cart",JSON.stringify(cart));
    }

    function checkCart(product){
        let res =-1;
        if(localStorage.getItem('cart') === null)
        {
            return -1;
        }else {
            let cartData = JSON.parse(localStorage.getItem('cart'));
            // cartData.forEach(function (data, index) {
            //     if(data.productId == product.productId){
            //         res = index;
            //        return res;
            //     }
            // });
            let i;
            for (i=0; i<cartData.length;i++){
                if(cartData[i].productId == product.productId){
                    res = i;
                    break;
                }
            }
        }
        return res;
    }

    function cartDetails() {

        let cartHtml = '';
        let totalPrice = 0;
        if(localStorage.getItem('cart') === null)
        {

            $('.number-shopping-cart').html(0);
        }else {

            let cartData = JSON.parse(localStorage.getItem('cart'));
            $('.number-shopping-cart').html(cartData.length);



            cartData.forEach(function (data, index) {
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
                    '                                        <a  class="fa fa-times fa-delete removeItem" cus-product-id="'+data.productId+'" cart_item_no="'+index+'"></a>\n' +
                    '                                    </td>\n' +
                    '                                </tr>';
                totalPrice += (data.productPrice * data.productQuantity);
            });

        }
        $('.cart-table').html(cartHtml);
        $('.cart-total').html('$'+totalPrice);
    }
    function checkoutcartDetails() {

        let totalPrice = 0;

        let cartHtml = '';
        if(localStorage.getItem('cart') === null)
        {

        }else {

            let cartData = JSON.parse(localStorage.getItem('cart'));
            $('.number-shopping-cart').html(cartData.length);


            cartData.forEach(function (data, index) {
                cartHtml += '<tr>\n' +
                    '\t\t\t\t\t\t\t\t\t<td class="text-center"><a href="#"><img width="70px" src="'+data.productImage+'" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" class="img-thumbnail" /></a></td>\n' +
                    '\t\t\t\t\t\t\t\t\t<td class="text-left"><a href="#">'+data.productName+'</a><br />\n' +
                    '\t\t\t\t\t\t\t\t\t</td>\n' +
                    '\t\t\t\t\t\t\t\t\t<td class="text-left" width="200px"><div class="input-group btn-block quantity">\n' +
                    '\t\t\t\t\t\t\t\t\t\t<input type="text" name="quantity" value="'+data.productQuantity+'" size="1" class="form-control" />\n' +
                    '\t\t\t\t\t\t\t\t\t\t<span class="input-group-btn">\n' +
                    '\t\t\t\t\t\t\t\t\t\t\t<button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary"><i class="fa fa-clone"></i></button>\n' +
                    '\t\t\t\t\t\t\t\t\t\t\t<button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button>\n' +
                    '\t\t\t\t\t\t\t\t\t\t</span></div></td>\n' +
                    '\t\t\t\t\t\t\t\t\t\t<td class="text-right">'+data.productPrice+'</td>\n' +
                    '\t\t\t\t\t\t\t\t\t\t<td class="text-right">'+data.productPrice * data.productQuantity+'</td>\n' +
                    '\t\t\t\t\t\t\t\t\t</tr>';
                totalPrice += (data.productPrice * data.productQuantity);
            });

        }
        $('.cartView').html(cartHtml);
        $('.cart-total').html('$'+totalPrice);
    }


    function checkCartItems()
    {
        if(localStorage.getItem('cart') === null)
        {
            return false;
        }else {
            return true;

        }
    }
});
