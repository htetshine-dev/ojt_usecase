<?php

namespace Domain\Usecase;

use Domain\Input\TestInput;
use Domain\Output\TestOutput;

/**
 * Usecase: Test
 */
interface TestUsecase
{
    public function handle(TestInput $input): TestOutput;
}
