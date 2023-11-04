const logo = document.querySelector(".header__logo-img");
const header = document.querySelector(".header > .container");
const logoLink = document.querySelector(".header__logo");
const videoButton = document.querySelector(".video__button");
const videoPreview = document.querySelector(".video__preview");
const youtubeButton = document.querySelector("iframe");
const videoPlayer = document.getElementById("videoPlayer");
const langUkr = document.querySelector(".header__lang-ukr");
const langEng = document.querySelector(".header__lang-eng");

const path = window.location.pathname;

if (path.startsWith("/en")) {
  langEng.classList.toggle("header__lang-eng--active", true);
  langUkr.classList.toggle("header__lang-ukr--active", false);
} else {
  langUkr.classList.toggle("header__lang-ukr--active", true);
  langEng.classList.toggle("header__lang-eng--active", false);
}

langUkr.addEventListener("click", () => {
  langUkr.classList.toggle("header__lang-ukr--active", true);
  langEng.classList.toggle("header__lang-eng--active", false);
});

langEng.addEventListener("click", () => {
  langEng.classList.toggle("header__lang-eng--active", true);
  langUkr.classList.toggle("header__lang-ukr--active", false);
});

let isScrolledToSlider = false;

let scrollAmount = document.querySelector(".mySwiper").offsetTop - 154;

videoButton.addEventListener("click", () => {
  videoButton.style.display = "none";
  videoPreview.style.display = "none";

  videoPlayer.play();
});

const changeIsScrolled = () => {
  isScrolledToSlider = true;
};

document.addEventListener("scroll", (e) => {
  if (document.documentElement.scrollTop > 0 || document.body.scrollTop > 0) {
    logo.style.setProperty("transition", "width 0s");
    logo.src = "/wp-content/themes/nasoloda/img/icon-logo.png";

    logoLink.style.setProperty("padding-top", "unset");
    if (window.innerWidth >= 1024) {
      header.style.setProperty("padding", "15px 30px");
      logo.style.setProperty("width", "70px");
    } else {
      header.style.setProperty("padding", "10px 20px");
      logo.style.setProperty("width", "50px");
    }
  } else {
    logo.style.setProperty("transition", "width 0.5s");
    logo.src = "/wp-content/themes/nasoloda/img/text-logo.png";

    if (window.innerWidth >= 1024) {
      header.style.setProperty("padding", "30px");
      logoLink.style.setProperty("padding-top", "50px");
      logo.style.setProperty("width", "254px");
    } else {
      header.style.setProperty("padding", "12px 20px");
      logoLink.style.setProperty("padding-top", "30px");
      logo.style.setProperty("width", "98px");
    }
  }

  if (
    document.documentElement.scrollTop > 0 &&
    document.documentElement.scrollTop < 1100 &&
    isScrolledToSlider === false
  ) {
    isScrolledToSlider = true;

    if (window.innerWidth < 1024) {
      scrollAmount = document.querySelector(".mySwiper").offsetTop - 54;

      window.scrollTo({
        top: scrollAmount,
        behavior: "smooth",
      });
    } else {
      window.scrollTo({
        top: document.getElementById("about").offsetTop,
        behavior: "smooth",
      });
    }
  }

  if (document.documentElement.scrollTop == 0) {
    isScrolledToSlider = false;
  }
});

class Menu {
  static #height = null;
  static #wrapper = null;
  static #button = null;
  static #btnImg = null;
  static #listener = null;

  static #isOpen = false;

  static init = () => {
    // this.#height = document.querySelector(".header__menu-bottom").offsetHeight;
    this.#height = 100;
    this.#wrapper = document.querySelector(".header__menu-wrapper");
    this.#button = document.querySelector(".header__menu");
    this.#btnImg = document.querySelector(".header__menu-img");

    this.#listener = (e) => {
      this.#toggle();
    };

