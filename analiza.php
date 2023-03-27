<?php

function vowelCounter(string $word) {
    $vowelCount = 0;
    $vowel = ['a','e','i','o','u'];
    foreach ($vowel as $appearance) {
        $vowelCount += substr_count(strtolower($word), $appearance);
    }
    return $vowelCount;    
}

$word = $_POST["word"];

if(!$word) {
    echo "<h3>Polje za unos ne može biti prazno!</h3>\n";
    echo "<button onclick='history.go(-1);'>Povratak na unos </button>";
}

else if(ctype_alpha($word)) {
    $numLetter = strlen($word);

    $numVowels = vowelCounter($word);

    $numConsonants = $numLetter - $numVowels;

    $wordsJson = file_get_contents('words.json');

    $wordsArr = json_decode($wordsJson, true);

    $wordsArr[] = [
        'word' => $word,
        'numLetter' => $numLetter,
        'numVowel' => $numVowels,
        'numConsonant' => $numConsonants
    ];

    $wordsJson = json_encode($wordsArr);

    file_put_contents('words.json', $wordsJson);

    header("Location: index.php");
}

else {
    echo "<h3>Došlo je do greške pri unosu. Provjerite jeste li ispunili sljedeće uvjete:</h3>\n";
    echo "<ol><li>Unos mora bitit SAMO 1 riječ - bez razmaka.</li>";
    echo "<li>Unos ne smije sadržavati brojeve!</li>";
    echo "<li>Unos mora biti isključivo u slovima američke abecede.</li></ol>";
    echo "<button onclick='history.go(-1);'>Povratak na unos </button>";
}