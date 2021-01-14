<?php

namespace Domain\Input;

use Domain\Input\BaseInput;
use Domain\Exceptions\TestException;


/**
 * Input: Test
 */
class TestInput implements BaseInput
{
    private $test;

    public function __construct($test)
    {
       $this->test = $test;
    }
    public function validate()
    {
        if (is_null($this->test))
            throw new TestException('400', 'invalid parameter : test');
    }
}
