<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
     div{
            /*background-color: black;*/
            width: 100%;
            margin-top: 25%;
            margin-left:25%
        }
         table {
            width: 65%;
            border-collapse: collapse;
            
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
        
        #dd{
            width: 65%;
            /*background-color: aqua;*/
            display:flex;
            justify-content: space-between;
            
            margin-left: 0%;
            
        }
        #yy{
            
        }
    </style>
</head>
<body>
<?php
require_once('connect.php');

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result) {


    echo "<div>";
    echo "<table border='1'>";
    echo "<div id='dd'>
    <label> users</label>
   <button id='yy'>Add employee</button> 
</div>";
    echo "<tr> <th>Id</th><th>Name</th><th>password</th><th>date1</th> <th>date2</th>
    <th>date2</th> <th>date2</th></tr>";
    foreach ($result as $row) {
        // Process each row
       // echo "ID: " . $row["Id"] . " Name: " . $row["Name"] . " address :" .$row["Address"]. "Sallary :"  .$row["Salary"]. "<br>";
       echo "<tr>";
       echo "<td>".$row["Id"] ."</td>"; 
       echo "<td>".$row["name"] ."</td>"; 
       echo "<td>".$row["password"] ."</td>"; 
       echo "<td>".$row["date_created"] ."</td>";
       echo "<td>".$row["date_last_login"] ."</td>"; 
       echo "<td>
<form method='post' action='delete.php'>
    <input type='hidden' name='delete_id' value='" . $row["Id"] . "'>
    <button type='submit' class='delete-btn'>Delete</button>
</form>
</td>";
echo "<td>
<form method='post' action='delete.php'>
    <input type='hidden' name='delete_id' value='" . $row["Id"] . "'>
    <button type='submit' class='delete-btn'>Delete</button>
</form>
</td>";

    }
    echo "</table>";
    echo "</div>";
} 
    else {
    echo "Error executing query: " . $conn->errorInfo()[2];
}





?>
<!-- <script>
        // Reload the page after 1 second (1000 milliseconds)
        setTimeout(function () {
            location.reload();
        }, 1000);
    </script>
    -->

</body>
</html>
