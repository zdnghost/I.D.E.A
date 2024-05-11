const getProductInfo = (productID) => {
    return $.ajax({
      url: "util/product.php?action=getProductInfo&productID="+productID,
      type: "GET",
    });
  };
const getAllProduct = () => {
    return $.ajax({
      url: "util/product.php?action=getAllproduct",
      type: "GET",
    });
  };
const getNewIDProduct = () => {
    return $.ajax({
      url: "util/product.php?action=getNewIDProduct",
      type: "GET",
    });
  };
  const updateproductInfo = (
    productID,
    productName,
    loaiID,
    phongID,
    productPrice,
    productDescribe,
  ) => {
    
    $.ajax({
      url:
        "util/product.php?productID=" +
        productID +
        "&phongID="+
        phongID+
        "&productName=" +
        productName +
        "&loaiID=" +
        loaiID +
        "&productPrice=" +
        productPrice +
        "&productDescribe=" +
        productDescribe.replace(/['"]/g, "\\$&") +
        "&action=updateProductInfo",
      type: "PUT",
      success: function (res) {
        console.log(res);
      },
    });
  };
  const updateProduct = async (prID) => {
    if (!checkUpdateProduct()) return;
    let productName = document.querySelector("#edit-product .productName").value;
    let loaiID = document.querySelector("#edit-product .loaiID").value;
    let phongID = document.querySelector("#edit-product .phongID").value;
    let productPrice = document.querySelector("#edit-product .productPrice").value;
    let productDescription = document.querySelector("#edit-product .productDescribe").value;
    updateproductInfo(
      prID,
      productName,
      loaiID,    
      phongID,
      productPrice,
      productDescription,
    );
    customNotice("fa-sharp fa-light fa-circle-check", "Update successfully!", 1);
    ShowSanPham();
  };
  const checkUpdateProduct = async () => {
    let productName = document.querySelector("#edit-product .productName").value;
    let productPrice = document.querySelector("#edit-product .productPrice").value;
    if(productName==""){
      customNotice(
        " fa-sharp fa-light fa-circle-exclamation",
        "Please, enter product name!",
        3
      );
      productName.focus();
      return false;
    }
    if(productPrice==""||productPrice<=0){
      customNotice(
        " fa-sharp fa-light fa-circle-exclamation",
        "Please, enter product pride!",
        3
      );
      productPrice.focus();
      return false;
    }
    return true;
  }
const deleteColorID = async(productID,colorID) => {
    let choice = confirm("Are you sure to delete this product?");
    if (!choice) return;
    $.ajax({
      url: "util/product.php?productID=" + 
      productID +
      "&colorID=" +
      colorID +
       "&action=deleteColor",
      type: "DELETE",
      success: function (res) {
        if (res == "Success") {
          customNotice(
            " fa-circle-check",
            "Deleted successfully",
            1
          );
          loadPageByAjax("product");
        } else
          customNotice(
            " fa-sharp fa-light fa-circle-exclamation",
            "Deleted failed",
            3
          );
      },
    });
  };
const deleteProduct = (productID) => {
    let choice = confirm("Are you sure to delete this product?");
    if (!choice) return;
    $.ajax({
      url: "util/product.php?productID=" + productID + "&action=deleteProductByID",
      type: "DELETE",
      success: function (res) {
        if (res == "Success") {
          customNotice(
            " fa-circle-check",
            "Deleted successfully",
            1
          );
          loadPageByAjax("product");
        } else
          customNotice(
            " fa-sharp fa-light fa-circle-exclamation",
            "Deleted failed",
            3
          );
      },
    });
  };
  const uploadImg = () => {
    let fileInput = document.createElement("input");
    fileInput.type = "file";
    fileInput.click();
    fileInput.onchange = () => {
      let file_data = fileInput.files[0];
      let form_data = new FormData();
      form_data.append("file", file_data);
      form_data.append("target_directory", "../data/");
      if (!file_data.type.startsWith("image/")) {
        customNotice(
          " fa-sharp fa-light fa-circle-exclamation",
          "Please upload an image!",
          3
        );
        return;
      }
      //Ajax to send file to upload
      $.ajax({
        url: "util/upload.php",
        type: "POST",
        data: form_data,
        dataType: "script",
        cache: false,
        contentType: false,
        processData: false,
        success: function (res) {
          if (res) {
            document.querySelector(".img-container img").src =
              "data/" + fileInput.files[0].name;
            customNotice(
              " fa-circle-check",
              "Uploaded successfully",
              1
            );
          } else
            customNotice(
              " fa-sharp fa-light fa-circle-exclamation",
              "Upload failed",
              3
            );
        },
      });
    };
  };
  const deleteImg = () => {
    customNotice(
      " fa-circle-check",
      "Deleted successfully, change to default image!",
      1
    );
    document.querySelector(".img-container img").src =
      "data/" + "default.jfif";
  };
  