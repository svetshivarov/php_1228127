<?php

$welcomeMessage = "Good Morning";
$age = 25;
$temp = 1.5;
$isTodayFriday = true;
$array = [
    $welcomeMessage,
    $isTodayFriday,
    $age,
    $temp,

];
//print_r($array[3]); //print_r - za izvejdane na masivi

$assocArray = [
    "welocome" => $welcomeMessage,
    "temp" => $temp,
    "age" => $age,
    "isTodayFriday" => $isTodayFriday,
];
//echo $assocArray["temp"];

// taka moje da se izvejdat sashto assocArrays - asociirani masivi
//for($i = 0; $i < sizeof($array); $i++) {
//    echo $array[$i] . "<br>"; //. - konkatenaciq
//    //echo "<br>";
//}

//$i = 0;
//while ($i < sizeof($array)) {
//    echo $array[$i]."<br>";
//    $i++;
//}
//while i for - ne se izpolzvat za assocArrays
// za tqh se izpolzva foreach

foreach ($assocArray as $item) { // za assocArrays
    echo $item . "<br>";
}
//ili
foreach ($assocArray as $key => $item) { // za assocArrays
    echo $key . " ". $item . "<br>"; // primer s klyuch
}

//funkciq i izvikvane
function findDogBreed($nameOfDog) {
//    if($nameOfDog === "Kiara") {
//       echo "Dog is husky";
//    } elseif ($nameOfDog === "Rex") {
//        echo "Dog is shepard";
//    } else {
//        echo "Dog breed has not been found";
//    }
    //vmesto tozi if --> switch
    switch ($nameOfDog) {
        case "Kiara":
            echo "Husky <br>";
        case "Rex":
            echo "Shepard <br>";
        case "Sharo":
            echo "Dalmatian <br>";
        case "Maxi":
            echo "Dog <br>";
        case "Mike":
            echo "Bulldog <br>";
        default:
            echo "Dog breed has not been found";
    }
}

findDogBreed("Rex");
// echo - izvejdane na ostanaloto
//echo $welcomeMessage;
//echo"<br>";
//echo $age;
//echo"<br>";
//echo $temp;
//echo"<br>";
//echo $isTodayFriday;
//echo"<br>";
