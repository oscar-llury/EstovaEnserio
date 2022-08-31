// external js: masonry.pkgd.js, imagesloaded.pkgd.js

// init Masonry
var grid = document.querySelector(".grid");

var msnry = new Masonry(grid, {
  itemSelector: ".grid-item",
  columnWidth: ".grid-sizer",
  percentPosition: true,
});

imagesLoaded(grid).on("progress", function () {
  // layout Masonry after each image loads
  msnry.layout();
});

// Get the modal
let modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
//var img = document.getElementById("myImg");
let imgs = document.getElementsByClassName("openImg");
let modalImg = document.getElementById("imgModal");
let captionText = document.getElementById("captionModal");

for (let i = 0; i < imgs.length; i++) {
  imgs[i].addEventListener("click", function () {
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
    modal.style.display = "block";
  });
}

// Get the <span> element that closes the modal
let span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
};
