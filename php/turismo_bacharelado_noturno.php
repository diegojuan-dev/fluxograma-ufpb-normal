<?php
     
     include('controle.php');
    
?>

<!DOCTYPE html>

<html>
    <head>  
        <title>Turismo UFPB</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/estilo_tabelas.css?v=<?php echo $versao; ?>">
        <link rel="shortcut icon" href="">
    </head>
    <body>
           <h1><a href="<?php echo $modo; ?>"><img src="../img/voltar.png" title="Voltar" width="30px" height="30px"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Turismo | Bacharelado | Noturno</h1>
    
        
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
                    <td id="introducao_turismo">Introdução ao Estudo do Turismo<br><br>1406358</td>       <!--C1 \ L1-->
                    <td id="redacao">Redação e Expressão Oral<br><br>1403172</td>       <!--C2 \ L1--> 
                    <td id="gestao_hospedagem">Gestão de Meios de Hospedagem<br><br>1406364</td>       <!--C3 \ L1-->
                    <td id="planejamento_hospitalidade">Planejamento e Gestão de Pessoas Hospitalidade<br><br>1406366</td>       <!--C4 \ L1-->
                    <td id="planejamento_turismo">Planejamento Estratégico do Turismo<br><br>1406361</td>       <!--C5 \ L1-->
                    <td id="empreendedorismo">Empreendedorismo Aplicado ao Turismo<br><br>1406371</td>       <!--C6 \ L1-->
                    <td title="Complementar Obrigatório." id="planejamento_eventos">Planejamento e Organização de Eventos<br><br>1406373</td>       <!--C7 \ L1-->
                    <td title="Complementar Obrigatório." id="estudo_turistico">Estudos Turísticos Brasileiros<br><br>1406374</td>       <!--C8 \ L1-->
                </tr>
                    <tr>        <!--Linha 2-->     
                        <td title="Complementar Obrigatório." id="metodologia">Metodologia do Trabalho Científico<br><br>1205003</td>       <!--C1 \ L2-->   
                        <td id="teoria">Teoria e Técnica do Turismo<br><br>1406357</td>       <!--C2 \ L2-->
                        <td title="Complementar Obrigatório." id="contabilidade">Contabilidade de Hotelaria e Restaurantes<br><br>1202271</td>       <!--C3 \ L2-->
                        <td id="base">Bases Ecológicas para o Turismo<br><br>1106139</td>       <!--C4 \ L2-->
                        <td id="pesquisa">Pesquisa Aplicada ao Turismo<br><br>1406362</td>       <!--C5 \ L2-->
                        <td id="eco">Ecoturismo<br><br>1106140</td>       <!--C6 \ L2-->
                        <td id="agencia">Agências e Operadoras em Turismo<br><br>1406370</td>       <!--C7 \ L2-->
                        <td id="tcc">Trabalho de Conclusão de Curso - TCC<br><br>1406399</td>       <!--C8 \ L2-->
                    </tr>
                        <tr>        <!--Linha 3-->     
                            <td id="introducao_adm">Introdução a Administração<br><br>1204140</td>       <!--C1 \ L3-->  
                            <td id="hospitalidade">Hospitalidade<br><br>1406355</td>       <!--C2 \ L3-->      
                            <td id="gestao_hospitalidade">Gestão de A&B em Hospitalidade<br><br>1406365</td>       <!--C3 \ L3-->
                            <td id="mkt_turistico">Marketing Turístico<br><br>1406356</td>       <!--C4 \ L3-->
                            <td id="mkt_empresa">Marketing de Empresas Turísticas<br><br>1406367</td>       <!--C5 \ L3-->
                            <td id="mkt_promo">Marketing Promocional Aplicado ao Turismo<br><br>1406368</td>       <!--C6 \ L3-->
                            <td id="comunicacao">Comunicação, Informação e Turismo<br><br>1406360</td>       <!--C7 \ L3-->
                            <td title="Complementar Optativo." id="optativa_1">Optativa<br><br></td>       <!--C8 \ L3-->
                        </tr>
                            <tr>        <!--Linha 5--> 
                                <td id="lingua">Inglês(1404409) ou Francês(1404408) ou Espanhol(1404410)<br><br>(Aplicado ao Turismo)</td>       <!--C1 \ L4--> 
                                <td title="Complementar Optativo." id="optativa_2">Optativa<br><br></td>       <!--C2 \ L4--> 
                                <td id="sociologia">Sociologia do Turismo<br><br>1406353</td>       <!--C3 \ L4--> 
                                <td id="sistema">Sistemas de Transporte e Turismo<br><br>1406369</td>       <!--C4 \ L4-->
                                <td title="Complementar Obrigatório." id="economia_turismo">Economia do Turismo<br><br>1201300</td>       <!--C5 \ L4--> 
                                <td title="Complementar Obrigatório." id="turismo_espaco">Turismo e Espaço Turístico<br><br>1406363</td>       <!--C6 \ L4--> 
                                <td id="legislacao">Legislação e Ética do Turismo<br><br>1406359</td>       <!--C7 \ L4-->
                                <td title="Complementar Optativo." id="optativa_3">Optativa<br><br></td>       <!--C8 \ L4-->
                            </tr>
                                    <tr>        <!--Linha 5--> 
                                        <td id="turismo_antropologia">Turismo, Antropologia e Cultura<br><br>1406354</td>       <!--C1 \ L5-->
                                        <td id="geografia_turismo">Geografia e Turismo<br><br>1102247</td>       <!--C2 \ L5-->
                                        <td id="geografia_ambiente">Geografia e Meio Ambiente<br><br>1102248</td>       <!--C3 \ L5-->
                                        <td title="Complementar Obrigatório." id="turismo_politica">Turismo e Políticas Públicas<br><br>1406372</td>       <!--C4 \ L5-->
                                        <td id="estatistica">Estatística III<br><br>1108114</td>       <!--C5 \ L5-->
                                        <td id="turismo_patrimonio">Turismo e Patrimônio Histórico Artístico e Cultural<br><br>1408343</td>       <!--C6 \ L5-->
                                        <td>&nbsp;</td>       <!--C7 \ L5-->
                                        <td>&nbsp;</td>       <!--C8 \ L5-->
                                    </tr>
                                                
            <tbody>
        </table>
        <script type="text/javascript" src="../js/turismo_bacharelado_noturno.js?v=<?php echo $versao; ?>"></script>
    </body>
    <!--Autor: Diego Juan-->
    <!--Instagram: @eldiiegojuan | https://www.instagram.com/eldiiegojuan/?hl=pt-br-->
    <!--Direitos reservados-->
</html>