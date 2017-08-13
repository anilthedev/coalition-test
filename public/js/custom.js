$(document).ready(function(){
    getAllProducts();
    $("#addProductForm").on('submit',function(){
        addProduct();
        return false;
    });
});


function addProduct(){
    var formData = $("#addProductForm").serialize();
    $.ajax({
        type: "POST",
        url: baseUrl+'/product/add-product',
        data: formData,
        success: function (data) {
            var data = jQuery.parseJSON(data);
            alert(data.message);
            if(data.status == 1){
                getAllProducts();
            }
            return false;
        }
    });
}

function getAllProducts(){
    $.ajax({
        type: "GET",
        url: baseUrl+'/product/get-all-products',
        success: function (data) {
            $('.productsList').html(data);
            return false;
        }
    });
}

