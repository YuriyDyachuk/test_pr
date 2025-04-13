<?php

namespace Tests\Feature;

use App\Http\Controllers\FuncController;
use Tests\TestCase;

class FuncControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_run_with_callback(): void
    {
        $controller = new FuncController();
        $controller->setCallback(fn (string $args) => strtoupper($args));
        $result = $controller->run('hello world');

        $this->assertEquals('HELLO WORLD', $result);
    }
}
