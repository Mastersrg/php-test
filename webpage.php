<html>
<head>
<title>WebPage</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body
    {
        background-color: lightblue;
    }
    #cont
    {
        position: absolute;
        top: 250px;
        left:600px;

    }
    #heading
    {
        position: absolute;
        top: 100px;
        left:620px;
    }
</style>
</head>
        <script>
            function openinsert()
            {
                window.location="insert.php";
            }
            function opendelete()
            { 
                window.location="delete.php";
            }
            function openselect()
            {
                window.location="select.php";
            }
        </script>
    <body>
        <div id="heading">
            <h1><b>Mini-Database</b></h1>
        </div>
        <div id="cont">
        <input type="button" style="width:300px" name="Insert" value="Insert Details" class="btn btn-success btn-lg btn-block" onclick="openinsert()"><br><br>
        <input type="button" style="width:300px" name="Select" value="Select Details" class="btn btn-info btn-lg btn-block" onclick="openselect()"><br><br>
        <input type="button" style="width:300px" name="Delete" value="Delete Details" class="btn btn-danger btn-lg btn-block" onclick="opendelete()"><br><br>
        </div>
    </body>
</html>