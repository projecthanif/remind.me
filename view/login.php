<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/css/styles.css" />
    <title>login</title>
  </head>
  <body>
    <nav>
      <ul class="navbar">
        <li>
          <a href="/" class="nav-link">remind.me</a>
        </li>
        <div class="left">
          <li>
            <a href="/login" class="nav-link">Login</a>
          </li>
          <li>
            <a href="/signup" class="nav-link">Sign Up</a>
          </li>
        </div>
      </ul>
    </nav>
    <main>
      <section class="body">
        <div class="body-right three">
            <h1 class="h1-text three">log in.</h1>
            <div class="card three">
                <form action="/log" method="post" class="form">
                    <label for="username">Email</label>
                    <input type="text" name="email" id="">
                    <label for="password" class="label three">Password</label>
                    <input type="password" name="password" id="">
                    <a href="#" class="a-link three">Forget password?</a>
                    <input type="submit" value="SIGN IN" class="form-btn three">
                </form>
            </div>
        </div>
        <div class="body-left"></div>
      </section>
    </main>
  </body>
</html>
