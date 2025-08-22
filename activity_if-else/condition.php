<?php

function checkAge($age) {
    if ($age >= 18) {
        return "You are an adult.";
    } else {
        return "You are a minor.";
    }
}

function checkTemperature($temperature) {
    if ($temperature > 37) {
        return "It's hot!";
    } else {
        return "It's not too hot.";
    }
}

function evaluateScore($score) {
    if ($score >= 90) {
        return "Excellent!";
    } elseif ($score >= 70) {
        return "Good job!";
    } elseif ($score >= 50) {
        return "You're getting there!";
    } else {
        return "Keep practicing.";
    }
}

function getDayMessage($day) {
    switch ($day) {
        case "Monday":
            return "Oh, it's Monday again.";
        case "Wednesday":
            return "It's almost the weekend!";
        case "Friday":
            return "Friday night, here we come!";
        default:
            return "It's another day.";
    }
}

// Sample inputs
$age = 20;
$temperature = 39;
$score = 85;
$day = "Friday";

// Output
echo "Results:\n";
echo checkAge($age) . "\n";
echo checkTemperature($temperature) . "\n";
echo evaluateScore($score) . "\n";
echo getDayMessage($day) . "\n";

?>
