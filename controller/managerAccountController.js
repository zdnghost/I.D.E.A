let nameAcc = null;
let emailAcc = null;
let usernameAcc = null;
let phoneAcc = null;
let roleAcc = null;
let passwordAcc = null;
let addressAcc = null;
let isAccountDiff = false;
const setAccountInfo = () => {
    usernameAcc = document.querySelector("#edit-account .accountID").value;
    nameAcc = document.querySelector("#edit-account .nameAccount").value;
    emailAcc = document.querySelector("#edit-account .emailAccount").value;
    phoneAcc = document.querySelector("#edit-account .phoneAccount").value;
    roleAcc = parseInt(
      document.querySelector("#edit-account .roleAccount").value
    );
    passwordAcc = document.querySelector("#edit-account .passwordAccount").value;
    addressAcc = document.querySelector("#edit-account .addressAccount").value;
  };
  const updateAccount = () => {
    if (!checkInputUpdateAccount()) return;
    setAccountInfo();
    $.ajax({
      url:
        "util/user.php?fullname=" +
        nameAcc +
        "&email=" +
        emailAcc +
        "&phone=" +
        phoneAcc +
        "&password=" +
        passwordAcc +
        "&address=" +
        addressAcc +
        "&username=" +
        usernameAcc +
        "&role=" +
        roleAcc +
        "&action=updateAccount",
      type: "PUT",
      success: function (res) {
        if (res != "Success") alert(res);
        else {
          customNotice(
            "fa-sharp fa-light fa-circle-check",
            "Update successfully!",
            1
          );
          isAccountInfoChange();
        }
      },
    });
  };