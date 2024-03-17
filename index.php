<?php
$a = rand(0, 10);
$b = rand(1, 10);
echo "Перша змінна = $a<br>Друга змінна = $b<br>";
if ($a%$b == 0) {
    echo "Перша значення змінної кратне значенню другої змінної<br>";
} else {
    echo "Перша значення змінної не є кратним значенню другої змінної<br>";
}

if ($a > $b) {
    $res = $a**2;
    echo "<br>Квадрат більшого числа $res";
} elseif ($a===$b) {
    echo "<br>Числа рівні.";
} else {
    $res = $b**2;
    echo "<br>Квадрат більшого числа $res";
}

$month = 3;
$days_in_month = cal_days_in_month(CAL_GREGORIAN, $month, 2024);
echo "<br><br>Місяць = $month <br>Кількість днів у місяці: $days_in_month";

$year = rand(1800, 2024);
echo "<br><br> Рік = $year";
if (($year%4 == 0 && $year%100 != 0) || $year%400 == 0) {
    echo "<br>$year є високосним";
} else {
    echo "<br>$year не є високосним";
}

$x = rand(0, 10);
$y = rand(0, 10);

echo "<br><br>Перша змінна = $x<br>Друга змінна = $y";
if ($x % 3 == 0 && $y%3 == 0) {
    $res = $x+$y;
    echo "<br>Сумма чисел $x і $y дорівнює $res";
} elseif ($y == 0) {
    echo "<br>На нуль ділити не можна";
} else {
    $res = $x/$y;
    echo "<br>Результат ділення $x на $y дорівнює $res";
}

$session_id = rand(0,1);
if ($session_id == 0) {
    echo "
    <h1>Please register</h1>
    <p>Session ID: $session_id</p>
    <input placeholder='Login'><br>
    <input placeholder='Password'><br>
    ";
}else {
    echo "
    <h1>You are already registered</h1>
    <p>Session ID: $session_id</p>
    <a href='#' style='color: blue'>Login</a>
    ";
}

$printx = rand(5, 200);
$printy = rand(5, 200);
$printColor = 'green';
echo "<br> X = $printx, Y = $printy, Color = Green<br>Зелений чотирьокутник шукайте на сторінці.";
echo "
<div style='position: absolute; width: $printx; height: $printy; background-color: $printColor; top: 100px; left: 300px;'></div>
";


?>