<?php
    
    include('./php/controle.php');
    
?>

<!DOCTYPE html>

<html>
    <head>
        <title>FluxogramaFácil</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/index.css?v=<?php echo $versao; ?>">
        <link rel="shortcut icon" href="./img/fluxograma.png">
    </head>
    <body>
           
      <main>
        <div class="container">
            <div class="painel">   
                <h1>FluxogramaFácil - UFPB</h1>
                <h2>(Recomendável o uso do Google Chrome, Mozilla Firefox ou Microsoft EDGE.)</h1>
                <h3>Para uma melhor experiência, utilize no modo paisagem.</h2>
             <div class="conteudo_painel">  
                <form action="" method="POST">
                            <select onChange="AbrirSecao(this.value)" class="campoTexto" name="curso" required>
                                <option value="">Escolha um curso</option>
                                <option value="./php/hotelaria_bacharelado.php">Hotelaria - Bacharelado</option>                                
                                <option value="./php/matematica_licenciatura_noturno.php">Matemática - Licenciatura - Noturno</option>
                                <option value="./php/matematica_licenciatura_diurno.php">Matemática - Licenciatura - Diurno</option>
                                <option value="./php/matematica_bacharelado.php">Matemática - Bacharelado</option>
                                <option value="./php/turismo_bacharelado_noturno.php">Turismo - Bacharelado - Noturno</option>
                            </select>                       
                </form>
                <footer>
                    <a href="https://instagram.com/eldiiegojuan" target="_blank">
                        <img title="desenvolvedor" src="./img/developer.png" width="50" height="50">
                        </a>       
                </footer> 
             </div>   
            </div>    
        </div>   
            
     </main> 

     
    <script type="text/javascript" src="./js/abrir_secao.js?v=<?php echo $versao; ?>"></script>
      
    </body>
    <!--Autor: Diego Juan-->
    <!--Instagram: @eldiiegojuan | https://www.instagram.com/eldiiegojuan/?hl=pt-br-->
    <!--Direitos reservados-->
</html>