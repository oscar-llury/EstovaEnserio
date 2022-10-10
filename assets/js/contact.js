let form = document.querySelector("#contact-form");
form.addEventListener("submit", (e) => {
  e.preventDefault();
  if (form.checkValidity() === true) {
    //setValidated(true);
    //setErrors({});
    let formData = new FormData(form);
    const result = sendContactForm(formData);
    if (result) {
      form.reset();
    }
  } else {
    //form.set;
  }
});

async function sendContactForm(formData) {
  //const url = "https://jsonplaceholder.typicode.com/post";

  await fetch("./backend/mailer.php", {
    method: "POST",
    body: formData,
  })
    .then((data) => {
      return data.json();
    })
    .then((res) => {
      console.log(res);
      alert(res.msg);
      /*
      if (res.status) {
        
      }*/
    });
}
