<?php

function getWords(){
        $wordsJson = file_get_contents('words.json');
        $wordsList = json_decode($wordsJson,true);
        return $wordsList;
    }

    function createTable(){
        $words= getWords();
        $table = '';
        foreach ($words as $word) {
            $table .= '
            <tr>
                <td>' . $word['word'] . '</td>
                <td>' . $word['count'] . '</td>
                <td>' . $word['consCount'] . '</td>
                <td>' . $word['vowelCount'] . '</td>
            </tr>';
        }
        return $table;
    }

    function addWord($newWord) {
        $wordsList=getWords();
        $wordsList[] = [
            "word" => $newWord,
            "count" => strlen($newWord),
            "consCount" => getConsonant($newWord),
            "vowelCount" => getVowel($newWord)
        ];
        $wordsJson = json_encode($wordsList);
        file_put_contents('words.json',$wordsJson);
    }

    function getVowel($word) {
        $vowel=0;
        $chars= str_split(strtolower($word));
        foreach($chars as $char){
            if($char=='a' || $char=='e' || $char=='i' || $char=='o' || $char=='u'){
                $vowel++;
            }
        }
        return $vowel;
    }
     
    function getConsonant($word) {
        return strlen($word)-getVowel($word);
    }