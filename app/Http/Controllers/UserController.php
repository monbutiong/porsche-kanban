<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    function list() : View {
        $data['page_title'] = 'Users';
        $data['page_include'] = 'user.list';
        $data['plugins'] = ['datatable'];

        $data['users'] = User::get();

        return view('account', $data);
    }
}
