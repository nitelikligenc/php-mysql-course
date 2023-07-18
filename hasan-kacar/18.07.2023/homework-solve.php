<?php

$alphabet = range("a", "z");
$encryptedAlphabet = range("d", "z");
array_push($encryptedAlphabet, "a");
array_push($encryptedAlphabet, "b");
array_push($encryptedAlphabet, "c");


echo "a b c d e f g h i j k l m n o p q r s t u v w x y z <br>";
echo "d e f g h i j k l m n o p q r s t u v w x y z a b c <br><br>";



$plainText = "Zeynep Ahmet";
$encryptedText = "";

$strLength = strlen($plainText);
//$modVal = count($alphabet) - 3;
for ($i = 0; $i < $strLength; $i++) {

    $strChar = substr(strtolower($plainText), $i, 1);
    if ($strChar == " "){
        $encryptedText .= " ";
    }else{
        $alphabetIndex = array_search($strChar, $alphabet);
        $encryptedText .= $encryptedAlphabet[$alphabetIndex];
    }
//    echo "Character : " . $strChar . "<br>";
//    echo "Key : " . $alphabetIndex . "<br><br>";
//
//    $encryptedKey = $alphabetIndex % $modVal;
}

echo "Encrypted Text : " . $encryptedText;
