<?php

namespace tests\helpers;

use tests\BaseTestCase;
use yii\helpers\Html;

class HtmlHelperTest extends BaseTestCase
{
    protected $helperClassName = 'yii\helpers\BaseHtml';

    /**
     * @expectedException \CException
     */
    public function testThrowBridgedExceptionClass()
    {
        Html::getAttributeName('[invalid-attribute-name]');
    }
}
