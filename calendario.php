<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>AulaPHP</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
        <link href="css/main.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
        <div class="principal">
            <div class="row-fluid">
            <div class="col-md-5">
            <?php
            function linha($semana){
                
                echo "<tr>";
            for($i = 0; $i <= 6; $i++) {
                if (isset($semana[$i])) {
                    echo "<td>{$semana[$i]}</td>";
                } else {
                    echo "<td></td>";
                }
}
                   echo " </tr>";
            }
            ?>
            <?php
            function calendario() {
                $dia  = 1;
                $semana = array();
                while ($dia <= 31) {
                    array_push($semana,$dia);
                    if (count($semana) == 7) {
                        linha($semana);
                        $semana = array();
                    }
                    $dia++;     
            }
            linha($semana);
            }
            ?>
                <div class="well">
            <h1><i class="fa fa-calendar"></i>Calendário PHP</h1>
                </div>
            <table class="table table-bordered" >
                <tr>
                    <th class="alert alert-success">Dom</th>
                    <th class="alert alert-success">Seg</th>
                    <th class="alert alert-success">Ter</th>
                    <th class="alert alert-success">Qua</th>
                    <th class="alert alert-success">Qui</th>
                    <th class="alert alert-success">Sex</th>
                    <th class="alert alert-success">Sab</th>
                </tr>
            <?php calendario(); ?>
           
            </table>
            </div>
            </div>
            </div>
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>    
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        </div>
    </body>
</html>

