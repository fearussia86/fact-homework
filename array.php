<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашнее задание к занятию от 18.07.2022 (массивы)</title>
</head>
<body>

<section>
    <h2>Задача №1 по уроку 5-6</h2>
    <p>1. Дан массив с элементами 50, 45, 40, 35, 30. Найдите сумму элементов этого массива. Запишите ее в переменную $result.
    </p>

    <?php

    $arr1 = [50, 45, 40, 35, 30];
    $result = array_sum($arr1);
    echo "Сумма элементов массива arr1 равняется:  $result";

    ?>

</section>

<section>
    <h2>Задача №2 по уроку 5-6</h2>
    <p>2. Дан массив, заполненный случайными числами. Необходимо вывести массив, заполненный случайными числами. После чего вывести данный массив в противоположном порядке.</p>

    <?php
    $arr2 = [];
    echo "Вывод массива в прямом порядке<br>";
    for ($i = 0; $i<=10; $i++) {
        $arr2[$i] += rand(0, 10);
        echo "<pre>$arr2[$i]</pre>";
    }

    print_r($arr2);

    echo "<br>Вывод массива в обратном порядке<br>";

    $arr2_reverse = array_reverse($arr2);
    print_r($arr2_reverse);

    for($q = 0; $q <=10; $q++) {

        echo "<pre>$arr2_reverse[$q]</pre>";
    }

    ?>

</section>


<section>
    <h2>Задача №3 по уроку 5-6</h2>
    <p>3. Создать массив, заполненный названиями картинок, например, 1.png. Необходимо случайным образом выбирать название картинки из массива и выводить ее на экран.</p>

<?php
$arr3 = [
   "bagamas" => "images/1-image.jpg",
    "dubai" => "images/2-image.jpg",
    "bali" => "images/3-image.jpg"

];

$rand3 = array_rand($arr3, 1);
print_r($rand3);

foreach ($arr3 as $item3 => $value3) {
    if($item3 == $rand3) {
        echo "<pre><img src='$value3'></pre>>";
    }
}

?>

</section>

<section>
    <h2>Задача №4 по уроку 5-6 (сделано)</h2>
    <p>4. Дано N действительных случайных чисел в диапазоне от -100 до 100. Найти минимальное положительное число и максимальное отрицательное число.
    </p>


<?php
$arr4 = [];
$n = rand(5, 15);
for ($w = 0; $w <= $n; $w++) {
    $arr4[$w] = rand(-100, 100);
}

print_r($arr4);

$arr4_positiv = [];
$arr4_negative = [];
for ($w = 0; $w <= $n; $w++) {
    if($arr4[$w] >= 0) {
        array_push($arr4_positiv, $arr4[$w]);
    } else {
        array_push($arr4_negative, $arr4[$w]);
    }
}

echo "<pre>Вывод массива с только положительными числами: $arr4_positiv</pre>";
print_r($arr4_positiv);
echo "<pre>Вывод массива с только отрицательными числами: $arr4_negative</pre>";
print_r($arr4_negative);

$min_positive = min($arr4_positiv);
$max_negative = max($arr4_negative);

echo "<pre>Минимально положительное число из массива:  $min_positive</pre>";
echo "<pre>Максимально  отрицательное число из массива:  $max_negative</pre>";
?>


</section>

<section>
    <h2>ЗАДАНИЕ №1 к уроку 5-6</h2>
    <p>1.	Для группы учащихся известны годовые оценки по следующим предметам: математика, физика, химия, информатика. Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок по каждому предмету.
    </p>

    <?php



    $math = [
            "Andrey" => 2,
            "Ruslan" => 2,
            "Ivan" => 3

    ];

    $physics = [
        "Andrey" => 3,
        "Ruslan" => 3,
        "Ivan" => 3
    ];

    $chemistry = [
        "Andrey" => 4,
        "Ruslan" => 4,
        "Ivan" => 4
    ];

    $informatics = [
        "Andrey" => 5,
        "Ruslan" => 5,
        "Ivan" => 5
    ];



