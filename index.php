<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Something Responsive</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            font-family: Poppins, sans-serif;
            list-style: none;
            text-decoration: none;
        }

        body {
            background-color: rgb(33, 33, 33);
        }

        header {
            background-color: rgba(39, 39, 39, .5);
            position: fixed;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            height: 80px;
            padding: 15px 100px;
        }

        .burger {
            display: none;
        }

        .logo {
            font-size: larger;
            font-weight: 900;
            color: whitesmoke;
        }

        header .navbar ul {
            display: flex;
        }

        header .navbar ul li a {
            display: block;
            color: whitesmoke;
            padding: 10px 15px;
            margin: 0px 3px;
            font-size: 15px;
            font-weight: bold;
            border-radius: 20px;
            transition: all 0.2s ease;
        }

        header .navbar ul li a:hover {
            background-color: whitesmoke;
            color: rgb(33, 33, 33);
        }

        @media only screen and (max-width: 1320px) {
            header {
                padding: 0px 50px;
            }
        }

        @media only screen and (max-width: 1080px) {
            header {
                padding: 0px 30px;
            }
        }

        @media only screen and (max-width: 600px) {
            .burger {
                display: block;
                cursor: pointer;
            }

            .burger .line {
                width: 25px;
                height: 3px;
                margin-bottom: 3px;
                background-color: whitesmoke;
            }

            header .navbar {
                position: absolute;
                top: 80px;
                right: 0px;
                left: 0px;
                width: 100vw;
                height: 0px;
                transition: all .5 ease;
                overflow: hidden;
            }

            header .navbar.active {
                height: 100vh;
                background-color: rgba(255, 225, 255, .5);
                backdrop-filter: blur(3px);
            }

            header .navbar ul {
                width: 50%;
                margin: auto;
                padding: 10px;
                display: flex;
                flex-direction: column;
                text-align: center;
                justify-content: flex-start;
                align-items: center;
                transition: all .5 ease;
                opacity: 0;
            }

            header .navbar.active ul {
                opacity: 1;
            }

            header .navbar.active ul li {
                margin: auto;
            }

            header .navbar ul li a {
                margin: 10px 0px;
                color: rgb(33, 33, 33);
            }

            .container .desc h1 {
                margin-bottom: 30px;
            }

            .container .desc p {
                margin-bottom: 20px;
            }
        }

        .container {
            text-align: center;
            padding: 100px 25px 25px 30px;
        }

        .container .pict-box {
            background: linear-gradient(45deg, blueviolet, lightgreen);
            margin: auto;
            height: 200px;
            width: 200px;
            border-radius: 50%;
        }

        .container .desc {
            margin: 20px 15px;
            color: whitesmoke;
        }

        .container .desc button {
            margin: 20px 10px;
            padding: 15px 30px;
            background-color: rgb(25, 25, 25);
            color: whitesmoke;
            border: none;
            border-radius: 5px;
            color: whitesmoke;
            font-size: smaller;
            cursor: pointer;
            transition: all .3s ease-in-out;
        }

        .container .desc button:hover {
            transform: scale(1.1);
        }

        .wrapper {
            background-color: rgb(39, 39, 39);
            padding: 40px 40px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
            gap: 15px;
        }

        .icon {
            padding: 35px 60px;
            margin: 5px 5px;
            border: 1px solid rgb(99, 99, 99);
            border-radius: 3px;
            background-color: rgb(33, 33, 33);
            color: whitesmoke;
            text-align: center;
        }

        .icon h2 {
            font-size: x-large;
            color: whitesmoke;
        }

        .icon p {
            font-size: x-small;
            letter-spacing: 1px;
            color: rgb(94, 94, 94);
            margin: 10px 0px;
            z-index: 0;
        }

        @media (max-width:1300px) {
            .wrapper {
                padding: 20px;
            }
        }
    </style>
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
        burger.onclick = function() {
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