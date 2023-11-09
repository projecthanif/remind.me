<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/assets/css/styles2.css" />
  <title>remind</title>
</head>

<body>
  <aside>
    <div class="flex">
      <a href="/" class="aside-link">
        <h3 class="title">remind.me</h3>
      </a>
      <button id="close"></button>
    </div>
    <ul class="aside">
      <li>
        <a href="#" class="aside-link">Lists</a>
      </li>
      <div class="down">
        <li>
          <a href="#" class="aside-link">About</a>
        </li>
        <li>
          <a href="#" class="aside-link">Help</a>
        </li>
        <li>
          <a href="/logout" class="aside-link">Log Out</a>
        </li>
      </div>
    </ul>
  </aside>
  <header>
    <div class="lg-header">
      <h2 class="title t1">Your Lists</h2>
      <div class="user-info">
        <!-- <img src="#" alt="user"> -->
        <h3 class="title v2">Welcome,
          <?= $_SESSION['name'] ?? 'hanif' ?>
        </h3>
      </div>
    </div>
    <div class="sm-header">
      <h3 class="sm title">remind.me</h3>
      <button class="navbar-btn" id="navbar"></button>
    </div>
  </header>
  <main>
    <section class="card-container">
      <div class="card">
        <h5 class="title v3">To Do</h5>
        <button class="btn toggle" onclick="modelFormToggle()" id="form">
          <i class="fa-solid fa-plus fa-2x"></i>
        </button>
        <div class="card-2">
          <div class="card-head">
            <div class="head-2">
              <div class="color red"></div>
              <h6 class="title v4">Title</h6>
            </div>
            <button class="btn-2" onclick="modelToggle()">></button>
          </div>
          <p class="text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim
            expedita mollitia velit natus sint voluptates, repudiandae
          </p>
        </div>
        <div class="card-2">
          <div class="card-head">
            <div class="head-2">
              <div class="color red"></div>
              <h6 class="title v4">Title</h6>
            </div>
            <button class="btn-2" onclick="modelToggle()">></button>
          </div>
          <p class="text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim
            expedita mollitia velit natus sint voluptates, repudiandae
          </p>
        </div>
        <div class="card-2">
          <div class="card-head">
            <div class="head-2">
              <div class="color red"></div>
              <h6 class="title v4">Title</h6>
            </div>
            <button class="btn-2" onclick="modelToggle()">></button>
          </div>
          <p class="text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim
            expedita mollitia velit natus sint voluptates, repudiandae
          </p>
        </div>
      </div>
      <div class="card">
        <h5 class="title v3">In Progress</h5>
      </div>
      <div class="card">
        <h5 class="title v3">Completed</h5>

      </div>
    </section>
    <article class="model">
      <div class="model-title">Title</div>
      <div class="model-body">
        <p class="model-description">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus
          tempora ab laborum dolorum. Vero praesentium expedita, ipsa nemo
          ullam facere temporibus aut corporis, rerum beatae molestias ex
          deserunt aperiam hic. Voluptas, consectetur? Quod earum, dolore
          eligendi vitae facilis fugit voluptas necessitatibus culpa quis
          delectus. Ut laboriosam temporibus fugit fugiat amet, dolor tenetur
          laudantium eum distinctio. Quis, nostrum quas. Soluta, quidem.
          Delectus ipsa nisi impedit quo eligendi commodi nemo quisquam
          necessitatibus. Iure fugit eveniet dolores, rerum deleniti
          voluptatem eum quasi facere quod culpa ea labore nihil dignissimos
          illum impedit assumenda recusandae.
        </p>
        <div class="priority-level">
          <h3 class="title fs-3">Priority:</h3>
          <div class="pill yellow">LOW</div>
          <div class="pill blue">MIDDLE</div>
          <div class="pill red">HIGH</div>
        </div>
      </div>
      <div class="model-foot">
        <div class="pill white">EDIT</div>
        <div class="pill red">DELETE</div>
        <div class="pill black r-end" id="model-close">ClOSE</div>
      </div>
    </article>
  </main>
</body>

<script src="/assets/js/app.js"></script>

</html>