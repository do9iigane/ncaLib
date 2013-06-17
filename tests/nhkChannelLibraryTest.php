<?php

/**
 * @author do9iigane <dokumegane@interestic.com>
 */
namespace nhk\tests;
class nhkChannelLibraryTest extends \PHPUnit_Framework_TestCase{

    public function setUp()
    {
        $this->object = \nhk\lib\DI::get('\nhk\nhkChannelLibrary');
        define('MOCK_OBJECT', true);
    }
    public function testProgramListAPI()
    {
        $this->assertEquals($this->object->programListAPI(), 'http://api.nhk.or.jp/v1/pg/list/130/g1/2013-06-17.json?key=000000000');
        $this->assertEquals($this->object->__destruct(), 'false');
    }

    public function testProgramGenreAPI()
    {
        $this->assertEquals($this->object->programGenreAPI(), 'http://api.nhk.or.jp/v1/pg/genre/130/0002/2013-06-17.json?key=000000000');
        $this->assertEquals($this->object->__destruct(), 'false');
    }

    public function testProgramInfoAPI()
    {
        $this->assertEquals($this->object->programInfoAPI(), 'http://api.nhk.or.jp/v1/pg/info/130/2013010656789.json?key=000000000');
        $this->assertEquals($this->object->__destruct(), 'false');
    }

    public function testNowOnAirAPI()
    {
$this->assertEquals($this->object->nowOnAirAPI(), 'http://api.nhk.or.jp/v1/pg/now/130/all.json?key=000000000');
        $this->assertEquals($this->object->__destruct(), 'false');
    }

}