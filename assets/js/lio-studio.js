function sendContactForm() {
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
}

sendContactForm();
