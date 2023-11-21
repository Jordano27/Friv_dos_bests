<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friv dos Bests</title>
    <style>
       .container{
            display: flex;
            justify-content: center;
            justify-content: space-between;
            align-items: center;
            margin: 5%;
           
        }
        .container .games{
            border: 1px solid transparent;
            background-color: #C0C0C0;
            border-radius: 10px;
            text-align: center;
            padding: 2%;
            width: 200px;
            height: 200px;
            margin-right: 2%;
        }
        .container .games:hover{
            padding: 3%;
        }
        .container .games a{
           text-decoration: none;
           color: white;
           text-transform: uppercase;
           margin-bottom: 1%;
        }
        .container .games a img {
            border-radius: 10px;
            fill: #F1F1F1;
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        }
        .titulo{
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        
    </style>
</head>
<body>
    <header>
        <h1 class="titulo">FRIV DOS BESTS</h1>
    </header>
    <section>
        <div class="container">
            <div class="games">
                <a href="/friv_dos_bests/piano_online/index.html">Piano Online
                    <img src="imgs/piano.jpeg" alt="">
                </a>
            </div>
            <div class="games">
                <a href="#">Ping Pong - Online
                <img src="imgs/ping_pong.jpeg" alt="">
                </a>
            </div>
            <div class="games">
                <a href="/friv_dos_bests/flappy_bird/index.html">Flappy Bird
                <img src="imgs/flappy.jpeg" alt="">
                </a>
            </div>
            <div class="games">
                <a href="/friv_dos_bests/dino_chrome/index.html">Dino Chrome
                <img src="imgs/dino.jpeg" alt="">
                </a>
            </div>
            <div class="games">
                <a href="#">Xadrez
                    <img src="imgs/xadrez.jpeg" alt="">
                </a>
            </div>
            
        </div>
    </section>
</body>
</html>