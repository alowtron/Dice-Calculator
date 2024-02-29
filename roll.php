<?php
//input data
$inputData = $_POST['inputData'];
$advData = $_POST['advData'];
$disData = $_POST['disData'];
//keep track of what is happening
$outputData = 0;
$inputDataSize = strlen($inputData);
$placeTracker = 0;
$counter = 0;
//calculation data
$numberOfDice = "";
$diceSize = "";
$modifierOperator = "";
$modifier = "";
//parse string for information
while ($counter < $inputDataSize) {
    if ($placeTracker == 0) {
        if (is_numeric($inputData[$counter])) {
            $numberOfDice .= $inputData[$counter];
        } else {
            $placeTracker = 1;
        }
    // if d
    } else if ($placeTracker == 1) {
        $placeTracker = 2;
        $counter--;
    } else if ($placeTracker == 2) {
        if (is_numeric($inputData[$counter])) {
            $diceSize .= $inputData[$counter];
        } else {
            $placeTracker = 3;
            $counter--;
        }
    } else if ($placeTracker == 3) {
        $modifierOperator .= $inputData[$counter];
        $placeTracker = 4;
    } else {
        $modifier .= $inputData[$counter];
    }
    $counter++;
};
$counter = 0;
$finalNumber = 0;
while ($counter < (int)$numberOfDice) {
    $finalNumber += rand(1, (int)$diceSize);
    $counter++;
}
if ($modifierOperator == "+") {
    $finalNumber += (int)$modifier;
} else {
    $finalNumber -= (int)$modifier;
}
echo $finalNumber;
// echo $numberOfDice;
// echo $diceSize;
// echo $modifierOperator;
// echo $modifier;