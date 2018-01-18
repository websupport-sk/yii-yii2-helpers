<?php

namespace tests\helpers;

use tests\BaseTestCase;
use yii\helpers\ArrayHelper;

class ArrayHelperTest extends BaseTestCase
{
    protected $helperClassName = 'yii\helpers\BaseArrayHelper';

    /**
     * @expectedException \CException
     */
    public function testThrowBridgedExceptionClass()
    {
        ArrayHelper::isIn('needle', 'haystack');
    }
}
