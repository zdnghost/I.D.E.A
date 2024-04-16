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
    colorID,
    productName,
    loaiID,
    phongID,
    productPrice,
    productImage,
    productDescribe,
    active
  ) => {
    $.ajax({
      url:
        "util/products.php?productID=" +
        productID +
        "phongID="+
        phongID+
        "active="+
        active+
        "&productName=" +
        productName +
        "&idLoai=" +
        loaiID +
        "&colorID=" +
        colorID +
        "&productPrice=" +
        productPrice +
        "&productImage=" +
        productImage +
        "&productDescribe=" +
        productDescribe.replace(/['"]/g, "\\$&") +
        "&action=updateproductInfo",
      type: "PUT",
      success: function (res) {
        console.log(res);
      },
    });
  };
const deleteColorID = async(productID,colorID) => {
    let choice = confirm("Are you sure to delete this album?");
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
            "fa-sharp fa-light fa-circle-check",
            "Deleted successfully",
            1
          );
          loadPageByAjax("Album");
        } else
          customNotice(
            "fa-sharp fa-light fa-circle-exclamation",
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
            "fa-sharp fa-light fa-circle-check",
            "Deleted successfully",
            1
          );
          loadPageByAjax("Album");
        } else
          customNotice(
            "fa-sharp fa-light fa-circle-exclamation",
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
          "fa-sharp fa-light fa-circle-exclamation",
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
              "fa-sharp fa-light fa-circle-check",
              "Uploaded successfully",
              1
            );
          } else
            customNotice(
              "fa-sharp fa-light fa-circle-exclamation",
              "Upload failed",
              3
            );
        },
      });
    };
  };
  const deleteImg = () => {
    customNotice(
      "fa-sharp fa-light fa-circle-check",
      "Deleted successfully, change to default image!",
      1
    );
    document.querySelector(".img-container img").src =
      "data/" + "default.jfif";
  };
  