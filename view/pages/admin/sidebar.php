<!-- Sidebar -->
<?php
session_start();
 $_SESSION['permission']=[1,2,3,4,5,6,7,8,9,10,11,12,13];
 $fristpage=false;
?>
<div class="sidebar" id="mySidebar" >
<script type="text/javascript" src="./view/pages/admin/assets/js/ajaxWork.js"></script>    
<div class="side-header">
    <h5 style="margin-top:10px;">Administration</h5>
</div>
<hr style="border:1px solid; background-color:#8a7b6d; border-color:#333b31;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    
    <?php if (checkAccess(1)){ ?>
      <a href="javascript:void(0)" class="menubtn" onclick="ShowThongKe()"><i class="fa fa-th"></i> Dashboard</a>
      <?php if(!$fristpage){
        $fristpage=true;
        ?><script type="text/JavaScript">  
        ShowThongKe();
        </script>
        <?php
      }} ?>
    
    <?php if (checkAccess(2)){ ?>
      <a href="javascript:void(0)" class="menubtn"  onclick="ShowSanPham()" ><i class="fa fa-th"></i> Sản Phẩm</a>
      <?php if(!$fristpage){
        $fristpage=true;
        ?><script type="text/JavaScript">  
        ShowSanPham();
        </script>
        <?php
      }} ?>
    
    <?php if (checkAccess(6)){ ?>
      <a href="javascript:void(0)" class="menubtn"  onclick="ShowHoaDon()" ><i class="fa fa-th"></i> Hóa Đơn</a>
      <?php if(!$fristpage){
        $fristpage=true;
        ?><script type="text/JavaScript">  
        ShowHoaDon();
        </script>
        <?php
      }} ?>
    <?php if (checkAccess(8)){ ?>
      <a href="javascript:void(0)" class="menubtn"  onclick="ShowPhieuNhap()" ><i class="fa fa-th"></i> Phiếu Nhập</a>
      <?php if(!$fristpage){
        $fristpage=true;
        ?><script type="text/JavaScript">  
        ShowPhieuNhap();
        </script>
        <?php
      }} ?>

    <?php if (checkAccess(10)){ ?>
      <a href="javascript:void(0)" class="menubtn"  onclick="ShowTaiKhoan()" ><i class="fa fa-th"></i> Tài Khoản</a>
      <?php if(!$fristpage){
        $fristpage=true;
        ?><script type="text/JavaScript">  
        ShowTaiKhoan();
        </script>
        <?php
      }} ?>
    <?php if (checkAccess(13)){ ?> 
      <a href="javascript:void(0)" class="menubtn"  onclick="ShowQuyen()" ><i class="fa fa-th"></i> Quyền</a>
      <?php if(!$fristpage){
        $fristpage=true;
        ?><script type="text/JavaScript">  
        ShowQuyen();
        </script>
        <?php
      }} ?>
  <!---->
</hr>
</div>      
<?php
function checkAccess($permission)
{   
    $result=false;
    if (in_array($permission, $_SESSION['permission']))
    $result=true;
    return $result;
}
?>




