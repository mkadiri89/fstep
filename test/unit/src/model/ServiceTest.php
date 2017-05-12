<?php

namespace test\unit\src\model;

use PHPUnit_Framework_TestCase;
use src\model\Service;

class ServiceTest extends PHPUnit_Framework_TestCase
{
    public function testGetValueValidId()
    {
        $this->assertEquals(1000, (new Service(1000, 'Housing'))->getId());
    }

    /**
     * @expectedException \Exception
     */
    public function testGetValueInvalidId()
    {
        new Service('invalidid', 'Housing');
    }
}
