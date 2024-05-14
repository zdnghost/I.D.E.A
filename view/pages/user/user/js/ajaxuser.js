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
<<<<<<< HEAD
const ShowProfile=async ()=>{  
    if(!(await isLogin()))
=======
function ShowProfile(){  
    if(!isLogin())
>>>>>>> 4716853528ae55274d665e891bca3b4990ac43c4
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
<<<<<<< HEAD
const ShowCart=async ()=>{  

    if(!(await isLogin()))
=======
function ShowCart(){  
    if(!isLogin())
>>>>>>> 4716853528ae55274d665e891bca3b4990ac43c4
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
<<<<<<< HEAD
const ShowFav=async ()=>{ 
    if(!(await isLogin()))
=======
function ShowFav(){ 
    if(!isLogin())
>>>>>>> 4716853528ae55274d665e891bca3b4990ac43c4
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
<<<<<<< HEAD
const ShowAccount=async ()=>{  
    if(!(await isLogin()))
=======
function ShowAccount(){  
    if(!isLogin())
>>>>>>> 4716853528ae55274d665e891bca3b4990ac43c4
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
<<<<<<< HEAD
const ShowCheckOut= async ()=>{
    if(!(await isLogin()))
=======
function ShowCheckOut(){
    if(!isLogin())
>>>>>>> 4716853528ae55274d665e891bca3b4990ac43c4
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
