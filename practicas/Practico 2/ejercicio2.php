<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $num = rand(1, 5);
    print $num . "<br>";
    switch ($num) {
        case 1:
            print "uno";
            break;
        case 2:
            print "dos";
            break;
        case 3:
            print "tres";
            break;
        case 4:
            print "cuatro";
            break;
        case 5:
            print "cinco";
            break;
    }
    ?>
</body>

</html>