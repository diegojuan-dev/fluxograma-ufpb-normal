<?php
    
    include('controle.php');
    
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Matemática UFPB</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.90">
        <link rel="stylesheet" href="../css/estilo_tabelas.css?v=<?php echo $versao; ?>">
        <link rel="shortcut icon" href="../img/math.png">
    </head>
    <body>
           <h1><a href="<?php echo $modo; ?>"><img src="../img/voltar.png" title="Voltar" width="30px" height="30px"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Matemática | Bacharelado</h1>

        <table class="tabela">
            
            <thead>
                <tr>
                    <th>1º PERÍODO</th>
                    <th>2º PERÍODO</th>
                    <th>3º PERÍODO</th>
                    <th>4º PERÍODO</th>
                    <th>5º PERÍODO</th>
                    <th>6º PERÍODO</th>
                    <th>7º PERÍODO</th>
                    <th>8º PERÍODO</th>
                </tr>
            </thead>

            <tbody>
                <tr>        <!--Linha 1-->    
                    <td id="vetor">Cálculo Vetorial e Geometria Analítica<br><br>04 Créditos</td>       <!--C1 \ L1-->
                    <td id="introducaoAlgebraLinear">Introdução à Álgebra Linear<br><br>04 Créditos</td>       <!--C2 \ L1--> 
                    <td id="seriesEDO">Séries e Equações Diferenciais Ordinárias<br><br>04 Créditos</td>       <!--C3 \ L1-->
                    <td id="optativa_qualquer">Optativa de qualquer outro grupo<br><br>04 Créditos</td>       <!--C4 \ L1-->
                    <td id="algebraLinear1">Álgebra Linear I<br><br>04 Créditos</td>       <!--C5 \ L1-->
                    <td id="algebraLinear2">Álgebra Linear II<br><br>04 Créditos</td>       <!--C6 \ L1-->
                    <td id="geometriaDiferencial">Introdução à Geometria Diferencial<br><br>04 Créditos</td>       <!--C7 \ L1-->
                    <td id="introducaoMatematicaAplicada">Introdução à Matemática Aplicada<br><br>04 Créditos</td>       <!--C8 \ L1-->
                    
                </tr>
                    <tr>        <!--Linha 2-->     
                        <td id="calculo1">Cálculo Diferencial e Integral I<br><br>04 Créditos</td>       <!--C1 \ L2-->   
                        <td id="calculo2">Cálculo Diferencial e Integral II<br><br>04 Créditos</td>       <!--C2 \ L2-->
                        <td id="calculo3">Cálculo Diferencial e Integral III<br><br>04 Créditos</td>       <!--C3 \ L2-->
                        <td id="calculoNumerico">Cálculo Numérico<br><br>04 Créditos</td>       <!--C4 \ L2-->
                        <td id="topicos_2">Tópicos Especiais em Matemática II<br><br>04 Créditos</td>       <!--C5 \ L2-->
                        <td id="topologia">Topologia dos Espaços Métricos<br><br>04 Créditos</td>       <!--C6 \ L2-->
                        <td id="edo">Equações Diferenciais Ordinárias<br><br>04 Créditos</td>       <!--C7 \ L2-->
                        <td id="equacaoParcial">Equações Diferenciais Parciais<br><br>04 Créditos</td>       <!--C8 \ L2-->
                        
                    </tr>
                        <tr>        <!--Linha 3-->     
                            <td id="computacao">Inciação à Computação<br><br>04 Créditos</td>       <!--C1 \ L3-->  
                            <td id="fisica1">Física Geral I<br><br>04 Créditos</td>       <!--C2 \ L3-->      
                            <td id="probabilidade">Cálculo das Probabilidades e Estatística I<br><br>04 Créditos</td>       <!--C3 \ L3-->
                            <td id="introducaoAnaliseReal">Introdução à Análise Real<br><br>06 Créditos</td>       <!--C4 \ L3-->
                            <td id="calculoAvancado">Cálculo Avançado<br><br>04 Créditos</td>       <!--C5 \ L3-->
                            <td id="analiseComplexa">Introdução à Análise Complexa<br><br>04 Créditos</td>       <!--C6 \ L3-->
                            <td id="analiseReal1">Análise Real I<br><br>04 Créditos</td>       <!--C7 \ L3-->
                            <td id="tcc">Trabalho de Conclusão de Curso - TCC<br><br>06 Créditos</td>       <!--C8 \ L3-->
                            
                        </tr>
                            <tr>        <!--Linha 4--> 
                                <td id="argumentacao">Argumentação em Matemática<br><br>04 Créditos</td>       <!--C1 \ L4--> 
                                <td id="elementar1">Matemática Elementar I<br><br>04 Créditos</td>       <!--C2 \ L4--> 
                                <td id="elementar2">Matemática Elementar II<br><br>04 Créditos</td>       <!--C3 \ L4--> 
                                <td id="fisica2">Física Geral II<br><br>04 Créditos</td>       <!--C4 \ L4-->
                                <td id="algebra1">Álgebra I&nbsp;</td>       <!--C5 \ L4--> 
                                <td id="topicos_3">Tópicos Especiais em Matemática III<br><br>04 Créditos</td>       <!--C6 \ L4--> 
                                <td id="algebra2">Álgebra II<br><br>04 Créditos</td>       <!--C7 \ L4-->
                                <td id="topicos_5">Tópicos Especiais em Matemática V<br><br>04 Créditos</td>       <!--C8 \ L4-->
                            </tr>
                                    <tr>        <!--Linha 5--> 
                                        <td id="metodologia">Metodologia do Trabalho Científico<br><br>04 Créditos</td>       <!--C1 \ L5-->
                                        <td id="pesquisa">Pesquisa Aplicada à Matemática<br><br>04 Créditos</td>       <!--C2 \ L5-->
                                        <td id="introducaoAlgebra">Introdução à Álgebra<br><br>06 Créditos</td>       <!--C3 \ L5-->
                                        <td id="topicos_1">Tópicos Especiais em Matemática I<br><br>04 Créditos</td>       <!--C4 \ L5-->
                                        <td id="fisica3">Física Geral III<br><br>04 Créditos</td>       <!--C5 \ L5-->
                                        <td id="fisica4">Física Geral IV<br><br>04 Créditos</td>       <!--C6 \ L5-->
                                        <td id="topicos_4">Tópicos Especiais em Matemática IV<br><br>04 Créditos</td>       <!--C7 \ L5-->
                                        <td id="optativa_3">Optativa do grupo III<br><br>04 Créditos</td>       <!--C8 \ L5-->                                   
                                    </tr>
                                            <tr>        <!--Linha 6--> 
                                                <td>&nbsp;</td>       <!--C1 \ L6-->
                                                <td>&nbsp;</td>       <!--C2 \ L6-->
                                                <td>&nbsp;</td>       <!--C3 \ L6-->
                                                <td id="optativa_1">Optativa do grupo I<br><br>04 Créditos</td>       <!--C4 \ L6-->
                                                <td id="optativa_2">Optativa do grupo II<br><br>04 Créditos</td>       <!--C5 \ L6-->
                                                <td id="estagio2">Estágio Supervisionado II<br><br>07 Créditos</td>       <!--C6 \ L6-->
                                                <td id="estagio3">Estágio Supervisionado III<br><br>06 Créditos</td>       <!--C7 \ L6-->
                                                <td>&nbsp;</td>       <!--C8 \ L6-->                                              
                                            </tr>

                                            <tr>        <!--Linha 7--> 
                                                <td>&nbsp;</td>       <!--C1 \ L7-->
                                                <td>&nbsp;</td>       <!--C2 \ L7-->
                                                <td>&nbsp;</td>       <!--C3 \ L7-->
                                                <td>&nbsp;</td>       <!--C4 \ L7-->
                                                <td id="estagio1">Estágio Supervisionado I<br><br>07 Créditos</td>       <!--C5 \ L7-->
                                                <td>&nbsp;</td>       <!--C6 \ L7-->
                                                <td>&nbsp;</td>       <!--C7 \ L7-->
                                                <td>&nbsp;</td>       <!--C8 \ L7-->                                              
                                            </tr>
                                                
            <tbody>
        </table>

        <script type="text/javascript" src="../js/matematica_bacharelado.js?v=<?php echo $versao; ?>"></script>
    </body>
    <!--Autor: Diego Juan-->
    <!--Instagram: @eldiiegojuan | https://www.instagram.com/eldiiegojuan/?hl=pt-br-->
    <!--Direitos reservados-->
</html> 