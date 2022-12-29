window.addEventListener("load", () => {
  let modal = document.querySelector("#myModal");
  let imagesModal = document.querySelectorAll("div.img_content.openImg");
  let modalImg = document.querySelector("#imgModal");
  let videoModal = document.querySelector("#videoModal");
  let captionText = document.querySelector("#captionModal");
  const myModal = new bootstrap.Modal(document.getElementById("myModal"), {});
  let ifrm;

  for (let i = 0; i < imagesModal.length; i++) {
    imagesModal[i].addEventListener("click", function () {
      let img_node = getImgNode(this.children);
      if (img_node.isImage) {
        modalImg.src = img_node.data.src;
        modalImg.alt = img_node.data.alt;
        captionText.innerHTML = img_node.data.alt;
        modalImg.classList.remove("d-none");
      } else {
        ifrm = document.createElement("iframe");
        ifrm.setAttribute("src", img_node.data.dataset.src);
        ifrm.setAttribute("allow", "autoplay; fullscreen; picture-in-picture");
        ifrm.setAttribute("frameborder", "0");
        ifrm.setAttribute("class", "video-iframe");
        ifrm.setAttribute("allowfullscreen", "");
        if (img_node.data.dataset.class) {
          videoModal.children[0].classList.add(img_node.data.dataset.class);
        }
        ifrm.setAttribute("alt", img_node.data.alt);
        captionText.innerHTML = img_node.data.alt;
        videoModal.appendChild(ifrm);
        videoModal.classList.remove("d-none");
      }
      myModal.show();
    });
  }
  modal.addEventListener("hidden.bs.modal", (event) => {
    modalImg.classList.add("d-none");
    videoModal.classList.add("d-none");
    videoModal.removeChild(ifrm);
  });

  let modalClose = document.querySelector("#modalClose");
  modalClose.onclick = function () {
    myModal.hide();
  };
});

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
