<?php

$id = "22";
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
    }
$url = "http://viewmea.com/fr/corporate_clients.php";
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body onLoad="javascript:document.getElementById('myform').submit()">
    <h1>Page is Under Construction..</h1>
    <form id="myform" action="<?php echo $url; ?>" method="get">
        <input type="hidden" name="delparam" value="<?php echo $id; ?>"/>
    </form>
</body>
</html>
