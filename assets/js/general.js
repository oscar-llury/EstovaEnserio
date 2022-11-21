const header = document.querySelector("header .header");
const sections = [...document.querySelectorAll("[data-section]")];
const scrollRoot = document.querySelector("[data-scroller]");

const options = {
  root: scrollRoot,
  rootMargin: `${header.offsetHeight * -1}px`,
  threshold: 0,
  //rootMargin: "20px 0px 0px 0px",
};

/* The callback that will fire on intersection */
const onIntersect = (entries) => {
  entries.forEach((entry) => {
    const theme = entry.target.dataset.section;
    header.setAttribute("data-theme", theme);
  });
};

/* Create the observer */
const observer = new IntersectionObserver(onIntersect, options);

/* Set our observer to observe each section */
sections.forEach((section) => {
  observer.observe(section);
});
https://www.smashingmagazine.com/2021/07/dynamic-header-intersection-observer/