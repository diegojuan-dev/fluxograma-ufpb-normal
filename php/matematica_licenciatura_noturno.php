<?php
    
    include('controle.php');
    
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Matemática UFPB</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/estilo_tabelas.css?v=<?php echo $versao; ?>">
        <link rel="shortcut icon" href="">
    </head>
    <body>  
           <h1><a href="<?php echo $modo; ?>"><img src="../img/voltar.png" title="Voltar" width="30px" height="30px"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Matemática | Licenciatura | Noturno</h1>
            
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
                    <th>9º PERÍODO</th>
                </tr>
            </thead>

            <tbody>
                <tr>    
                    <td id="vetor">Cálculo Vetorial e Geometria Analítica<br><br>04 Créditos</td>    <!--C1 \ L1-->
                    <td id="algebra">Introdução à Álgebra Linear<br><br>04 Créditos</td>             <!--C2 \ L1--> 
                    <td id="edo">Séries e Equações Diferenciais Ordinárias<br><br>04 Créditos</td>            <!--C3 \ L1-->
                    <td id="fundamentos_historicos">Fundamentos Sócio-Históricos da Educação<br><br>04 Créditos</td>             <!--C4 \ L1-->
                    <td id="estagio1">Estágio Supervisionado I<br><br>07 Créditos</td>                             <!--C5 \ L1-->
                    <td id="estagio2">Estágio Supervisionado II<br><br>07 Créditos</td>                            <!--C6 \ L1-->
                    <td id="estagio3">Estágio Supervisionado III<br><br>07 Créditos</td>                           <!--C7 \ L1-->
                    <td id="estagio4">Estágio Supervisionado IV<br><br>06 Créditos</td>                            <!--C8 \ L1-->
                    <td id="historia">História da Matemática<br><br>06 Créditos</td>                               <!--C9 \ L1-->
                </tr>
                    <tr>    
                        <td id="calculo1">Cálculo Diferencial e Integral I<br><br>04 Créditos</td>      <!--C1 \ L2-->   
                        <td id="calculo2">Cálculo Diferencial e Integral II<br><br>04 Créditos</td>     <!--C2 \ L2-->
                        <td id="calculo3">Cálculo Diferencial e Integral III<br><br>04 Créditos</td>    <!--C3 \ L2-->
                        <td id="fundamentos_educacao">Fundamentos Antropofilisóficos da Educação<br><br>04 Créditos</td>           <!--C4 \ L2-->
                        <td id="real">Introdução à Análise Real<br><br>06 Créditos</td>                            <!--C5 \ L2-->
                        <td id="fund_mat">Fundamentos da Matemática<br><br>05 Créditos</td>       <!--C6 \ L2-->
                        <td id="politica">Política e Gestão da Educação<br><br>04 Créditos</td>      <!--C7 \ L2-->
                        <td id="funcao">Funções de um Variável Complexa<br><br>04 Créditos</td>      <!--C8 \ L2-->
                        <td id="optativa_4">Optativa<br><br>04 Créditos</td>     <!--C9 \ L2-->
                    </tr>
                        <tr>    
                            <td id="argumentacao">Argumentação em Matemática<br><br>04 Créditos</td>       <!--C1 \ L3-->  
                            <td id="elementar1">Matemática Elementar I<br><br>04 Créditos</td>           <!--C2 \ L3-->      
                            <td id="algebra1">Introdução à Álgebra<br><br>06 Créditos</td>             <!--C3 \ L3-->
                            <td id="fundamentos_psicologicos">Fundamentos Psicológicos da Educação<br><br>04 Créditos</td>     <!--C4 \ L3-->
                            <td id="matematica_basico_1">Matemática para o Ensino Básico I<br><br>06 Créditos</td>        <!--C5 \ L3-->
                            <td id="matematica_basico_2">Matemática para o Ensino Básico II<br><br>05 Créditos</td>       <!--C6 \ L3-->
                            <td id="tratamento_informacao">Tratamento da Informação<br><br>06 Créditos</td>      <!--C7 \ L3-->
                            <td id="elementar2">Matemática Elementar II<br><br>04 Créditos</td>      <!--C8 \ L3-->
                            <td id="tcc">Trabalho de Conclusão de Curso - TCC<br><br>08 Créditos</td>     <!--C9 \ L3-->
                        </tr>
                            <tr>    <!--LINHA 4-->
                                <td id="computacao">Iniciação à Computação<br><br>04 Créditos</td>
                                <td id="fisica">Física Geral I<br><br>04 Créditos</td>
                                <td id="probabilidade">Cálculo das Probabilidades e Estatística I<br><br>04 Créditos</td>
                                <td id="topicos_1">Tópicos Especiais em Matemática I<br><br>04 Créditos</td>
                                <td id="topicos_2">Tópicos Especiais em Matemática II<br><br>04 Créditos</td>
                                <td id="topicos_3">Tópicos Especiais em Matemática III<br><br>04 Créditos</td>
                                <td id="topicos_4">Tópicos Especiais em Matemática IV<br><br>04 Créditos</td>
                                <td id="topicos_5">Tópicos Especiais em Matemática V<br><br>04 Créditos</td>
                                <td>&nbsp;</td>
                            </tr>
                                    <tr>    <!--LINHA 5-->
                                        <td id="metodologia">Metodologia do Trabalho Científico<br><br>03 Créditos</td>
                                        <td id="pesquisa">Pesquisa Aplicada à Matemática<br><br>04 Créditos</td>
                                        <td>&nbsp;</td>
                                        <td id="didatica">Didática<br><br>04 Créditos</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td id="optativa_2">Optativa<br><br>03 Créditos</td>
                                        <td id="optativa_3">Optativa<br><br>04 Créditos</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                            <tr>    <!--LINHA 6-->
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td id="optativa_1">Optativa<br><br>04 Créditos</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                                
            <tbody>
        </table>
        <script type="text/javascript" src="../js/matematica_licenciatura_noturno.js?v=<?php echo $versao; ?>"></script>
    </body>
    <!--Autor: Diego Juan-->
    <!--Instagram: @eldiiegojuan | https://www.instagram.com/eldiiegojuan/?hl=pt-br-->
    <!--Direitos reservados-->
</html>