<?php
require "../src/functions.php";

echo "<p><h3>Задание 1</h3></p>";
echo task1(['uno', 2, 'tres']); // if
echo task1(['uno', 2, 'tres'], false);  //else

echo "<p><h3>Задание 2</h3></p>";
echo task2('+', 30, -10, 2.275) . '<br>'; //сложение
echo task2('-', 15, -3, 0.75) . '<br>'; //вычитание
echo task2('*', 150, 27, 0.5) . '<br>'; //умножение
echo task2('/', 10, 2, 0.5) . '<br>'; //деление
echo task2('.', 10, 2, 0.5) . '<br>'; //ошибка

echo "<p><h3>Задание 3</h3></p>";
echo task3(10, -2);

echo "<p><h3>Задание 4</h3></p>";
echo task4_1() . "<br>";
echo task4_2();

echo "<p><h3>Задание 5</h3></p>";
echo task5_1();
echo task5_2();

echo "<p><h3>Задание 6</h3></p>";
file_put_contents('test.txt', 'Hello again!');
echo task6('test.txt');
