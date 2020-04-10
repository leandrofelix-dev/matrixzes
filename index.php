<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
    require('load.php');
    require('back-end.php');
?>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
    window.onload = function(){
        $("#container").delay(1000).fadeOut("slow");
        $("#load").delay(1500).fadeOut("slow");
    }
</script>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Matrixzes</title>
<?php require('head.php');?>
</head>
<body>
<?php require('home.php');?>
</body>
</html>
