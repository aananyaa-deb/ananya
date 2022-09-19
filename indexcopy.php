<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "local_service";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `transports`";
// for method 2

$result1 = mysqli_query($connect, $query);

$options = "";
while($row2 = mysqli_fetch_array($result1))
{
    $options = $options."<option>$row2[1]</option>";
}

$result2 = mysqli_query($connect, $query);
$options2 = "";
while($row2 = mysqli_fetch_array($result2))
{
    $options2 = $options2."<option>$row2[2]</option>";
}

?>

<!DOCTYPE html>

<html>
 <head>

        <title> PHP SELECT OPTIONS FROM DATABASE </title>

        <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
<body>
<form action="search.php" method="GET">
<table class="tdata">
                     <tr>
                      <td>SOURCE</td></tr>
    <tr>  <td> <select name="src"><option selected hidden value="">Select your place</option>         
    <?php echo $options;?>
    <?php if(isset($_GET['src'])){echo $_GET['src']; } ?>
    </select></td></tr> 
    <tr>
     <td>DESTINATION</td></tr>
     <tr>  <td> <select name="dest"><option selected hidden value="">Select your destination</option>         
    <?php echo $options2;?>
    <?php if(isset($_GET['dest'])){echo $_GET['dest']; } ?>
    </select></td></tr>
    <tr><td><button id="submitt" type="submit">Go</button></td></tr></table></form>
   

    </body></html>

