<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Usecase\TestUsecase;
use Domain\Input\TestInput;

class TestController extends Controller
{
    public function test(Request $request, TestUsecase $usecase)
    {
        $input = new TestInput($request->get('test'));
        $output = $usecase->handle($input);
        
        return $output->presentation();
    }
}