    this.#button.onclick = this.#toggle;
  };

  static #toggle = () => {
    if (this.#isOpen) {
      document.body.style.removeProperty("overflow");

      this.#btnImg.src = "/wp-content/themes/nasoloda/svg/burger.svg";

      document.removeEventListener("click", this.#listener, false);

      logoLink.style.removeProperty("display");

      document
        .querySelector(".heder__left")
        .classList.toggle("heder__left--disabled", false);

      document
        .querySelector(".header")
        .style.setProperty("background-color", "#fff");

      this.#wrapper.style.height = 0;
    } else {
      document.body.style.setProperty("overflow", "hidden");

      logoLink.style.setProperty("display", "none");

      document
        .querySelector(".heder__left")
        .classList.toggle("heder__left--disabled", true);

      document
        .querySelector(".header")
        .style.setProperty("background-color", "transparent");

      this.#btnImg.src = "/wp-content/themes/nasoloda/svg/burger-close.svg";

      setTimeout(() => {
        document.addEventListener("click", this.#listener);
      });

      this.#wrapper.style.height = `${this.#height}%`;
    }

    this.#isOpen = !this.#isOpen;
  };
}

Menu.init();

const swiper = new Swiper(".mySwiper", {
  direction: "vertical",
  speed: 1000,
  slidesPerView: "1",
  allowTouchMove: true,
  pagination: {
    el: ".swiper-pagination",
  },

  mousewheel: {
    releaseOnEdges: true,
  },

  keyboard: true,
  on: {
    init: function (swiper) {
      setTimeout(() => {
        const slider = document.querySelector(".mySwiper");
        const currentSlide = swiper.slides[swiper.activeIndex];
        const currentSlideItem = currentSlide.children[0];
        slider.style.height = currentSlideItem.clientHeight + "px";
      }, 1000);
    },

    slideChange: function (swiper) {
      const slider = document.querySelector(".mySwiper");
      const currentSlide = swiper.slides[swiper.activeIndex];
      const currentSlideItem = currentSlide.children[0];
      setTimeout(() => {
        slider.style.height = currentSlideItem.clientHeight + "px";
      }, 1000);

      if (swiper.activeIndex != 0 && swiper.activeIndex != 4) {
        document.querySelector("body").style.setProperty("overflow", "hidden");
      } else {
        setTimeout(() => {
          document.querySelector("body").style.setProperty("overflow", "auto");
        });
      }

      // if (swiper.activeIndex != 0 && swiper.activeIndex != 4) {
      //   document.querySelector("body").classList.add("no-scroll");
      // } else {
      //   document.querySelector("body").classList.remove("no-scroll");
      // }
    },
  },
});

const swiperLike = new Swiper(".likeSwiper", {
  keyboard: true,
  speed: 1000,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

class Sent {
  static #sent = null;
  static #sentContent = null;
  static #openSent = null;
  static #listener = null;

  static init = () => {
    this.#sent = document.getElementById("sent");
    this.#sentContent = document.querySelector(".send");
    this.#openSent = document.querySelector(".get-conditions-form__button");

    this.#listener = (e) => {
      if (!this.#sentContent.contains(e.target)) {
        this.#closeSentModal();
      }
    };

    this.#openSent.addEventListener("click", (e) => {
      // e.preventDefault();
      //this.openSentModal();
    });
  };

  static openSentModal = () => {
    this.#sentContent.style.setProperty("scale", "1");
    this.#sent.style.setProperty("opacity", "1");
    this.#sent.style.setProperty("pointer-events", "auto");

    setTimeout(() => {
      this.#sent.addEventListener("click", this.#listener);
    }),
      document.body.style.setProperty("overflow", "hidden");

    setTimeout(() => {
      this.#closeSentModal();
    }, 2000);
  };

  static #closeSentModal = () => {
    this.#sentContent.style.setProperty("scale", "0.4");
    this.#sent.style.setProperty("opacity", "0");
    this.#sent.style.setProperty("pointer-events", "none");
    document.body.style.removeProperty("overflow");

    this.#sent.removeEventListener("click", this.#listener, false);
  };
}

Sent.init();

window.sent = Sent;

class GetCatalog {
  static #getCatalog = null;
  static #getCatalogContent = null;
  static #openGetCatalog = null;
  static #openGetCatalogHeader = null;
  static #openGetCatalogFooter = null;
  static #sent = null;
  static #listener = null;
  static #openGetCatalogMob = null;

