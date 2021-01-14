<?php

namespace Domain\Output;

use Domain\Output\BaseOutput;

/**
 * Output: Test
 */
class TestOutput implements BaseOutput
{
    private $testData;
    
    public function __construct($testData)
    {
        $this->testData = $testData;
    }

    public function presentation()
    {
        $data = $this->testData;
        return view('test', compact('data'));
    }
}
