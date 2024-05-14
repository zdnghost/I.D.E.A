function ShowHome(){  
    $.ajax({
        url:"./view/pages/user/user/home.php",
        method:"POST",
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowThongTin(id){  
    $.ajax({
        url:"./view/pages/user/user/product-detail.php?id="+id,
        method:"POST",
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}