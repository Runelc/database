<!DOCTYPE html>
<html lang="en">
<link rel='icon' type='image/x-icon' href='./assets/fav-icon.png'>
<link rel='stylesheet' href='signup.css'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot signup</title>
</head>

<body>
    <div class="signup-container">
        <h1>Sign Up</h1>
        <form class="signup-form">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <input type="submit" value="Sign Up">
        </form>
        <div class="loginLink"><a href="login.php">Already have a user? click here</p>
        </div>
    </div>
</body>

</html>

<script>
    const form = document.querySelector(".signup-form");

    form.addEventListener("submit", (e) => {
        e.preventDefault();

        const username = document.querySelector('input[name="username"]').value;
        const email = document.querySelector('input[name="email"]').value;
        const password = document.querySelector('input[name="password"]').value;
        const confirm_password = document.querySelector('input[name="confirm_password"]').value;

        const data = { // Create a data object to send to the backend
            username: username,
            email: email,
            password: password,
            confirm_password: confirm_password
        };

        fetch("/api/auth/signup/", {
                method: "POST",
                body: JSON.stringify(data)
            })
            .then((response) => {
                console.log("Response status:", response.status);
                if (response.status === 201 || response.status === 200) {
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