window.addEventListener("load", () => {
  var splide = new Splide(".splide", {
    type: "loop",
    drag: true,
    snap: true,
    perPage: 3,
    perMove: 1,
    gap: 10,
    arrows: true,
    paginationKeyboard: true,
    paginationDirection: "ltr",
    easing: "cubic-bezier(0.25, 1, 0.5, 1)",
    autoplay: false,
    interval: 2000,
    pauseOnHover: true,
    width: "auto",
    //heightRatio: 0.3,
    breakpoints: {
      767: {
        perPage: 2,
        arrows: false,
      },
      575: {
        perPage: 1,
      },
    },
  });
  splide.mount();
});

/*function sendContactForm() {
  //const url = "https://jsonplaceholder.typicode.com/post";
  let formData = new FormData();
  formData.append("cliente", "lio-studio");
  fetch("/backend/infoProyecto.php", {
    method: "POST",
    body: formData,
  })
    .then((data) => {
      return data.json();
    })
    .then((res) => {
      console.log(res);

      if (res.status) {
        document.querySelector("#h1Proyecto").textContent = res.data.nombre;
        document.querySelector("#h2Proyecto").textContent = res.data.nombre;
        document.querySelector("#presentacion").textContent = res.data.presentacion;

        document.querySelector("#sinopsis").textContent = res.data.sinopsis;
      }
    });
}*/
