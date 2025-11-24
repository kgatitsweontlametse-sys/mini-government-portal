// Submit form
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

// Fetch requests (for admin view)
function loadRequests() {
  fetch("../backend/get_requests.php")
    .then(res => res.json())
    .then(data => {
      let output = "<h2>Submitted Requests</h2><ul>";
      data.forEach(req => {
        output += `<li><strong>${req.service}</strong> by ${req.name} (${req.email}) - Status: ${req.status}</li>`;
      });
      output += "</ul>";
      document.getElementById("requestsList").innerHTML = output;
    });
}