  static init = () => {
    this.#getCatalog = document.getElementById("get-catalog");
    this.#getCatalogContent = document.querySelector(".get-catalog");
    this.#openGetCatalog = document.querySelector(".make__button-action");
    this.#openGetCatalogHeader = document.getElementById(
      "open-get-catalog-header"
    );
    this.#openGetCatalogFooter = document.getElementById(
      "open-get-catalog-footer"
    );
    this.#openGetCatalogMob = document.querySelector(
      ".make__button-action-mob"
    );
    this.#sent = this.#getCatalog.querySelector(".form__button");

    this.#openGetCatalog.addEventListener("click", (e) => {
      e.preventDefault();
      this.#openCatalogModal();
    });
    this.#openGetCatalogMob.addEventListener("click", (e) => {
      e.preventDefault();
      this.#openCatalogModal();
    });
    // this.#openGetCatalogHeader.addEventListener("click", (e) => {
    //   e.preventDefault();
    //   this.#openCatalogModal();
    // });
    this.#openGetCatalogFooter.addEventListener("click", (e) => {
      e.preventDefault();
      this.#openCatalogModal();
    });
    this.#listener = (e) => {
      if (!this.#getCatalogContent.contains(e.target)) {
        this.closeCatalogModal();
      }
    };

    document.querySelector(".get-catalog__close").onclick = () => {
      this.closeCatalogModal();
    };

    this.#sent.addEventListener("click", (e) => {
      // e.preventDefault();
      // window.sent.openSentModal();
      // this.#closeCatalogModal();
    });
  };

  static #openCatalogModal = () => {
    this.#getCatalogContent.style.setProperty("scale", "1");
    this.#getCatalog.style.setProperty("opacity", "1");
    this.#getCatalog.style.setProperty("pointer-events", "auto");

    setTimeout(() => {
      window.addEventListener("click", this.#listener);
    }),
      document.body.style.setProperty("overflow", "hidden");
  };

  static closeCatalogModal = () => {
    this.#getCatalogContent.style.setProperty("scale", "0.4");
    this.#getCatalog.style.setProperty("opacity", "0");
    this.#getCatalog.style.setProperty("pointer-events", "none");
    document.body.style.removeProperty("overflow");

    window.removeEventListener("click", this.#listener);
  };
}

GetCatalog.init();

window.getCatalog = GetCatalog;

class ContactUsForm {
  static #contactUs = null;
  static #contactUsContent = null;
  static #openContactUs = null;
  static #sent = null;
  static #listener = null;
  static #openContactUsMenu = null;

  static init = () => {
    this.#contactUs = document.getElementById("contact-us");
    this.#contactUsContent = document.querySelector(".contact-us");
    this.#openContactUs = document.querySelector(".header__contact-us");
    this.#openContactUsMenu = document.querySelector(".header__contact-us-mob");
    this.#sent = this.#contactUs.querySelector(".form__button");

    this.#openContactUs.addEventListener("click", (e) => {
      e.preventDefault();
      this.#openContactUsModal();
    });

    this.#openContactUsMenu.addEventListener("click", (e) => {
      e.preventDefault();
      this.#openContactUsModal();
    });

    document.querySelector(".contact-us__close").onclick = () => {
      this.closeContactUsModal();
    };

    this.#sent.addEventListener("click", (e) => {
      // e.preventDefault();
      // window.sent.openSentModal();
      // this.#closeContactUsModal();
    });

    this.#listener = (e) => {
      if (!this.#contactUsContent.contains(e.target)) {
        this.closeContactUsModal();
      }
    };
  };

  static #openContactUsModal = () => {
    this.#contactUsContent.style.setProperty("scale", "1");
    this.#contactUs.style.setProperty("opacity", "1");
    this.#contactUs.style.setProperty("pointer-events", "auto");

    setTimeout(() => {
      window.addEventListener("click", this.#listener);
    }),
      document.body.style.setProperty("overflow", "hidden");
  };

  static closeContactUsModal = () => {
    this.#contactUsContent.style.setProperty("scale", "0.4");
    this.#contactUs.style.setProperty("opacity", "0");
    this.#contactUs.style.setProperty("pointer-events", "none");
    document.body.style.removeProperty("overflow");

    window.removeEventListener("click", this.#listener);
  };
}

ContactUsForm.init();

window.contactUsForm = ContactUsForm;

document.addEventListener(
  "wpcf7mailsent",
  () => {
    window.sent.openSentModal();
    window.contactUsForm.closeContactUsModal();
    window.getCatalog.closeCatalogModal();
  },
  false
);

document.querySelector(
  ".form__field-select > option:nth-child(1)"
).disabled = true;

videoPlayer.addEventListener("timeupdate", function () {
  videoButton.style.display = "none";
  videoPreview.style.display = "none";
});

videoPlayer.addEventListener("pause", () => {
  videoButton.style.removeProperty("display");
  videoPreview.style.removeProperty("display");
});
