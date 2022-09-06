// external js: masonry.pkgd.js, imagesloaded.pkgd.js

// init Masonry
let grid = document.querySelector(".grid");
let msnry = new Masonry(grid, {
  itemSelector: ".grid-item",
  columnWidth: ".grid-sizer",
  percentPosition: true,
});
imagesLoaded(grid).on("progress", function () {
  // layout Masonry after each image loads
  msnry.layout();
});

// open images at modal
let modal = document.querySelector("#myModal");
let imagesModal = document.querySelectorAll("div.img_content.openImg");
let modalImg = document.querySelector("#imgModal");
let captionText = document.querySelector("#captionModal");

for (let i = 0; i < imagesModal.length; i++) {
  imagesModal[i].addEventListener("click", function () {
    let img_node = getImgNode(this.children);
    modalImg.src = img_node.src;
    modalImg.alt = img_node.alt;
    captionText.innerHTML = img_node.alt;
    modal.style.display = "block";
  });
}
let modalClose = document.querySelector("#modalClose");
modalClose.onclick = function () {
  modal.style.display = "none";
};

//let allImagesText = document.querySelectorAll("div.img_content img");
//console.dir(allImagesText);

function getImgNode(collection) {
  for (let i = 0; i < collection.length; i++) {
    if (collection[i].nodeName.toLowerCase() == "img") {
      return collection[i];
    }
  }
}