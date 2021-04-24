<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\WelcomeNotification\WelcomeController as BaseWelcomeController;
use Symfony\Component\HttpFoundation\Response;

class WelcomeController extends BaseWelcomeController
{
    public function sendPasswordSaveResponse(): Response
    {
        return redirect()->route('dashboard');
    }
}
