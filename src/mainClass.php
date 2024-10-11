<?php

namespace App;

class CaesarCipher
{
    public static function arrayUnique(array $arr): array
  {
    return array_values(array_unique($arr));
  }

  public static function mostRecent(string $text): string
  {

    $userText = mb_strtolower($text);
    $userText = preg_replace('/\s+/', ' ', $userText);
    $userText = preg_replace('/[^ a-zа-яё\d]/ui', '', $userText);
    $words = array_filter(explode(" ", $userText));

    $coutWords = array_count_values($words);
    arsort($coutWords);

    $mostCommonWordCount = reset($coutWords);
    $mostCommonWord = array_keys($coutWords, $mostCommonWordCount);

    return implode(' ', $mostCommonWord);
  }
    public static function encrypt(string $text, int $key = 6): string
    {
        $array = array(
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I',
            'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
            'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
        );
        $newText = '';
        for ($i = 0; $i < strlen($text); $i++) {
            $char = $text[$i];
            if (ctype_upper($char)) {
                $index = array_search($char, $array);
                if ($index !== false) {
                    $newText .= $array[($index + $key) % 26]; // Используем модульное сложение
                } else {
                    $newText .= $char;
                }
            } else {
                $newText .= $char;
            }
        }
        return $newText;
    }
}
