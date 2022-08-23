<?php
function task1(array $strings, bool $and = true)
{
    $result = implode ("\n", array_map(function (string $str) {
        return "<p>$str</p>";
    }, $strings));
    if ($and) {
        return $result;
    } else {
        echo implode (" ", $strings) ;
    }
}

function task2($operation)
{
    $numbers = func_get_args();
    $result = func_get_arg(1);

    if ($operation == '+') {
        for ($i = 2; $i < sizeof($numbers); $i++){
            $result += $numbers[$i];
        }
        return $result;
    } elseif ($operation == '-') {
        $result = 0;
        for ($i = 1; $i < sizeof($numbers); $i++){
            $result -= $numbers[$i];
        }
        return $result;
    } elseif ($operation == '*') {
        for ($i = 2; $i < sizeof($numbers); $i++){
            $result *= $numbers[$i];
        }
        return $result;
    } elseif ($operation == '/') {
        for ($i = 2; $i < sizeof($numbers); $i++) {
        $result /= $numbers[$i];
        }
        return $result;
    } else {
        echo "$operation" . ' - не действие';
    }
}

function task3(int $arg1, int $arg2)
{
    if ($arg1 < 0 || $arg2 < 0) {
        trigger_error('argument is negative');
        return 'Аргумент не должен быть отрицательным';
    }

    echo "<table>";
    for ($i = 1; $i <= $arg1; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $arg2; $j++) {
            $value = $i * $j;
            echo "<td> " . $value . "  </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function task4_1()
{
    date_default_timezone_set('Europe/Moscow');
    echo date('d.m.Y H:m');
}

function task4_2()
{
    echo strtotime('24.02.2016 00:00:00');
}

function task5_1()
{
    $string1 = 'Карл у Клары украл Кораллы';
    echo str_replace('К', ' ', $string1) . "<br>";
}

function task5_2()
{
    $string2 = 'Две бутылки лимонада';
    echo str_replace('Две', 'Три', $string2) . "<br>";
}

function task6(string $filename)
{
    $fp = fopen($filename, 'r');
    $str = '';
    while(!feof($fp)) {
        $str .= fgets($fp, 1024);
    }
    echo $str;
}
