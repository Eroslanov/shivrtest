<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\CaesarCipher;

class CaesarCipherTest extends TestCase
{
    public function testEncryptWithEnglishTextAndPositiveKey()
    {
        $text = 'HELLO';
        $expectedResult = 'MJQQT';
        $this->assertEquals($expectedResult, CaesarCipher::encrypt($text));
    }

    public function testEncryptWithKeyGreaterThanAlphabetLength()
    {
        $text = 'HELLO, WORLD!';
        $expectedResult = 'MJQQT, BTWNE!';
        $this->assertEquals($expectedResult, CaesarCipher::encrypt($text));
    }

    public function testEncryptWithNonAlphabetCharacters()
    {
        $text = '';
        $expectedResult = '';
        $this->assertEquals($expectedResult, CaesarCipher::encrypt($text));
    }
}