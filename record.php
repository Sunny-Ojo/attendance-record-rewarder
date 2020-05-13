<?php
session_start();
if (isset($_GET["submit"])) {
    $record = $_GET["record"];
    $record = strtoupper($record);
    $checkP = substr_count($record, 'P');
    $checkA = substr_count($record, 'A');
    $checkL = substr_count($record, 'L');
    $findB = strpos($record, 'B');
    $findC = strpos($record, 'C');
    $findD = strpos($record, 'D');
    $findE = strpos($record, 'E');
    $findF = strpos($record, 'F');
    $findG = strpos($record, 'G');
    $findH = strpos($record, 'H');
    $findI = strpos($record, 'I');
    $findJ = strpos($record, 'J');
    $findK = strpos($record, 'K');
    $findM = strpos($record, 'M');
    $findN = strpos($record, 'N');
    $findO = strpos($record, 'O');
    $findQ = strpos($record, 'Q');
    $findR = strpos($record, 'R');
    $findS = strpos($record, 'S');
    $findT = strpos($record, 'T');
    $findU = strpos($record, 'U');
    $findV = strpos($record, 'V');
    $findW = strpos($record, 'W');
    $findX = strpos($record, 'X');
    $findY = strpos($record, 'Y');
    $findZ = strpos($record, 'Z');
    if ($findB == true || $findC == true || $findD == true || $findE == true || $findF == true || $findG == true
        || $findH == true || $findI == true || $findJ == true || $findK == true || $findM == true
        || $findN == true || $findO == true || $findQ == true || $findR == true || $findS == true || $findT == true
        || $findU == true || $findV == true || $findW == true || $findX == true || $findY == true || $findZ == true) {
        $_SESSION["error"] = "Acceptable characters are 'P, L, A";
        header('Location: index.php');
    } elseif ($checkL > 2 || $checkA > 1) {
        $_SESSION["error"] = "his attendance record is not ok, don't reward him";
        header('Location: index.php');

    } else {
        $_SESSION["success"] = 'his attendance record is ok, reward him';
        header('Location: index.php');

    }

} else {
    $_SESSION["error"] = 'Access Denied';
    header('Location: index.php');

}