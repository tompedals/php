<?php

use PHPUnit\Framework\TestCase;


class UtilsTest extends TestCase
{
    protected static $channel = 'pubnub_php_test';

    /**
     * @group time
     * @group time-integrational
     */
    public function testUrlEncode()
    {
        $this->assertEquals('blah%2Bnjkl', \PubNub\PubNubUtil::urlEncode("blah+njkl"));
        $this->assertEquals('%7B%22value%22%3A%20%222%22%7D', \PubNub\PubNubUtil::urlEncode("{\"value\": \"2\"}"));
    }
}