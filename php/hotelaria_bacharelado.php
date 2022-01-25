<?php
     
     include('controle.php');
    
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Hotelaria UFPB</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/estilo_tabelas.css?v=<?php echo $versao; ?>">
        <link rel="shortcut icon" href="">
    </head>
    <body>
        <h1><a href="<?php echo $modo; ?>"><img src="../img/voltar.png" title="Voltar" width="30px" height="30px"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hotelaria | Bacharelado</h1>

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
                </tr>
            </thead>

            <tbody>
                <tr>        <!--Linha 1-->    
                    <td title="Conteúdo Básico Profissional" id="introducao_turismo">Introdução ao Turismo e à Hospitalidade<br><br>GDTH0029</td>       <!--C1 \ L1-->
                    <td title="Conteúdo Básico Profissional" id="reserva">Reservas e Recepção<br><br>GDTH0031</td>       <!--C2 \ L1--> 
                    <td title="Conteúdo Básico Profissional" id="governanca">Governança e Lavanderia<br><br>GDTH0032</td>       <!--C3 \ L1-->
                    <td title="Conteúdo Básico Profissional" id="hotelaria">Hotelaria Hospitalar<br><br>GDTH0041</td>       <!--C4 \ L1-->
                    <td title="Conteúdo Básico Profissional" id="etica">Ética Profissional e Organizacional<br><br>GDTH0044</td>       <!--C5 \ L1-->
                    <td title="Conteúdo Básico Profissional" id="planejamento_manutencao">Planejamento e Manutenção de Hotéis<br><br>GDTH0047</td>       <!--C6 \ L1-->
                    <td id="estagio">Estágio Supervisionado<br><br>GDTH0035</td>       <!--C7 \ L1-->
                </tr>
                    <tr>        <!--Linha 2-->     
                        <td title="Conteúdo Básico Profissional" id="introducao_alimentos">Introdução à Alimentos em Hotelaria<br><br>DGAS0055</td>       <!--C1 \ L2-->   
                        <td title="Conteúdo Básico Profissional" id="tecnologia">Tecnologia Culinária<br><br>DGAS0056</td>       <!--C2 \ L2-->
                        <td title="Conteúdo Básico Profissional" id="gestao_ab">Gestão em A&B<br><br>GDGAS0058</td>       <!--C3 \ L2-->
                        <td title="Conteúdo Básico Profissional" id="bebidas">Bebidas e Enologia<br><br>GDGAS0057</td>       <!--C4 \ L2-->
                        <td title="Conteúdo Básico Profissional" id="gestao_ambiental">Gestão Ambiental em Meios de Hospedagem<br><br>GDTH0045</td>       <!--C5 \ L2-->
                        <td title="Conteúdo Básico Profissional" id="gestao_qualidade">Gestão de Qualidade dos Serviçoes em Hotelaria<br><br>GDTH0048</td>       <!--C6 \ L2-->
                        <td title="Conteúdo Complementar Obrigatório" id="tcc_2">Trabalho de Conclusão de Curso II - TCC II<br><br>GDTH0039</td>       <!--C7 \ L2-->
                    </tr>
                        <tr>        <!--Linha 3-->     
                            <td title="Conteúdo Básico Geral" id="fundamento">Fundamentos de Administração em Hospitalidade<br><br>GDTH0029</td>       <!--C1 \ L3-->  
                            <td title="Conteúdo Básico Geral" id="economia">Economia das Empresas<br><br>GPSAE0105</td>       <!--C2 \ L3-->      
                            <td title="Conteúdo Básico Profissional" id="planejamento_gestao">Planejamento e Gestão de Pessoas em Hospitalidade<br><br>1406366</td>       <!--C3 \ L3-->
                            <td title="Conteúdo Básico Profissional" id="mkt_hotelaria">Marketing Aplicado à Hotelaria<br><br>GDTH0042</td>       <!--C4 \ L3-->
                            <td title="Conteúdo Básico Profissional" id="gestao_vendas">Gestão de Vendas em Hotelaria<br><br>GDTH0046</td>       <!--C5 \ L3-->
                            <td title="Conteúdo Básico Profissional" id="planejamento_organizacao">Planejamento e Organização de Eventos<br><br>GDTH0049</td>       <!--C6 \ L3-->
                            <td id="null">&nbsp;</td>       <!--C7 \ L3-->
                        </tr>
                            <tr>        <!--Linha 5--> 
                                <td title="Conteúdo Básico Geral" id="antropologia">Antropologia Cultural<br><br>1401104</td>       <!--C1 \ L4--> 
                                <td title="Conteúdo Básico Profissional" id="ingles">Inglês Instrumental<br><br>1404114</td>       <!--C2 \ L4--> 
                                <td title="Conteúdo Básico Profissional" id="estatistica">Estatística para Ciências Humanas e Sociais I<br><br>GDEST0102</td>       <!--C3 \ L4--> 
                                <td title="Conteúdo Básico Profissional" id="lazer">Lazer e Entretenimento<br><br>GDTH0043</td>       <!--C4 \ L4-->
                                <td title="Conteúdo Básico Profissional" id="estrategia">Estratégia Empresarial<br><br>GDTH0033</td>       <!--C5 \ L4--> 
                                <td title="Conteúdo Básico Profissional" id="empreendedorismo">Empreendedorismo no Setor de Hospitalidade<br><br>GDTH0034</td>       <!--C6 \ L4--> 
                                <td>&nbsp;</td>       <!--C7 \ L4-->
                            </tr>
                                    <tr>        <!--Linha 5--> 
                                        <td title="Conteúdo Complementar Obrigatório" id="metodologia">Metodologia do Trabalho Científico para Hospitalidade<br><br>GDTH0036</td>       <!--C1 \ L5-->
                                        <td title="Conteúdo Complementar Obrigatório" id="matematica">Matemática Financeira<br><br>1201154</td>       <!--C2 \ L5-->
                                        <td title="Conteúdo Complementar Obrigatório" id="pesquisa">Pesquisa Aplicada ao Turismo e à Hotelaria<br><br>GDTH0040</td>       <!--C3 \ L5-->
                                        <td title="Conteúdo Complementar Obrigatório" id="contabilidade">Contabilidade Geral e de Custos Aplicada a Empresas de Hospitalidade<br><br></td>       <!--C4 \ L5-->
                                        <td title="Complementar Optativo." id="optativa_1">Optativa<br><br></td>       <!--C5 \ L5-->
                                        <td title="Conteúdo Complementar Obrigatório" id="tcc_1">Trabalho de Conclusão de Curso I - TCC I<br><br>GDTH0038</td>       <!--C6 \ L5-->
                                        <td>&nbsp;</td>       <!--C7 \ L5-->
                                    </tr>
                                            <tr>        <!--Linha 6--> 
                                                <td id="null">&nbsp;</td>       <!--C1 \ L6-->
                                                <td id="null">&nbsp;</td>       <!--C2 \ L6-->
                                                <td title="Complementar Optativo." id="optativa_2">Optativa<br><br></td>       <!--C3 \ L6-->
                                                <td title="Complementar Optativo." id="optativa_3">Optativa<br><br></td>       <!--C4 \ L6-->
                                                <td>&nbsp;</td>       <!--C5 \ L6-->
                                                <td>&nbsp;</td>       <!--C6 \ L6-->
                                                <td>&nbsp;</td>       <!--C7 \ L6-->
                                            </tr>
                                                
            <tbody>
        </table>
        <script type="text/javascript" src="../js/hotelaria_bacharelado.js?v=<?php echo $versao; ?>"></script>
    </body>
    <!--Autor: Diego Juan-->
    <!--Instagram: @eldiiegojuan | https://www.instagram.com/eldiiegojuan/?hl=pt-br-->
    <!--Direitos reservados-->
</html>