var loginBtn = document.getElementById("loginBtn");
var loginModal = document.getElementById("loginModal");
var modalContent = document.querySelector(".modal-content");

loginBtn.addEventListener("click", function() {
  loginModal.style.display = "block";
});

modalContent.addEventListener("click", function(event) {
  event.stopPropagation();
});

window.addEventListener("click", function(event) {
  if (event.target == loginModal) {
    loginModal.style.display = "none";
  }
});



// Скрипт 2: исчезновение шапки при скролле
var header = document.querySelector("header");
var lastScrollPosition = 0;

window.addEventListener("scroll", () => {
  var currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;
  if (currentScrollPosition > lastScrollPosition) {
    header.style.transform = "translateY(-100%)";
  } else {
    header.style.transform = "translateY(0)";
  }
  lastScrollPosition = currentScrollPosition;
});
