<?php

use App\URL;
use PHPUnit\Framework\TestCase;

class URLTest extends TestCase
{
    protected $url;

    public function setUp()
    {
        $this->url = new URL();
    }

    public function testSluggifyReturnsSluggifiedString()
    {
        $originalString = 'This string will be sluggified';
        $expectedResult = 'this-string-will-be-sluggified';
        // to complete: call slugify with originalString
        // and assert expectedResult is the output
    }
}
