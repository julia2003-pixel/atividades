<?php

function cabecalho(){
    $alt = $GLOBALS["alt"];
    $menu = $GLOBALS["menu"];
    echo "<!DOCTYPE html>
    <html>
        <head>
            <meta charset='utf-8' />
            <script src='js/jquery-3.5.1.min.js'></script>
            <link href='bootstrap/css/bootstrap.min.css' rel='stylesheet' />            
            <link href='css/main.css' rel='stylesheet' />            
            <script src='bootstrap/js/bootstrap.min.js'></script>
        </head>
        <body>                
            <nav class='navbar navbar-expand-md bg-primary navbar-dark'>
            <a href='index.php' class='navbar-brand logotipo'>
                <img src='img/restaurante.png' class='rounded' alt='$alt' />
            </a>

            <!-- botão que aparece quando a tela for pequena -->
            <button class='navbar-toggler' type='button'
                data-toggle='collapse' data-target='#menu'>
                <span class='navbar-toggler-icon'></span>
            </button>

            <div class='collapse navbar-collapse' id='menu'>
                <ul class='navbar-nav'>
                      <li role='presentation' class='dropdown'>
                        <a class='dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>
                          Cadastrar <span class='caret'></span>
                        </a>
                        <ul class='dropdown-menu'>";                        
                    foreach($menu as $i=>$l){
                        echo "<li class='nav-item'>
                                <a class='menu' href='form_$i.php'>$l</a>
                            </li>";
                    }  
                    echo "</ul>
                    </li>
                    <li role='presentation' class='dropdown'>
                    <a class='dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>
                      Listar <span class='caret'></span>
                    </a>
                    <ul class='dropdown-menu'>";                        
                foreach($menu as $i=>$l){
                    echo "<li class='nav-item'>
                            <a class='menu' href='lista_$i.php'>$l</a>
                        </li>";
                }  
                echo "
                        </ul>
                    </li>";

            echo "</ul>  
                    
            </div>        
        </nav>
        <main role='main' class='container'>";
}
?>