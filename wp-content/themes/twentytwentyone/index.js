const logo = document.querySelector(".header__logo-img");

addEventListener("scroll", (e) => {
  if (document.body.scrollTop > 0) {
    logo.src = "/img/icon-logo.png";
  } else {
    logo.src = "/img/text-logo.png";
  }
});
