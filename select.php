<html>
<head>
<script>
        function web()
        {
        window.location="webpage.php";
        }
</script>
<title>Select</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    body
    {
        background-color: antiquewhite;
    }
    .cont
    {
        position: absolute;
        left:550px;
        
    }
</style>
<body>
<br><br><br>
<table class="table table-striped table-bordered table-hover">
        <th class='danger'>Name</th>
        <th class='danger'>Phone</th>
        <th class='danger'>Email</th>
<?php 
    require 'connect.php';
    $sql="Select * from details";
    $rs=$conn->query($sql);
    while($row=$rs->fetch_assoc())
    {
    $n=$row["name"];
    $p=$row["phone"];
    $e=$row["email"];
    echo"<tr>";
    echo "<td>$n</td>";
    echo "<td>$p</td>";
    echo "<td>$e</td>";
    echo"</tr>";
    }
        
?>
</table ><br><br>

<form action="" method="post" class="cont">
<h2>Type any name to see details</h2>
<input  type="text" style="width:300px;" class="form-control" placeholder="Enter the name" name="sname"><br>
<input type="submit" style="width:300px;"class="btn btn-primary btn-lg"value="Display" name="submitselect">
</form>
<br><br><br><br><br><br><br><br><br><br>
<?php
    require 'connect.php';
    if(isset($_POST["submitselect"]))
    {
        unset($_POST["submitselect"]);
        $nm=$_POST["sname"];
        $sql="Select * from details where name='$nm'";
        $rs=$conn->query($sql);
        while($row=$rs->fetch_assoc())
        {
            $n=$row["name"];
            $p=$row["phone"];
            $e=$row["email"];
            echo"<table class='table table-striped table-bordered table-hover'>
        <th class='danger'>Name</th>
        <th class='danger'>Phone</th>
        <th class='danger'>Email</th>";
            echo"<tr class='info'>";
    echo "<td>$n</td>";
    echo "<td>$p</td>";
    echo "<td>$e</td>";
    echo"</tr>";
            
        }
    }
?>
    <input type="button" style="position:absolute; top:0px; left:0px;" name="submit" class="btn btn-danger btn-lg" value="Home" onclick="web()">
</body>
</html>