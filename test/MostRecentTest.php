<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Cipher;

class MostRecentTest extends TestCase
{
  public function testMostRecentWithRegularInput()
    {
        $result = MainClass::mostRecent('123 123 123 qq qq qq qq');
        $this->assertEquals('qq', $result);
    }

    public function testMostRecentWithSingleWord()
    {
        $result = MainClass::mostRecent('hello');
        $this->assertEquals('hello', $result);
    }

    
    public function testCipherWithKeyGreaterThanAlphabetLength(): void
    {
        $result = Cipher::cipher(text: 'абвгд', key: 33); //
        $this->assertEquals('бвгде', $result);
    }
}
