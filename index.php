
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="kkk"></div>
        <div class="container">
            <div class="left-side"></div>
            <div class="right-side">
                <h1>Fill the form below to registration:</h1>
                <form action="nextstep.php" method="post">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="Email address..." id="email">
                    <label for="username">Username</label>
                    <input type="text" name="login" placeholder="Username..."  id="username" >
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="**********" id="password" >
                    <label for="repeat">Confirm Password</label>
                    <input type="password" name="repeat-password" placeholder="*********" id="repeat" >
                    <input type="checkbox" name="agree-or-not" id="checkbox">
                    <label for="checkbox">I agree to the <a href="#">Terms of User</a></label>
                    <button class="button first">Sign Up</button>
                </form>
            </div>
        </div>
    </body>
</html>