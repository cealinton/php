<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Лабораторная работа: Solve the equation.</h1>
    <?php

    $equation = '6 / X = 2';
    
    $parts = explode('=', $equation);
    $right = $parts[1];
    $left = $parts[0];

    $operand = explode('/', $equation);
    $divident = $operand[0];
    $dividier = $operand[1];

    if (strpos($left,'+') !== false) {
        $operator = 'сложение(+)';
    }
    else if (strpos($left,'-') !== false) {
        $operator = 'вычитание(-)';
    }
    else if (strpos($left,'*') !== false) {
        $operator = 'умножение(*)';
    }
    else if (strpos($left,'/') !== false) {
        $operator = 'деление(/)';
    }
    else if (strpos($left,'**') !== false) {
        $operator = 'возведение в степень(**)';
    }

    if (strpos($divident,'X') !== false) {
        $position = 'исокмая переменная X находится на месте делимого';
    }
    else if (strpos($dividier, 'X') !== false) {
        $position = 'исокмая переменная X находится на месте делителя';
    }
    else {
        $position = 'исокмая переменная X находится на месте частного';
    }

    echo 'Уравнение: '.$equation.'<br>';
    echo 'Оператор в этом уравнении: '.$operator.'<br>';
    echo 'Значение X = '.$divident/$right.'<br>';
    echo 'Расположение неизвестной переменной: '.$position;

    ?>
</body>
</html>