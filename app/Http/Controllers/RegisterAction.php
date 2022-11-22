<?php

declare(strict_types=1);

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use Faker\Factory;
use Illuminate\Http\RedirectResponse;

final class RegisterAction extends Controller
{
    public function __invoke(Factory $factory) : RedirectResponse
    {
        return $factory->driver('github')->redirect();
    }
}
