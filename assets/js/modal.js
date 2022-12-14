let modal = document.querySelector("#myModal");
let imagesModal = document.querySelectorAll("div.img_content.openImg");
let modalImg = document.querySelector("#imgModal");
let videoModal = document.querySelector("#videoModal");
let captionText = document.querySelector("#captionModal");

for (let i = 0; i < imagesModal.length; i++) {
  imagesModal[i].addEventListener("click", function () {
    let img_node = getImgNode(this.children);
    if (img_node.isImage) {
      modalImg.src = img_node.data.src;
      modalImg.alt = img_node.data.alt;
      captionText.innerHTML = img_node.data.alt;
      modalImg.classList.remove("d-none");
    } else {
      videoModal;
      videoModal.children[0].src = img_node.data.dataset.src;
      videoModal.children[0].alt = img_node.data.alt;
      captionText.innerHTML = img_node.data.alt;
      videoModal.classList.remove("d-none");
    }
    modal.style.display = "block";
  });
}
let modalClose = document.querySelector("#modalClose");
modalClose.onclick = function () {
  modal.style.display = "none";
  modalImg.classList.add("d-none");
  videoModal.classList.add("d-none");
  videoModal.children[0].src = "";
};

function getImgNode(collection) {
  for (let i = 0; i < collection.length; i++) {
    if (collection[i].nodeName.toLowerCase() == "img") {
      if (collection[i].dataset.type == "video") {
        return { isImage: false, data: collection[i] };
      }
      return { isImage: true, data: collection[i] };
    }
  }
}
