document.getElementById("messageForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const data = {
        phone: document.getElementById("phone").value,
        message: document.getElementById("message").value,
        repeat: document.getElementById("repeat").value,
        schedule: document.getElementById("schedule").value || null
    };

    fetch("http://localhost:5000/api/send_message", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => alert(data.message))
    .catch(error => console.error("Erro:", error));
});
