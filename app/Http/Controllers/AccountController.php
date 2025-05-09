<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    function index() : View {
        $data['page_title'] = 'Home';
        $data['page_include'] = 'dashboard';

        return view('account', $data);
    }
}
