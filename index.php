<?php
$hello = "hello";
//echo "Hello World\n";

// phpinfo();



//print_r("Hello Worldz!");
function addsFive($num) {
    $result = $num + 5;
    return "result: ".$result;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $hello; ?></h1>
    <p><?php echo addsFive(7); ?></p>
    <?php 
        print ("Hello Cruel World<BR><BR>\n");
        phpinfo();
    ?>
</body>
</html>