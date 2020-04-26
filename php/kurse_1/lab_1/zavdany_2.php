<?php
$age = 'g';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if ($age > 18 && $age <= 59) {
    echo 'Vam echo rabotati i rabotati';
}elseif ($age > 59){
    echo 'Vam pora na pensiy';
}elseif ($age > 1 && $age < 17){
    echo 'Van echo rano rabotati';
}else {
    echo 'Nevidomiy vik';
}

?>

</body>
</html>
