<?php
//Activity 1
echo "Email : " .$email = $_GET["email"];
echo "<br>";
echo "Password : " .$pass = $_GET["pass"];
echo "<br>";
if ($email == "" || $pass == "") {
    echo "The fields cannot be blank<br>";
}
echo "<br>";

//Activity2
if (isset($_GET['radio'])) {
    echo "Radio Button that you have selected is : " . $_GET['radio'];
}

//Activity 3
if (!empty($_GET["check"])) {
    echo "True";
}
echo "<br>";
if (empty($_GET["check"])) {
    echo "False\n";
}
echo "<br>";

//Activity4
function sortArray($array, $sortType)
{
    if ($sortType == "ASC") {
        sort($array);
    }
    if ($sortType == "DES") {
        rsort($array);
    }
    echo "<br>Array : ";
    foreach ($array as $k) {
        echo "$k";
        echo " , ";
    }
}
$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
sortArray($a, "DES");

//Activity5
if ($_GET['radio'] == "option1") {
    echo "<br><br>Activity 5 with random number array : <br>";
    $random_number_array = range(0, 100);
    shuffle($random_number_array);
    foreach ($random_number_array as $a) {
        echo "$a,";
    }
    echo "<br><br>Sorted Array : ";
    sortArray($random_number_array, "DES");
}

//Activity6
if ($_GET['radio'] == "option2") {
    echo "<br><br>Activity 6 with random number array : <br>";
    $limit_random_array_values = range(0, 100);
    shuffle($limit_random_array_values);
    $random_array_value = array_slice($limit_random_array_values, 0, 100);
    foreach ($random_array_value as $a) {
        echo "$a,";
    }
    echo "<br><br>Reset Array : ";
    echo reset($random_array_value);
   // sortArray($random_number_array, "DES");
}

?>