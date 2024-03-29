<?php

namespace Domain\Input;

use Domain\Input\BaseInput;
use Domain\Exceptions\TestException;
use Domain\ValueObject\Common\ErrorCode;


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
            throw new TestException(ErrorCode::KD_ERROR_000_0002, 'invalid parameter : test');
    }
}
