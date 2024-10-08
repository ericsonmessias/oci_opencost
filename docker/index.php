<!DOCTYPE html>
<html>
<head>
<style>
h1 {text-align: center;}
p {text-align: center;}
</style>
</head>
<body>

<h1>Welcome to PHP v3.2.0</h1>

<p>
<?php
echo "Pod: ", gethostname();
echo("<br>");
echo "PodIP: ", $_SERVER['SERVER_ADDR'];
?>
</p>

</body>
</html>