let suggestionsProduct;
let rawSuggestionsProduct;
const updateSuggestionsProduct = async () => {
  rawSuggestionsProduct = JSON.parse(await getAllproduct());
  suggestionsProduct = rawSuggestionsProduct.map(
    (product) => product.maProduct + "-" + product.tenProduct
  );
};
const suggestproduct = () => {
  const currentValue = event.target.value.toLowerCase();
  if (!currentValue) {
    document.getElementById("suggestion-list").innerHTML = "";
    return;
  }
  const containingStrings = [];
  for (let i = 0; i < suggestionsProduct.length; i++) {
    if (suggestionsProduct[i].toLowerCase().includes(currentValue)) {
      containingStrings.push(suggestionsProduct[i]);
    }
  }
  displaySuggestionsproduct(containingStrings);
};
function displaySuggestionsproduct(suggestions) {
  let suggestionList = document.getElementById("suggestion-list");
  suggestionList.innerHTML = "";
  suggestions.forEach(function (suggestion) {
    suggestionList.innerHTML += `<li onclick="chooseSuggestion(this)">${suggestion}</li>`;
  });
}

const addExistingproduct = () => {
  let productString = document.querySelector("#my-input").value;
  if (productString == "") {
    customNotice(
      " fa-sharp fa-light fa-circle-exclamation",
      "Please enter product ID or product name!",3
    );
    return;
  }
  if (!suggestionsProduct.includes(productString)) {
    customNotice(" fa-sharp fa-light fa-circle-exclamation", "product not found",3);
    return;
  }
  let productID = productString.split("-")[0];
  let inputproduct = document.querySelectorAll(
    "#new-supply .list .placeholder .info .item:nth-child(2)"
  );
  for (let i = 0; i < inputProduct.length; i++) {
    if (parseInt(inputProduct[i].innerHTML) == parseInt(productID)) {
      customNotice(
        " fa-sharp fa-light fa-circle-exclamation",
        "product already exists",3
      );
      return;
    }
  }
  let productObj = rawSuggestionsProduct.find((product) => product.idProduct == productID);
  let input = document.querySelector(".modal-right .list");
  let newPlaceholder = document.createElement("div");
  newPlaceholder.classList.add("placeholder");
  input.appendChild(newPlaceholder);
  newPlaceholder.innerHTML = `
      <div class="info">
          <div class="item"></div>
          <div class="item">${productObj.maproduct}</div>
          <div class="item"><input type="text" oninput="updateTotalCost()"></div>
          <div class="item"><input type="text" oninput="updateTotalCost()"></div>
          <div class="item" onclick="deleteRowproduct(this)"><i class="fa-solid fa-xmark-large fa-sm" style="color: #f2623e;"></i></div>
      </div>
  `;
  formatNumberOrder();
  closeAddproduct();
  document.querySelector("#my-input").value = "";
};

const deleteRowproduct = (input) => {
  input.closest(".placeholder").remove();
  formatNumberOrder();
};
const updateTotalCost = () => {
  let totalCost = 0;
  let input = document.querySelectorAll(
    ".modal-right .list .placeholder .info"
  );
  for (let i = 0; i < input.length; i++) {
    let cost = input[i].querySelector(".item:nth-of-type(3) input").value;
    let quantity = input[i].querySelector(".item:nth-of-type(4) input").value;
    if (cost == "" || quantity == "") continue;
    if (isNaN(cost) || isNaN(quantity)) continue;
    totalCost += parseFloat(cost) * parseInt(quantity);
  }
  document.querySelector("#new-supply .total-cost").value = totalCost;
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
