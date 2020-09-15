<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <script src="jquery-3.5.1.min.js"></script>
        <title>Exercício Compartilhado</title>
    </head>
    <style>
        #quadrado{
                border-style:solid;
                border-width:1px;
                width:500px;
                height:500px;
                position: absolute;
        }
        #quadrado2{
                border-style:solid;
                border-width:1px;
                width:500px;
                height:500px;
                
                float: right;
        }
        
    </style>

    <script>
        $(document).ready(function(){

            $("#campo").keyup(function(){
                $("#quadrado2").html($("#campo").val());
            });

            $("#negrito").click(function(){
                if($("#quadrado2").css("font-weight")==700){
                    $("#quadrado2").css("font-weight", "normal");
                }else{
                    $("#quadrado2").css("font-weight", "bold");
                }
            });

            $("#italico").click(function(){
                if($("#quadrado2").css("font-style")=="italic"){
                    $("#quadrado2").css("font-style", "normal");
                }else{
                    $("#quadrado2").css("font-style", "italic");
                }
            });

            $("#sublinhado").click(function(){
                if($("#quadrado2").css("text-decoration")=="none solid rgb(0, 0, 0)"){
                    $("#quadrado2").css("text-decoration", "underline");
                }else{
                    $("#quadrado2").css("text-decoration", "none");
                }
            });

            $("#Salvar").click(function(){
                var negrito=$("#quadrado2").css("font-weight"), italico=$("#quadrado2").css("font-style"), sublinhado=$("#quadrado2").css("text-decoration");
                var nome_pagina=$("input[name='nome_arquivo']").val(), conteudo_pagina="<p style='font-weight:"+negrito+"; font-style:"+italico+"; text-decoration:"+sublinhado+"'>"+$("#quadrado2").html()+"</p>";
                $.get("salvar.php", {"nome_pag": nome_pagina, "conteudo_pag":conteudo_pagina}, function(msg){
                    if(msg=="Arquivo criado com sucesso."){
                        $("#mensagem").html(msg);
                        $("#links").html("<a target='_blank' href=\"criacoes/"+nome_pagina+".html\">"+nome_pagina+".html | </a>"+$("#links").html());
                    }


                });
            });
                
        });
            
    </script>

    <body>
        
        <h3> Exercicio Compartilhado</h3>
		
        <img id="negrito" src="negrito.png" />
        <img id="italico" src="italico.png"/>
        <img id="sublinhado" src="sublinhado.png"/>

        <input type="text" name="nome_arquivo" placeholder="Nome do Arquivo..." />
        <button id="Salvar">Salvar</button>

        <div id="mensagem"></div>
        <div id="links"></div>
        
        <div id="quadrado"><textarea id = "campo" name = "campo" placeholder="Digite aqui" ></textarea></div>
		
        <div id="quadrado2"></div>
        
        
    </body>
</html>
