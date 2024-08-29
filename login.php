<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ::selection {
            background-color: gray;
        }

        .container-login-form {
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form {
            width: 400px;
            height: 500px;
            background-image: linear-gradient(to bottom, #424242, #212121);
            display: flex;
            align-items: center;
            flex-direction: column;
            border-radius: 0.5rem;
        }

        .title {
            color: wheat;
            margin: 3rem 0;
            font-size: 2rem;
        }

        .input {
            margin: 0.5rem 0;
            padding: 1rem 0.5rem;
            width: 20rem;
            background-color: inherit;
            color: wheat;
            border: none;
            outline: none;
        }

        .username {
            border-bottom: 1px solid wheat;
            transition: all 400ms;
        }

        .username:hover {
            background-color: #424242;
            border: none;
            border-radius: 0.5rem;
        }

        .password {
            border-bottom: 1px solid wheat;
            transition: all 400ms;
        }

        .password:hover {
            background-color: #424242;
            border: none;
            border-radius: 0.5rem;
        }

        .btn, .btn2 {
            height: 3rem;
            width: 20rem;
            margin-top: 3rem;
            background-color: wheat;
            border-radius: 0.5rem;
            border: none;
            font-size: 1.2rem;
            transition: all 400ms;
            box-shadow: 0 0 10px antiquewhite, 0 0 10px antiquewhite;
        }

        .btn:hover {
            background-color: antiquewhite;
            box-shadow: none;
        }
    </style>
</head>

<body>
    <div class="container-login-form">
        <form class="form" action="./users_db/login.php" method="post">
            <p class="title">Login Form</p>
            <input placeholder="contact" name = "contact"class="username input" type="text">
            <input placeholder="Password" name = "pass" class="password input" type="password">
            <button class="btn" type="submit">Login</button>
            <button onclick="signup()" class="btn2" type="button">Sign Up</button>
        </form>
    </div>


    <script>
            function signup() {
                href = window.open("SignUp.php", "_parent");
            }
    </script>
</body>

</html>