foreach ($math as $key1 => $value1) {

        echo "<br>Выводим значения value массива  math для каждого из учащихся: $value1</br>";
        print_r($value1);
        $math_summ += $value1;

    }


    echo "<br>===============================</br>";

    echo "Cредняя в группе оценка по математике: " .$math_summ/3 ."<br>";
    echo "Суммирование оценок по математике: " .$math_summ ."<br>";

    echo "<br>===============================</br>";

    //Расчет для физики

    foreach ($physics as $key2 => $value2) {

        echo "<br>Выводим значения value2 массива  math для каждого из учащихся: $value2</br>";
        print_r($value2);
        $physics_summ += $value2;

    }
    echo "<br>===============================</br>";

    echo "Cредняя в группе оценка по физике: " .$physics_summ/3 ."<br>";
    echo "Суммирование всех оценок по физике: " .$physics_summ ."<br>";
    echo "<br>===============================</br>";

    //Расчет по химии

    foreach ($chemistry as $key3 => $value3) {
        $chemistry_summ += $value3;
    }
    echo "<br>===============================</br>";

    echo "Cредняя в группе оценка по химии: " .$chemistry_summ/3 ."<br>";
    echo "Суммирование всех оценок по физике: " .$chemistry_summ ."<br>";
    echo "<br>===============================</br>";

    //Расчет по информатике

    foreach ($informatics as $key4 => $value4) {
        $informatics_summ += $value4;
    }
    echo "<br>===============================</br>";

    echo "Cредняя в группе оценка по химии: " .$informatics_summ/3 ."<br>";
    echo "Суммирование всех оценок по физике: " .$informatics_summ ."<br>";
    echo "<br>===============================</br>";
    ?>
</section>

<section>
    <h2>ЗАДАНИЕ №2 к уроку 5-6 - по данной задаче непонятны условия. </h2>
    <p>Известна среднемесячная температура воздуха на следующих островах Карибского моря: Куба, Тринидад, Ямайка, Гаити. Сформировать один новый массив, содержащий месяц и максимальную температуру для островов.</p>
    <?php

    $arr_islands = [
            "Cuba" => "+25,5",
            "Trinidad" => "26",
            "Jamaica" => "28",
            "Haiti" => "28"

    ];

    ?>

</section>


<section>
    <h2>ЗАДАНИЕ №3 к уроку 5-6. Сделано!</h2>
    <p>3.  Дан двумерный массив из 5 строк и 6 столбцов. Определить для каждого четного столбца максимальный элемент. Найти произведение этих элементов.
    </p>

    <?php



    function createarr( $N, $min = 0, $max = 100) {
        return array_map(
            function() use( $min, $max) {
                return rand( $min, $max);
            },
            array_pad( [], $N, 0)
        );
    }
//
    $task3_arr1 = createarr(5);
    $task3_arr2 = createarr(5);
    $task3_arr3 = createarr(5);
    $task3_arr4 = createarr(5);
    $task3_arr5 = createarr(5);
    $task3_arr6 = createarr(5);


    echo "<pre>";
    print_r($task3_arr1);
    print_r($task3_arr2);
    print_r($task3_arr3);
    print_r($task3_arr4);
    print_r($task3_arr5);
    print_r($task3_arr6);
    echo "</pre>";

    $new_arr = [];
    array_push($new_arr, $task3_arr1);
    array_push($new_arr, $task3_arr2);
    array_push($new_arr, $task3_arr3);
    array_push($new_arr, $task3_arr4);
    array_push($new_arr, $task3_arr5);
    array_push($new_arr, $task3_arr6);
    echo "Создали двухмерный массив из 5 строк и 6 столбцов";
    echo "<pre>";
    print_r($new_arr);
    echo "</pre>";

    //Определяем для каждого четного столбца максимальный элемент, используя %2 = 0, если остаток от деления равен нулю, то значение четное, и кладем элемент в новый массив, где только четные элементы, и далее через функцию max вычисляем максимальный элемент, через перебор и используя if условие.
$new_arr_positive = [];
$new_arr_negative = [];

    for ($t = 0; $t <=5; $t++) {
        if ($t % 2 == 0) {
            echo "Четный элемент  $new_arr[$t]";
            echo "<pre>";
            print_r($new_arr[$t]);
            echo "</pre>";

                $max_elem = max($new_arr[$t]);
                echo "<pre>";
                echo "Максимальный элемент четного массива $max_elem <br>";
                echo "</pre>";

                echo "Произведение максимальных элементов: <br>";
//                $max_elem_multi = 1;
                $max_elem *= $max_elem;
                echo "Произведение максимальных элементов: $max_elem <br>";

        }
    }


//                array_push($new_arr_positive, $item6);


////    echo "<pre>";
//    print_r($new_arr_positive);
////    echo "</pre>";
//
//    $new_arr_max = max($new_arr_positive);
//    echo "<pre>$new_arr_max</pre>";

    ?>
</section>

<section>
    <h2>ЗАДАНИЕ №4 к уроку 5-6</h2>
    <p>Создать двумерный массив произвольной длины, содержащий строковые значения. Необходимо вывести все элементы массива, начинающиеся на А. </p>

    <?php
   //Нужно попробовать создать длинную строку и положить ее в переменную. Далее из данной строки брать подстроки и записывать их в переменные (в массивы), массивы класть в ассоциативный массив, получая в итоге двухмерный массив нужной длины - у которого элементы будут строки. 


    ?>

</section>


</body>
</html>