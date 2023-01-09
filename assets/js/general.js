const header = document.querySelector("header.header");
const sectionOne = document.querySelector(".main-content");
const headerLogoTop = document.querySelector("header.header .logo-header.top");
const headerLogoScrolled = document.querySelector("header.header .logo-header.scrolled");

let lastKnownScrollPosition = 0;
let ticking = false;

function doSomething(scrollPos) {
  // Do something with the scroll position
  console.log(window.pageYOffset);
  if (document.body.classList.contains("window-scrolled") && scrollPos == 0) {
    //window back to top
    document.body.classList.remove("window-scrolled");
  } else if (document.body.classList.contains("window-scrolled")) {
    //window scrolled

    if (scrollPos > 200) {
      header.classList.add("nav-scrolled", "position-sticky");
      headerLogoTop.classList.add("d-none");
      headerLogoScrolled.classList.remove("d-none");
    } else {
      header.classList.remove("nav-scrolled", "position-sticky");
      headerLogoTop.classList.remove("d-none");
      headerLogoScrolled.classList.add("d-none");
    }
    //header.classList.toggle("d-none", scrollPos > 200);
  } else {
    //window not scrolled
    document.body.classList.add("window-scrolled");
  }
}

document.addEventListener("scroll", (event) => {
  lastKnownScrollPosition = window.scrollY;

  if (!ticking) {
    window.requestAnimationFrame(() => {
      doSomething(lastKnownScrollPosition);
      ticking = false;
    });

    ticking = true;
  }
});
