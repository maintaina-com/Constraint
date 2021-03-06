<?php

namespace Horde\Constraint;
use Horde_Test_Case;
use \Horde_Constraint_AlwaysFalse;

class AlwaysFalseTest extends Horde_Test_Case
{
    public static function randomObjectProvider()
    {
        return array(
            array('teststring'),
            array(''),
            array(true),
            array(false),
        );
    }

    /**
     * @dataProvider randomObjectProvider
     */
    public function testEvaluateIsAlwaysFalse($value)
    {
        $const = new Horde_Constraint_AlwaysFalse();
        $this->assertFalse($const->evaluate($value));
    }
}
