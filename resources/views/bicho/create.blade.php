<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style/style.css">
    <title>Dashboard</title>
</head>
<body>

    <navbar id="navbar">
        <div class="navbar-container">
            <img src="/img/logo-BRAZSINO.png" alt="" class="logo">
            <ul class="navbar-intems">
                <li class="nav-item">Ajuda</li>
            </ul>
        </div>
    </navbar>

    <div id="InsertPet">
        <div class="values"><h1>Insira um novo jogo:</h1>
            <form action="/bicho" method="POST">
                @csrf 
            <p>Nome do Bicho:</p>
            <input class= text-input type="text" id="name" name="name">
            <p>Numero do Bicho:</p>
            <input input class= text-input type="number" id="number" name="number">
            <p>Foto do Bicho:</p>
            <input type="file" id="image" name="image" class="form-control-file" id="image">
            <br>
            <br>
            <input input class= botton-input type="submit" value="Cadastrar">
    </form>
    </div>
</div>    
</body>
</html>




