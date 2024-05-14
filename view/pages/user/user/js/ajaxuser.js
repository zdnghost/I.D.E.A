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
    if(!isLogin())
        {
            customNotice(
                " fa-sharp fa-light fa-circle-exclamation",
                " Need Login!",3
              );
              return;
        }
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
    if(!isLogin())
        {
            customNotice(
                " fa-sharp fa-light fa-circle-exclamation",
                " Need Login!",3
              );
              return;
        }
    $.ajax({
        url:"./view/pages/user/user/cart.php",
        method:"POST",
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowFav(){ 
    if(!isLogin())
        {
            customNotice(
                " fa-sharp fa-light fa-circle-exclamation",
                " Need Login!",3
              );
              return;
        } 
    $.ajax({
        url:"./view/pages/user/user/favourite.php",
        method:"POST",
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowAccount(){  
    if(!isLogin())
        {
            customNotice(
                " fa-sharp fa-light fa-circle-exclamation",
                " Need Login!",3
              );
              return;
        }
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
    if(!isLogin())
        {
            customNotice(
                " fa-sharp fa-light fa-circle-exclamation",
                " Need Login!",3
              );
              return;
        }
    $.ajax({
        url:"./view/pages/user/user/checkout.php",
        method:"POST",
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
