<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>연관배열</title>
</head>
<body>
    <?php
        $assoc = array(
            "first_name" => "첫캐빈",
            "second_name" => "둘캐빈",
            "third_name" => "셋캐빈",
            "last_name" => "마지막캐빈"
        );
        echo $assoc["first_name"];
        $assoc["first_name"] = "수정 첫 캐빈";
        echo $assoc["first_name"];
    ?>      
</body>
</html>