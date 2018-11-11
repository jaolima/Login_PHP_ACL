<!DOCTYPE html>
<html lang="pt-br" >

<head>
    <meta charset="UTF-8">
    <title>Login Siscvet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>

    <link rel="stylesheet" href="css/style.css">


</head>

<body>

<div class="cont">
    <form action="ACL.php" method="POST" class="demo">
        <div class="login">
                <div class="login__form">
<!--Email-->
                    <div class="login__row">
                        <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                        </svg>
                        <input type="text" name="email" id="email" class="login__input name" placeholder="E-mail"/>
                    </div>
<!--Senha-->
                    <div class="login__row">
                        <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                        </svg>
                        <input type="password" name="password" id="password" class="login__input pass" placeholder="Senha"/>
                    </div>

                        <input type="submit" class="login__submit"/>

                    <p class="login__signup">Não possui conta? &nbsp;<a>Cadastrar</a></p>
                </div>
        </div>
    </form>
</div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/index.js"></script>

</body>

</html>
