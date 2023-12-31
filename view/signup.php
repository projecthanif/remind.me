<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/css/styles.css" />
    <title>sign up</title>
</head>

<body>
    <nav>
        <ul class="navbar">
            <li>
                <a href="/" class="nav-link">remind.me</a>
            </li>
            <div class="left">
                <li>
                    <a href="/user/login" class="nav-link">Login</a>
                </li>
                <li>
                    <a href="/user/signup" class="nav-link">Sign Up</a>
                </li>
            </div>
        </ul>
    </nav>
    <main>
        <section class="body three">
            <div class="body-right two">
                <h1 class="h1-text two">sign up.</h1>
                <p class="para">You already have an account?
                    <a href="/user/login" class="a-link">Log in</a>
                </p>
            </div>
            <div class="body-left two">
                <div class="card two">
                    <form action="/user/verify" method="post" class="form">
                        <label for="username">User Name</label>
                        <input type="text" name="username" id="">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="">
                        <label for="c-password">Confirm Password</label>
                        <input type="password" name="c-password" id="">
                        <input type="submit" value="Register" class="form-btn">
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>

</html>