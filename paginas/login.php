<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <div class="login" data-aos="fade" >

        <h1 data-aos="fade-up">Login</h1>

        <form method="post" action="index.php">
            <div class="form1">
            <p data-aos="fade-up" data-aos-duration="500ms">Digite Seu Imail:</p>
            <input type="text" name="nome" id="nome" required size="25"  title="Digite seu nome Completo" data-aos="fade-up" data-aos-duration="1000ms">
            </div>
</br>
            <div class="form1">
            <p data-aos="fade-up" data-aos-duration="500ms" class="margin0">Digite Sua Senha: </p>
            <input type="text" name="nome" id="nome"  required size="25" title="Digite seu nome Completo" data-aos="fade-up" data-aos-duration="1000ms">
            </div>
</br>
            <div class="botao-flex">
                <button type="submit" class="botao" data-aos="fade-up" data-aos-duration="1500ms">Confirmar</button>
            </div>
         </form>
            

             

    </div>
    
</body>
</html>