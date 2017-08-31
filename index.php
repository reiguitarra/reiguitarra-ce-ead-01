<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula 02</title>
    <style>
        table{
            margin-top : 200px;
            background-color : gray;
            text-align : center;
           
            width : 700px ;
        }

        tr{
             height : 40px;
        }

    </style>
</head>
<body>
    <table border = "1" align = "center"> 
        
         <th colspan = "6">Promove nutrição</th>
            <thead>
               
                <th colspan = "6">Meus Pacientes</th>
            </thead>
        
        <thead>
            <th>Nome</th> <th>Peso (Kg)</th> <th>Altura(m) </th> <th>IMC</th> <th>Data de Nascimento</th><th>Idade</th>

        </thead>
        <tbody>
        <tr>
            <td>John Petrucci</td> <td><?php $peso = 100; echo $peso; ?></td> <td><?php $altura = 2; echo  $altura ?> </td> <td>
                <?php  $imc = $peso / pow($altura,2);  
                echo number_format($imc,2,'.','');  ?>
                </td> <td><?php $data = '01/01/1980'; echo $data;?></td><td>
                <?php
                        $hoje = date('d/m/Y');
                        $niver = $data;
                        $hoje = explode('/',$hoje);
                        $niver = explode('/',$niver);
                        $dife = mktime(0,0,0,$hoje[0],$hoje[1],$hoje[2]) - mktime(0,0,0,$niver[0],$niver[1],$niver[2]);
                        echo floor(((($dife /60)/60)/24)/365.50);
                        
                    ?>

</td>
            
        </tr>
        <tr>
            <td>John Myung</td> <td><?php $peso = 80; echo $peso; ?></td> <td><?php $altura = 1.72; echo  $altura ?> </td> <td>
                <?php  $imc = $peso / pow($altura,2);
             echo number_format($imc,2,'.','');  ?></td> <td><?php $data ='28/02/1990'; echo $data;?></td><td>

                 <?php
                        $hoje = date('d/m/Y');
                        $niver = $data;
                        $hoje = explode('/',$hoje);
                        $niver = explode('/',$niver);
                        $dife = mktime(0,0,0,$hoje[0],$hoje[1],$hoje[2]) - mktime(0,0,0,$niver[0],$niver[1],$niver[2]);
                        echo floor(((($dife /60)/60)/24)/365.50);
                        
                    ?>

             </td>
            
        </tr>
        <tr>
            <td>James Lambrie</td> <td><?php $peso = 54; echo $peso; ?></td> <td><?php $altura = 1.64; echo  $altura ?> </td> <td>
                <?php  $imc = $peso / pow($altura,2);
            echo number_format($imc,2,'.','');  ?></td> <td><?php $data = '10/09/1985';echo $data;?></td><td>

                 <?php
                        $hoje = date('d/m/Y');
                        $niver = $data;
                        $hoje = explode('/',$hoje);
                        $niver = explode('/',$niver);
                        $dife = mktime(0,0,0,$hoje[0],$hoje[1],$hoje[2]) - mktime(0,0,0,$niver[0],$niver[1],$niver[2]);
                        echo floor(((($dife /60)/60)/24)/365.50);
                        
                    ?>

            </td>
            
        </tr>
        <tr>
            <td>Jordan Rudess</td> <td><?php $peso = 85; echo $peso; ?></td> <td><?php $altura = 1.73; echo  $altura ?> </td> <td>
                <?php  $imc = $peso / pow($altura,2);
             echo number_format(
                 $imc,2,'.','');  ?></td> <td><?php $data = '04/09/1989';echo $data;?></td><td>
                     <?php
                        $hoje = date('d/m/Y');
                        $niver = $data;
                        $hoje = explode('/',$hoje);
                        $niver = explode('/',$niver);
                        $dife = mktime(0,0,0,$hoje[0],$hoje[1],$hoje[2]) - mktime(0,0,0,$niver[0],$niver[1],$niver[2]);
                        echo floor(((($dife /60)/60)/24)/365.50);
                        
                    ?>


                 </td>
            
        </tr>
        <tr>
            <td>Mike Mangini</td> <td><?php $peso = 46; echo $peso; ?></td> <td><?php $altura = 1.55; echo  $altura ?> </td> <td>
                <?php  $imc = $peso / pow($altura,2);
                echo number_format($imc,2,'.','');  ?></td> <td><?php $data = '31/12/1978';echo $data; ?></td><td>
                    <?php
                        $hoje = date('d/m/Y');
                        $niver = $data;
                        $hoje = explode('/',$hoje);
                        $niver = explode('/',$niver);
                        $dife = mktime(0,0,0,$hoje[0],$hoje[1],$hoje[2]) - mktime(0,0,0,$niver[0],$niver[1],$niver[2]);
                        echo floor(((($dife /60)/60)/24)/365.50);
                        
                    ?>
                    
                </td>
            
        </tr>
    </tbody>
    </table>
</body>
</html>