// external js: masonry.pkgd.js, imagesloaded.pkgd.js

// init Masonry
let grid = document.querySelector(".grid");
let msnry = new Masonry(grid, {
  itemSelector: ".grid-item",
  columnWidth: ".grid-sizer",
  percentPosition: true,
  horizontalOrder: true,
});

imagesLoaded(grid).on("progress", function (instance, image) {
  // layout Masonry after each image loads
  msnry.layout();
});
/*
imagesLoaded(grid).on("done", function (instance) {
  msnry.layout();
});
*/
//let imagesAll = document.querySelectorAll("div.img_content.img_content");
//image.img.parentElement.classList.add("grid-loaded");
