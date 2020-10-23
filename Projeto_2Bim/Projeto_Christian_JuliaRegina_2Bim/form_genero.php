<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Gênero</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>  
    <?php
        include "cabecalho.php";
        if(empty($_POST))
        {
            echo'<div class="login-form col-xs-10 offset-xs-1 
            col-sm-6 offset-sm-3 col-md-4 offset-md-4">
            <header>
			    <h1 class="text-center" class="img-fluid"></h1>
			    <h2 class="text-center">Cadastre o <b>gênero</b> da música</h2>
		    </header>
            <form action="form_genero.php" method="post">
            <div class="form-group">
				<div class="input-group">
                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-music-note-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                        <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/>
                        <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
                        <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                    <input type="text" name="genero" placeholder="Nome do gênero...">
                </div>
            </div>
            <footer>
				<div class="float-left">
                    <button type="submit" class="btn btn-primary">Cadastrar Gênero</button>
                </div>
            </footer>
            </form>
            </div>';
        }
        else
        {
            include "inserir_genero.php";
        }
    ?>
    <script src="bootstrap.min.js"></script>
</body>
</html>