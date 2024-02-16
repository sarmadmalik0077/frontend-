try {
  document
    .getElementById("passwordIcon")
    .addEventListener("click", togglePassword);

  function togglePassword() {
    const myButton = document.getElementById("passwordIcon");
    const passwordInput = document.getElementById("passwordtype");
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      myButton.setAttribute("src", "Assets/Images/Index/Icon/eye_open_svg.svg");
    } else {
      passwordInput.type = "password";
      myButton.setAttribute(
        "src",
        "Assets/Images/Index/Icon/eye_close_icon.svg"
      );
    }
  }
} catch (err) {
  console.log(err);
}
try {
  document
    .getElementById("passwordIcon1")
    .addEventListener("click", togglePassword1);

  function togglePassword1() {
    const myButton = document.getElementById("passwordIcon1");
    const passwordInput = document.getElementById("passwordtype1");
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      myButton.setAttribute("src", "Assets/Images/Index/Icon/eye_open_svg.svg");
    } else {
      passwordInput.type = "password";
      myButton.setAttribute(
        "src",
        "Assets/Images/Index/Icon/eye_close_icon.svg"
      );
    }
  }
  document
    .getElementById("passwordIcon2")
    .addEventListener("click", togglePassword2);

  function togglePassword2() {
    const myButton = document.getElementById("passwordIcon2");
    const passwordInput = document.getElementById("passwordtype2");
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      myButton.setAttribute("src", "Assets/Images/Index/Icon/eye_open_svg.svg");
    } else {
      passwordInput.type = "password";
      myButton.setAttribute(
        "src",
        "Assets/Images/Index/Icon/eye_close_icon.svg"
      );
    }
  }
} catch (err) {
  console.log(err);
}
function showLoginForm() {
  const Logindiv_Id = document.getElementById("loginform");
  const Registerdiv_Id = document.getElementById("registerform");
  Registerdiv_Id.style.display = "none";
  Logindiv_Id.style.display = "block";
}
function showRegisterForm() {
  const Logindiv_Id = document.getElementById("loginform");
  const Registerdiv_Id = document.getElementById("registerform");
  Logindiv_Id.style.display = "none";
  Registerdiv_Id.style.display = "block";
}

function ShowHideListing() {
  const show_hide_listing = document.getElementById("show_hide_listing");
  const countries_lists = document.getElementById("countries_lists");
  show_hide_listing.innerText =
    show_hide_listing.innerText === "Show All Countries"
      ? "Show Less Countries"
      : "Show All Countries";
  const active_clr_listing_none = document.querySelectorAll(
    ".active_clr_listing-none "
  );
  active_clr_listing_none.forEach((e) => {
    e.classList.toggle("active_clr_listing");
  });
  countries_lists.style.display =
    countries_lists.style.display === "none" ? "block" : "none";
}
// slider form js
// make
$(".list-group_make").on("click", "li", function (event) {
  var hrefValue = $(this).text();
  var altValue = $(".list-group_make li").attr("value");
  $('#make_search_input').val(altValue)
  $("#MakeItem").text(hrefValue.replace(/\s*\([^)]*\)\s*/, ""));
});
// model
$(".list-group_model").on("click", "li", function (event) {
  var hrefValue = $(this).text();
  var altValue = $(".list-group_model li").attr("value");
  $('#model_search_input').val(altValue)
  $("#ModalItem").text(hrefValue.replace(/\s*\([^)]*\)\s*/, ""));
});
// type
$(".list-group-type").on("click", "li", function (event) {
  var hrefValue = $(this).text();
  var altValue = $(".list-group-type li").attr("value");
  $('#Type_search_input').val(altValue)
  $("#type_item").text(hrefValue.replace(/\s*\([^)]*\)\s*/, ""));
});
// steering
$(".list_group_steer").on("click", "li", function (event) {
  var hrefValue = $(this).text();
  var altValue = $(".list_group_steer li").attr("value");
  $('#steer_search_input').val(altValue)
  $("#steering_item").text(hrefValue.replace(/\s*\([^)]*\)\s*/, ""));
});
// years min
$(".list_group_yearmin").on("click", "li", function (event) {
  var hrefValue = $(this).text();
  var altValue = $(".list_group_yearmin li").attr("value");
  $('#yearsmin_search_input').val(altValue)
  $("#years_itemmin").text(hrefValue.replace(/\s*\([^)]*\)\s*/, ""));
});
// years max
$(".list_group_yearmax").on("click", "li", function (event) {
  var hrefValue = $(this).text();
  var altValue = $(".list_group_yearmax li").attr("value");
  $('#yearsmax_search_input').val(altValue)
  $("#years_itemmax").text(hrefValue.replace(/\s*\([^)]*\)\s*/, ""));
});