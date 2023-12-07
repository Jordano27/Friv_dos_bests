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
            width: 100%;
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
            height: 70%;
            margin-top: 15%;
        }
        .titulo{
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .logout{
            text-decoration: none;
            text-transform: uppercase;
            border: 1px solid blue;
            border-radius: 10px;
            padding: 1% 2%;
            color: blue;
            display: flex;
            justify-content: center;
            width: 5%;
            margin-left: 5%;
        }
        .logout:hover{
            background: blue;
            color: #fff;
           
        }
        
    </style>
</head>
<body>
    <header>
        <h1 class="titulo">FRIV DOS BESTS</h1>
    </header>
    <section>
        <a href="logout.php" class="logout">sair</a>
        <div class="container">
            <div class="games">
                <a href="/friv_dos_bests/piano_online/index.html">Piano Online
                    <img src="imgs/piano.jpeg" alt="">
                </a>
            </div>
            <div class="games">
                <a href="/friv_dos_bests/Ping_Pong/index.html">Ping Pong - Online
                <img src="imgs/ping_pong.jpeg" alt="">
                </a>
            </div>
            <div class="games">
                <a href="/friv_dos_bests/jogoda_velha/old.html">Jogo da Velha
                <img src="imgs/jogo_velha.jpeg" alt="">
                </a>
            </div>
            <div class="games">
                <a href="/friv_dos_bests/paint/index.html">Paint
                <img src="imgs/dino.jpeg" alt="">
                </a>
            </div>
          <!--  <div class="games">
                <a href="#">Xadrez
                    <img src="imgs/xadrez.jpeg" alt="">
                </a>
            </div>-->
            
        </div>
    </section>
</body>
</html>