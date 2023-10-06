<!DOCTYPE html>
<html lang="en">
<link rel='icon' type='image/x-icon' href='./assets/fav-icon.png'>
<link rel='stylesheet' href='login.css'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot signup</title>
</head>

<body>
    <div class="login-container">
        <h1>Login</h1>
        <form class="login-form">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>

<script>
    const form = document.querySelector(".login-form");

    form.addEventListener("submit", (e) => {
        e.preventDefault();

        const email = document.querySelector('input[name="email"]').value;
        const password = document.querySelector('input[name="password"]').value;

        const data = {
            email: email,
            password: password,
        };

        fetch("/api/auth/login/", {
                method: "POST",
                body: JSON.stringify(data)
            })
            .then((response) => {
                console.log("Response status:", response.status);
                if (response.status === 200) {
                    window.location.href = "/";
                } else {
                    console.log("something went wrong")
                }
            })
            .catch((error) => {
                console.error("Error:", error);
            })

    });
</script>