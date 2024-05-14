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
function ShowProfile(){  
    $.ajax({
        url:"./view/pages/user/user/edit-profile.php",
        method:"POST",
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowLogin(){  
    $.ajax({
        url:"./view/pages/user/user/login.php",
        method:"POST",
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowRegister(){  
    $.ajax({
        url:"./view/pages/user/user/register.php",
        method:"POST",
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowCart(){  
    $.ajax({
        url:"./view/pages/user/user/cart.php",
        method:"POST",
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowFav(){  
    $.ajax({
        url:"./view/pages/user/user/favourite.php",
        method:"POST",
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowAccount(){  
    $.ajax({
        url:"./view/pages/user/user/editprofile.php",
        method:"POST",
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowShopping(){  
    $.ajax({
        url:"./view/pages/user/user/shopping.php",
        method:"POST",
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowCheckOut(){
    $.ajax({
        url:"./view/pages/user/user/checkout.php",
        method:"POST",
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
