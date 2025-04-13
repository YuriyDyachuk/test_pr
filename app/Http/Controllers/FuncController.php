<?php
declare(strict_types=1);

namespace App\Http\Controllers;

class FuncController extends Controller
{
    private $func;

    public function setCallback(callable $callback): void
    {
        $this->func = $callback;
    }

    public function run(string $args): string
    {
        return call_user_func($this->func, $args);
    }
}
