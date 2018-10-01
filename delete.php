<html>
<head>
<title>Delete</title>
<script>
    function web()
    {
        window.location="webpage.php";
    }
</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    body
    {
       background: lightblue; 
    }
    .cont
    {
        position: absolute;
        top:180px;
        left:600px;
    }
</style>
<body>
<form action="" method="post" class="cont">
<h2>Type email to delete details</h2><br>
<input  type="text" style="width:300px;" class="form-control" placeholder="Enter the mail" name="smail" required><br>
<input type="submit" style="width:300px;" class="btn btn-danger btn-lg" value="Delete" name="submitdelete">
</form>
<?php 
    if(isset($_POST["submitdelete"]))
    {
        unset($_POST["submitdelete"]);
        require 'connect.php';
        $e=$_POST["smail"];
        $sql="Delete from details where email='$e'";
        $rs=$conn->query($sql);
        if($rs)
        {
           echo "<script>alert('Details Deleted !');</script>"; 
        }
        else
        {
            echo "<script>alert('No such mail found!');</script>"; 
        }
        
    }
?>
<input type="button" style="position:absolute; top:0px; left:0px;" name="submit" class="btn btn-danger btn-lg" value="Home" onclick="web()">
</body>
</html>