

function ShowSanPham(){  
    $.ajax({
        url:"./adminView/SanPham.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowLoai(){
    $.ajax({
        url:"./adminView/Loai.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowQuyen(){
    $.ajax({
        url:"./adminView/Quyen.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowMau(){
    $.ajax({
        url:"./adminView/Mau.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowTaiKhoan(){
    $.ajax({
        url:"./adminView/TaiKhoan.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowVaiTro(){
    $.ajax({
        url:"./adminView/VaiTro.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowVaiTro_Quyen(){
    $.ajax({
        url:"./adminView/VaiTro_Quyen.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editVaiTro_Quyen(){
    $.ajax({
        url:"./adminView/editVaiTro_Quyen.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editKhuyenMai(){
    $.ajax({
        url:"./adminView/editKhuyenMai.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowYeuThich(){
    $.ajax({
        url:"./adminView/YeuThich.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowPhong(){
    $.ajax({
        url:"./adminView/Phong.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowNguoiDung(){
    $.ajax({
        url:"./adminView/NguoiDung.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowLoaiNguoiDung(){
    $.ajax({
        url:"./adminView/LoaiNguoiDung.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editNguoiDung(id){
    $.ajax({
        url:"./adminView/editNguoiDung.php",
        method:"post",
        data:id,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editLoaiNguoiDung(id){
    $.ajax({
        url:"./adminView/editLoaiNguoiDung.php",
        method:"post",
        data:id,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editYeuThich(id){
    $.ajax({
        url:"./adminView/editYeuThich.php",
        method:"post",
        data:id,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editVaiTro(id){
    $.ajax({
        url:"./adminView/editVaiTro.php",
        method:"post",
        data:id,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editTaiKhoan(id){
    $.ajax({
        url:"./adminView/editTaiKhoan.php",
        method:"post",
        data:id,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editSlideShow(id){
    $.ajax({
        url:"./adminView/editSlideShow.php",
        method:"post",
        data:id,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editQuyen(id){
    $.ajax({
        url:"./adminView/editQuyen.php",
        method:"post",
        data:id,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowPhieuNhap(){
    $.ajax({
        url:"./adminView/PhieuNhap.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editPhieuNhap(id){
    $.ajax({
        url:"./adminView/editPhieuNhap.php",
        method:"post",
        data:id,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editGioHang(id){
    $.ajax({
        url:"./adminView/editGioHang.php",
        method:"post",
        data:id,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowGioHang(){
    $.ajax({
        url:"./adminView/GioHang.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowChiTietPhieuNhap(){
    $.ajax({
        url:"./adminView/ChiTietPhieuNhap.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowChiTietHoaDon(){
    $.ajax({
        url:"./adminView/ChiTietHoaDon.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowAlbum_BaiHat(){
    $.ajax({
        url:"./adminView/BaiHatAblum.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowChucNang(){  
    $.ajax({
        url:"./adminView/ChucNang.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowHoaDon(){  
    $.ajax({
        url:"./adminView/HoaDon.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showCategory(){  
    $.ajax({
        url:"./adminView/viewCategories.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showSizes(){  
    $.ajax({
        url:"./adminView/viewSizes.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showProductSizes(){  
    $.ajax({
        url:"./adminView/viewProductSizes.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showCustomers(){
    $.ajax({
        url:"./adminView/viewCustomers.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showOrders(){
    $.ajax({
        url:"./adminView/viewAllOrders.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function ChangeOrderStatus(id){
    $.ajax({
       url:"./controller/updateOrderStatus.php",
       method:"post",
       data:{record:id},
       success:function(data){
           alert('Order Status updated successfully');
           $('form').trigger('reset');
           showOrders();
       }
   });
}

function ChangePay(id){
    $.ajax({
       url:"./controller/updatePayStatus.php",
       method:"post",
       data:{record:id},
       success:function(data){
           alert('Payment Status updated successfully');
           $('form').trigger('reset');
           showOrders();
       }
   });
}


//add product data
function addItems(){
    var p_name=$('#p_name').val();
    var p_desc=$('#p_desc').val();
    var p_price=$('#p_price').val();
    var category=$('#category').val();
    var upload=$('#upload').val();
    var file=$('#file')[0].files[0];

    var fd = new FormData();
    fd.append('p_name', p_name);
    fd.append('p_desc', p_desc);
    fd.append('p_price', p_price);
    fd.append('category', category);
    fd.append('file', file);
    fd.append('upload', upload);
    $.ajax({
        url:"./controller/addItemController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Product Added successfully.');
            $('form').trigger('reset');
            showProductItems();
        }
    });
}

//edit product data
function itemEditForm(id){
    $.ajax({
        url:"./adminView/editItemForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editAlbum_BaiHat(id){
    $.ajax({
        url:"./adminView/editAlbum_BaiHat.php",
        method:"post",
        data:id,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editHoaDon(id){
    $.ajax({
        url:"./adminView/editHoaDon.php",
        method:"post",
        data:id,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editChiTietPhieuNhap(id){
    $.ajax({
        url:"./adminView/editChiTietPhieuNhap.php",
        method:"post",
        data:id,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editAlbum(id){
    $.ajax({
        url:"./adminView/editAlbum.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editChucNang(id){
    $.ajax({
        url:"./adminView/editChucNang.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editChiTietHoaDon(id){
    $.ajax({
        url:"./adminView/editChiTietHoaDon.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
//update product after submit
function updateItems(){
    var product_id = $('#product_id').val();
    var p_name = $('#p_name').val();
    var p_desc = $('#p_desc').val();
    var p_price = $('#p_price').val();
    var category = $('#category').val();
    var existingImage = $('#existingImage').val();
    var newImage = $('#newImage')[0].files[0];
    var fd = new FormData();
    fd.append('product_id', product_id);
    fd.append('p_name', p_name);
    fd.append('p_desc', p_desc);
    fd.append('p_price', p_price);
    fd.append('category', category);
    fd.append('existingImage', existingImage);
    fd.append('newImage', newImage);
   
    $.ajax({
      url:'./controller/updateItemController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Data Update Success.');
        $('form').trigger('reset');
        showProductItems();
      }
    });
}

//delete product data
function itemDelete(id){
    $.ajax({
        url:"./controller/deleteItemController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Items Successfully deleted');
            $('form').trigger('reset');
            showProductItems();
        }
    });
}


//delete cart data
function cartDelete(id){
    $.ajax({
        url:"./controller/deleteCartController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Cart Item Successfully deleted');
            $('form').trigger('reset');
            showMyCart();
        }
    });
}

function eachDetailsForm(id){
    $.ajax({
        url:"./view/viewEachDetails.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}



//delete category data
function categoryDelete(id){
    $.ajax({
        url:"./controller/catDeleteController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Category Successfully deleted');
            $('form').trigger('reset');
            showCategory();
        }
    });
}

//delete size data
function sizeDelete(id){
    $.ajax({
        url:"./controller/deleteSizeController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Size Successfully deleted');
            $('form').trigger('reset');
            showSizes();
        }
    });
}


//delete variation data
function variationDelete(id){
    $.ajax({
        url:"./controller/deleteVariationController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Successfully deleted');
            $('form').trigger('reset');
            showProductSizes();
        }
    });
}

//edit variation data
function variationEditForm(id){
    $.ajax({
        url:"./adminView/editVariationForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}


//update variation after submit
function updateVariations(){
    var v_id = $('#v_id').val();
    var product = $('#product').val();
    var size = $('#size').val();
    var qty = $('#qty').val();
    var fd = new FormData();
    fd.append('v_id', v_id);
    fd.append('product', product);
    fd.append('size', size);
    fd.append('qty', qty);
   
    $.ajax({
      url:'./controller/updateVariationController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Update Success.');
        $('form').trigger('reset');
        showProductSizes();
      }
    });
}
function search(id){
    $.ajax({
        url:"./controller/searchController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.eachCategoryProducts').html(data);
        }
    });
}


function quantityPlus(id){ 
    $.ajax({
        url:"./controller/addQuantityController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('form').trigger('reset');
            showMyCart();
        }
    });
}
function quantityMinus(id){
    $.ajax({
        url:"./controller/subQuantityController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('form').trigger('reset');
            showMyCart();
        }
    });
}

function checkout(){
    $.ajax({
        url:"./view/viewCheckout.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}


function removeFromWish(id){
    $.ajax({
        url:"./controller/removeFromWishlist.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Removed from wishlist');
        }
    });
}


function addToWish(id){
    $.ajax({
        url:"./controller/addToWishlist.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Added to wishlist');        
        }
    });
}