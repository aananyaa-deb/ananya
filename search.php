<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service_of_Locaport</title>
    <style>
        h3{text-align:center;font-size:40px;}
        body::before{
    content: "";
    background:linear-gradient(rgba(240, 186, 123, 0.6),rgba(223, 200, 156, 0.318));
    position: absolute;
    top:0px;
    left:0px;
    height:100vh;
    width:100%;
    z-index: -1;
    opacity: 0.5;}
    table{ margin:10% 20%;;font-size:25px;}
    table, th, td {
  border: 1px solid black; text-align:center;
}
section .foot{margin-top:20%;background-color:white;}</style>
 <link rel="stylesheet" href="styleproject.css">
</head>
<body>
<header>
        <div id="headbg">
            <ul>
                <li><img src="prj_images/LOGO.png" alt="Logo"></li>
                <li>
                    <h2 class="h-primary">Locaport</h2>
                </li> </ul></div>

</header>
    <h3 >Enjoy our service!!!</h3>
<table> <thead>
                                <tr>
                                    
                                    <th>Source</th>
                                    <th>Destination</th>
                                    <th>Available Transports</th>
                                </tr>
                            </thead><br><tbody>
<?php 
                                    $con = mysqli_connect("localhost","root","","local_service");

                                    if(isset($_GET['src'])&&($_GET['dest'] ))
                                    {
                                        $src = $_GET['src'];
                                        $dest=$_GET['dest'];
                                        $query = "SELECT * FROM transports WHERE src='$src' && dest='$dest' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                
                                                <tr>
                                                   
                                                    <td><?= $items['src']; ?></td>
                                                    <td><?= $items['dest']; ?></td>
                                                    <td><?= $items['Avl_trans']; ?></td>
                                                </tr>
                                               
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                            
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php }} ?> </tbody></table>
                                           
                                           
                                          <section>  <footer class="foot">
        
    <h4>&copy All rights reserved by LOCAPORT.</h4>
        
    </footer></section>
</body>
</html>