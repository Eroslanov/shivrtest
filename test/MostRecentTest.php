<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Cipher;

class CipherTest extends TestCase
{
    
    public function testCipherWithRussianTextAndPositiveKey(): void
    {
        $result = Cipher::cipher(text: 'абвгд', key: 1);
        $this->assertEquals('бвгде', $result);
    }

    
    public function testCipherWithEnglishTextAndPositiveKey(): void
    {
        $result = Cipher::cipher(text: 'abcde', key: 2);
        $this->assertEquals('cdefg', $result);
    }

    
    public function testCipherWithKeyGreaterThanAlphabetLength(): void
    {
        $result = Cipher::cipher(text: 'абвгд', key: 33); //
        $this->assertEquals('бвгде', $result);
    }
}