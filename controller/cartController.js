const addToCart = (productID,colorID) => {
    $.ajax({
      url: "util/cart.php",
      type: "POST",
      data: { productID: productID, colorID:colorID, action: "addToCart" },
      success: function (res) {
        if (res == "Added to your Cart") {
          customNotice("fa-solid fa-cart-circle-plus", res, 1);
        } else {
          customNotice(" fa-sharp fa-light fa-circle-exclamation", res, 3);
        }
      },
    });
  };
  
  const deleteFromCart = async (productID,colorID, input) => {
    await deleteByproductID(productID,colorID);
    input.closest(".product-placeholder").remove();
  };
  const deleteByproductID = (productID,colorID) => {
    $.ajax({
      url: "util/cart.php?productID=" + productID+"?colorID="+colorID,
      type: "DELETE",
      success: function (res) {
        if (res == "Success") {
          summary();
          customNotice("fa-solid fa-cart-circle-xmark", "Removed from your Cart", 1);
        } else {
          alert(res);
        }
      },
    });
  };
  const checkChangeQuantity = (change, input) => {
    let currentQuantityInput = input
      .closest("#form1")
      .querySelector(".quantity");
    if (currentQuantityInput.value == '') {
      customNotice(
        " fa-sharp fa-light fa-circle-exclamation",
        "Quantity must not be empty!", 3
      );
      return null
    }
    if (!/^\d+$/.test(currentQuantityInput.value)) {
      customNotice(
        " fa-sharp fa-light fa-circle-exclamation",
        "quantity must be a number!", 3
      );
      return null;
    }
    let currentQuantity = parseInt(currentQuantityInput.value);
    if (currentQuantity == 99 && change == 1) {
      customNotice(" fa-sharp fa-light fa-circle-exclamation", "Max is 99", 3);
      return null;
    }
    if (currentQuantity == 1 && change == -1) {
      customNotice(" fa-sharp fa-light fa-circle-exclamation", "Min is 1", 3);
      return null;
    }
    if (currentQuantity > 99) {
      customNotice(" fa-sharp fa-light fa-circle-exclamation", "Max is 99", 3);
      currentQuantityInput.value = 99;
      currentQuantity = 99;
    }
    if (currentQuantity < 1) {
      customNotice(" fa-sharp fa-light fa-circle-exclamation", "Min is 1", 3);
      currentQuantityInput.value = 1;
      currentQuantity = 1;
    }
    let quantity = currentQuantity + change;
    currentQuantityInput.value = quantity;
    return quantity;
  };
  
  const updateTotalPrice = (input, quantity) => {
    let eachPriceInput = input
      .closest(".product-placeholder")
      .querySelector(".each")
      .innerHTML.substring(1);
    let eachPrice = parseFloat(eachPriceInput);
    let priceTotalInput = input
      .closest(".product-placeholder")
      .querySelector(".total");
    total = (Math.round(quantity * eachPrice * 100) / 100).toFixed(2);
    priceTotalInput.innerHTML = "$" + total;
  };
  
  const changeQuantity = (productID,colorID, change, input) => {
    let quantity = checkChangeQuantity(change, input);
    if (quantity == null) return;
    updateTotalPrice(input, quantity);
    $.ajax({
      url: "util/cart.php?quantity=" + quantity + "&" + "productID=" + productID+"&"+"colorID="+colorID,
      type: "PUT",
      success: function (res) {
        if (res != "Success") alert(res);
      },
    });
  };
  const summary = () => {
    let products = document.querySelectorAll(
      "#mycart .check-button input[type='checkbox']:checked"
    );
    let subTotal = getSubTotalSelected(products);
    subTotalFormat = "$" + (Math.round(subTotal * 100) / 100).toFixed(2);
    shipPrice = products.length * 15;
    shipPriceFormat = "$" + (Math.round(shipPrice * 100) / 100).toFixed(2);
    total = subTotal + shipPrice;
    totalFormat = "$" + (Math.round(total * 100) / 100).toFixed(2);
    let subtotalInput = document.querySelector(".subtotal");
    let shippingInput = document.querySelector(".shipping");
    let totalInput = document.querySelector(".total-final");
    subtotalInput.innerHTML = subTotalFormat;
    shippingInput.innerHTML = shipPriceFormat;
    totalInput.innerHTML = totalFormat;
  };
  
  const getSubTotalSelected = (products) => {
    let subTotal = 0;
    for (let product of products) {
      let quantity = parseInt(
        product.closest(".product-placeholder").querySelector("input.quantity-info")
          .value
      );
  
      let price = parseFloat(
        product
          .closest(".product-placeholder")
          .querySelector(".each")
          .innerHTML.substring(1)
      );
      subTotal += quantity * price;
    }
    return subTotal;
  };
  