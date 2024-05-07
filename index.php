<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Something Responsive</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <div class="logo">ITC Project</div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Contacts</a></li>
            </ul>
        </nav>
    </header>
    <script>
        burger = document.querySelector(".burger");
        burger.onclick = function(){
            openBar = document.querySelector(".navbar");
            openBarNav = document.querySelector("header");

            openBar.classList.toggle("active");
            openBarNav.classList.toggle("open");
        }
    </script>

    <div class="container">
        <div class="pict-box">
        </div>
        <div class="desc">
            <h1>Jill Furmanovsky</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione exercitationem asperiores</p>
            <button class="continue">
                Work With Me!
            </button>
        </div>
    </div>
    <div class="wrapper">
        <div class="icon 1">
            <h2>Preview 1</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus exercitationem illo</p>
        </div>
        <div class="icon 2">
            <h2>Preview 2</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus exercitationem illo</p>
        </div>
        <div class="icon 3">
            <h2>Preview 3</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus exercitationem illo</p>
        </div>
        <div class="icon 4">
            <h2>Preview 4</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus exercitationem illo</p>
        </div>
    </div>
</body>
</html>