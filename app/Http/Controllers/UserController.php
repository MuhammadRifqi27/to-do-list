<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

use App\Services\Users\UsersService;

class UserController extends Controller
{
    protected UsersService $usersService;

    public function __construct(UsersService $usersService)
    {
        $this->usersService = $usersService;
    }

    public function index()
    {
        $users = $this->usersService->getAll();
        return Inertia::render('master-data/user', [
            'users' => $users
        ]);
    }

    public function datatable()
    {
        $getData = $this->usersService->getAll();
        return response()->json($getData);
    }
}
