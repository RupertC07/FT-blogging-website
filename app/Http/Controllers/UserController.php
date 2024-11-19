<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function register(RegisterRequest $request)
    {
        try {
            $user = $this->userService->register($request->validated());
            return response()->json([
                'message' => 'User created successfully',
                'user' => $user
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 400);
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        return $this->userService->login($credentials);
    }
}
