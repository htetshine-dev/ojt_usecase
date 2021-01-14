<?php

namespace Domain\Usecase\Interactor;

use Domain\Input\TestInput;
use Domain\Output\TestOutput;
use Domain\Usecase\TestUsecase;
use Domain\Repository\TestRepository;

/**
 * Interactor: Test
 */
class TestInteractor implements TestUsecase
{
    private $testRepository;

    public function __construct(TestRepository $testRepository)
    {
        //ToDo
        $this->testRepository = $testRepository;
    }

    /**
     * main process
     *
     * @param TestInput
     * @return TestOutput
     */
    public function handle(TestInput $input): TestOutput
    {
        //Todo
        
        // $input->validate();

        $testData = $this->testRepository->getTest();

        $output = new TestOutput($testData);

        return $output;
    }
}
