<?php  echo "above doctype <br>";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php echo  "inside head <br>";?>
</head>
<body>
    <?php echo  "inside body <br>";?>
    <?php echo "This is a header tag: <h3 style='color:red;'>This is H3 Inside</h3>";?>
    <?php echo "First Arg","Second Arg <br>"; ?>
    <?php echo 'First Arg Second Arg <br>'; ?>
    <?php 
        $x = 1;

        echo "The value of x is:".$x;
    
    ?>
</body>
</html>
<?php  echo "below closing html <br>";?>