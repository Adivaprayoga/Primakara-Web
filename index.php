<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STMIK Primakara | Adivaprayoga</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Gugi|Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <!-- Header -->
    <div id="header" class="header">
        <div class="container main-menu">
            <div class="content-flex content-flex-center">
                <a href="/">
                    <div class="logo">
                        <img src="img/logo.png">
                    </div>
                </a>

                <nav class="container-nav-menu">
                    <ul class="nav-menu">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="/pages/profile.php">Profile</a>
                        </li>
                        <li>
                            <a href="/pages/studi.php">Program Studi</a>
                        </li>
                        <li>
                            <a href="/pages/gallery">Gallery</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>

    <!-- Banner -->
    <section class="banner">
        <div class="container">
            <div class="banner-content">
                <h1 id="simpleUsage">STIMIK Primakara <br/> Technopreneurship Campus</h1>
                <a href="#posts" class="scroll">
                  <img src="img/panah.svg">
                </a>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section id="posts" class="main">
        <div class="container">
            <div class="content-flex">


            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="footer-area">
      <p>
        CREATE BY
        <a href="https://github.com/Adivaprayoga" target="_blank">Adivaprayoga</a>.
      </p>
    </footer>

<script src="js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typeit@6.0.2/dist/typeit.min.js" /></script>
<script type="text/javascript">
window.addEventListener("DOMContentLoaded",function() {
  var instance = new TypeIt('#simpleUsage', {
    speed: 50,
    loop: true,
    waitUntilVisible: true
  }).go();
});

</script>
</body>
</html>
