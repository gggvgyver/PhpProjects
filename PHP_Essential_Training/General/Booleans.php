<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>불리언</title>
</head>
<body>
    <?php
        $val_true = true;
        $val_false = false;

        echo $val_true."<br />";
        echo $val_false;
        echo is_bool($val_false)."<br />";
        $number = 3.141592;
        if(is_float($number)) {
            echo "정수입니다.";
        }
    ?>
</body>
</html>