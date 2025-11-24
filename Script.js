document.getElementById("requestForm").addEventListener("submit", function(e) {
  e.preventDefault();
  const formData = new FormData(this);

  fetch("../backend/submit_request.php", {
    method: "POST",
    body: formData
  })
  .then(res => res.text())
  .then(data => {
    document.getElementById("response").innerText = data;
    this.reset();
  });
});
