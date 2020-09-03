<?php
define('TITLE', "Membres");
include '../assets/layouts/header.php';

check_admin();


?>
<?php  
 $connect = mysqli_connect("localhost", "broadseg", "1122334499", "broadseg");  
 $query = "SELECT direction, count(*) as number FROM log GROUP BY direction";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <style>


</style>
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Dashboard</title>  
           <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">    
      
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['direction', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["direction"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Students Access',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body class="bg-white">  
           <br /><br />  
                      <br /><br />  
                     

           <div style="width:1500px;">  
                <h3 class="text-center text-secondary">Dashboard</h3>  
                <br />  
                  
           </div> 
           <div class=" float-left" id="piechart" style="width: 600px; height: 500px;"></div>  

           <div class="container">

        <div class="row">
            <div class="col-sm-12">
            <div class="table-responsive">        
                <table id="tablaUsuarios" class=" float-right table table-striped table-bordered table-condensed" style="width:100%" >
                    <thead class="text-center">
                        <tr>
                            <th>username</th>
                            <th>Duration</th>                                
                            <th>Last in Time</th>  
                            <th>Is in</th>
                           
                        </tr>
                        
                    </thead>
                    
                    <tbody>   
                                            
                    </tbody>  
                    </div>
                    </div>
                    </div>


                </table>    
         

        </div>

           <script src="assets/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="assets/datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="main.js"></script>  
    <script src="../assets/vendor/js/popper.min.js"></script>
<script src="../assets/vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>
<script src="../assets/vendor/jquery/jquery.min.js"></script> 
      </body>  
      
 </html>  