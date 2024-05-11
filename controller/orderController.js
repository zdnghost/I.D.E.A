const order = async () => {
    if (!checkMyCart()) return;
    await createOrder();
    await deleteFromOrder();
    document.querySelector("#orderSuccess").style.display = "flex";
  };
  
  const getTotal = () => {
    let totalInput = document.querySelector(".total-final");
    let total = parseFloat(totalInput.innerHTML.substring(1));
    return total;
  };
  
  const createOrder = async () => {
    let products = getproducts();
    console.log(products);
    let total = getTotal();
    let address = document.querySelector("#mycart #checkout-address").value;
    await $.ajax({
      url: "util/order.php",
      type: "POST",
      data: {
        address: address,
        total: total,
        products: products,
        action: "createOrder",
      },
      success: function (res) {
        if (res != "Success") alert(res);
      },
    });
  };
  const getProduct = () => {
    let listProduct = [];
    let products = document.querySelectorAll(
      "#mycart .check-button input[type='checkbox']:checked"
    );
    for (let product of products) {
      let quantity = product
        .closest(".product-placeholder")
        .querySelector("input.quantity-info").value;
      let productID = product.value;
      listProduct.push({ quantity: quantity, productID: productID });
    }
    console.log(listProduct);
    return JSON.stringify(listProduct);
  };
  const checkMyCart = () => {
    let products = document.querySelectorAll(
      "#mycart .check-button input[type='checkbox']:checked"
    );
    let address = document.querySelector("#mycart #checkout-address");
    if (products.length == 0) {
      customNotice(
        " fa-sharp fa-light fa-circle-exclamation",
        "Please, select the product!",
        3
      );
      return false;
    }
    if (address.value == "") {
      customNotice(
        " fa-sharp fa-light fa-circle-exclamation",
        "Please, enter your address!",
        3
      );
      address.focus();
      return false;
    }
    return true;
  };
  
  const deleteFromOrder = async () => {
    let products = document.querySelectorAll(
      "#mycart .check-button input[type='checkbox']:checked"
    );
    for (let product of products) {
      await deleteByproductID(parseInt(product.value));
      product.closest(".product-placeholder").remove();
    }
  };
  const cancelOrder = (orderID) => {
    $.ajax({
      url: "util/order.php?orderID=" + orderID + "&action=cancelOrder",
      type: "PUT",
      success: function (res) {
        if (res != "Success") alert(res);
        else {
          customNotice("fa-solid fa-cart-circle-plus", "Cancel your Order", 1);
          loadPageByAjax("myAccount");
        }
      },
    });
  };
  
  const getOrderInfo = (orderID) => {
    return $.ajax({
      url: "util/order.php?orderID=" + orderID + "&action=getOrderInfo",
      type: "GET",
    });
  };
  
  const getproductsInOrder = (orderID) => {
    return $.ajax({
      url: "util/order.php?orderID=" + orderID + "&action=getproductsInOrder",
      type: "GET",
    });
  };
  