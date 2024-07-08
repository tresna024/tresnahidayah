const form = document.querySelector("form");
const fullName = document.getElementById("name");
const email = document.getElementById("email");
const pesan = document.getElementById("message");

function sendEmail() {
    const bodyMessage =
        `Nama : ${fullName.value}<br> Email : ${email.value}<br>Message : ${pesan.value}`;

    Email.send({
        Host: "smtp.elasticemail.com",
        Username: "poltekasrama@gmail.com",
        Password: "D9F2EC639003DEAC191E5394FFC667982473",
        To: "poltekasrama@gmail.com",
        From: "poltekasrama@gmail.com",
        Subject: "komentar asrama",
        Body: bodyMessage
    }).then(
        message => {
            if (message == "OK") {
                Swal.fire({
                    title: "Berhasil",
                    text: "Pesan Berhasil di kirim",
                    icon: "success"
                });
            }
        }
    );
}

form.addEventListener("submit", (e) => {
    e.preventDefault();

    sendEmail();
});