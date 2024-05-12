let suggestionsProduct;
let rawSuggestionsProduct;
const updateSuggestionsProduct = async () => {
  rawSuggestionsProduct = JSON.parse(await getAllproduct());
  suggestionsProduct = rawSuggestionsProduct.map(
    (product) => product.maProduct + "-" + product.tenProduct
  );
};
const addExistingproduct = () => {
  let productName=$('#new-Product .productID option:selected').text();
  let colorName=$('#new-Product .colorID option:selected').text();
  let newproductID = document.querySelector("#new-Product .productID").value;
  let newColorID=document.querySelector("#new-Product .colorID").value;
  if (newproductID == "") {
    customNotice(
      " fa-sharp fa-light fa-circle-exclamation",
      "Please select product!",3
    );
    return;
  }
  if (newColorID == "") {
    customNotice(
      " fa-sharp fa-light fa-circle-exclamation",
      "Please select color!",3
    );
    return;
  }
  let rows = document.querySelectorAll(
    ".list-suply tr"
  );
  for (let i = 1; i < rows.length; i++) {
    let cells=rows[i].querySelectorAll('td')
    if (parseInt(cells[0].innerText) == parseInt(newproductID)&&parseInt(cells[1].innerText) == parseInt(newColorID)) {
      customNotice(
        " fa-sharp fa-light fa-circle-exclamation",
        "product already exists",3
      );
      return;
    }
  }
  $('.list-suply').append( `<tr> 
  <td>`+newproductID+`</td>    
  <td>`+newColorID+`</td>    
  <td>`+productName+`</td>    
  <td>`+colorName+`</td>   
  <td><input type="number" class="form-control ProductPrice" id="p_name" required></td>     
  <td><button type="button" class="btn btn-danger" style="height:40px" onclick="deleteRowproduct(`+newproductID+','+newColorID+`)" >Delete</button></td>
  </tr>`);
  $('#addNewSupply').modal('hide');
};

const deleteRowproduct = (product,color) => {
  let rows = document.querySelectorAll(
    ".list-suply tr"
  );
  for (let i = 1; i < rows.length; i++) {
    let cells=rows[i].querySelectorAll('td')
    if (parseInt(cells[0].innerText) == parseInt(product)&&parseInt(cells[1].innerText) == parseInt(color)) {
      customNotice(
        " fa-sharp fa-light fa-circle-exclamation",
        "product remove sucees",1
      );
      rows[i].remove();
      return;
    }
  }
};
const checkAddSupply = () => {
  let supplyID = document.querySelector("#new-supply .supplyID").value;
  let supplyImport = document.querySelector("#new-supply .supplyImport").value;
  let supplyTotalCost = document.querySelector("#new-supply .total-cost").value;
  let supplyDistributor = document.querySelector(
    "#new-supply .supplyDistributor"
  ).value;

  let productList = document.querySelectorAll(
    "#new-supply .list .placeholder .info"
  );
  if (productList.length == 0) {
    customNotice(
      " fa-sharp fa-light fa-circle-exclamation",
      "Please add at least 1 product!",3
    );
    return false;
  }
  for (let i = 0; i < productList.length; i++) {
    let productCost = productList[i].querySelector(
      ".item:nth-of-type(3) input"
    ).value;
    let productQuantity = productList[i].querySelector(
      ".item:nth-of-type(4) input"
    ).value;
    if (isNaN(productCost) || isNaN(productQuantity)) {
      customNotice(
        " fa-sharp fa-light fa-circle-exclamation",
        "Please enter valid number!",3
      );
      return false;
    }
    if (parseInt(productQuantity) <= 0 || parseInt(productCost) <= 0) {
      customNotice(
        " fa-sharp fa-light fa-circle-exclamation",
        "Please enter quantity and cost greater than 0!",3
      );
      return false;
    }
  }
  return true;
};
const addNewSupply = () => {
  if (!checkAddSupply()) return;
  let supplyID = document.querySelector("#new-supply .supplyID").value;
  let supplyImport = document.querySelector("#new-supply .supplyImport").value;
  let supplyTotalCost = document.querySelector("#new-supply .total-cost").value;
  let supplyDistributor = document.querySelector(
    "#new-supply .supplyDistributor"
  ).value;

  let productList = document.querySelectorAll(
    "#new-supply .list .placeholder .info"
  );

  let productListObj = [];
  for (let i = 0; i < productList.length; i++) {
    let productID = productList[i].querySelector(".item:nth-of-type(2)").innerHTML;
    let productCost = productList[i].querySelector(
      ".item:nth-of-type(3) input"
    ).value;
    let productQuantity = productList[i].querySelector(
      ".item:nth-of-type(4) input"
    ).value;
    productListObj.push({
      productID: productID,
      quantity: productQuantity,
      price: productCost,
    });
  }

  $.ajax({
    url: "util/supply.php",
    type: "POST",
    data: {
      supplyID: supplyID,
      supplyImport: supplyImport,
      supplyTotalCost: supplyTotalCost,
      supplyDistributor: supplyDistributor,
      productList: JSON.stringify(productListObj),
      action: "addNewSupply",
    },
    success: function (res) {
      if (res == "Success") {
        customNotice(
          " fa-circle-check",
          "Add new supply successful!",1
        );
        loadPageByAjax("Supply");
      } else {
        customNotice(
          " fa-sharp fa-light fa-circle-exclamation",
          "Add new supply failed!",3
        );
      }
    },
  });
};
