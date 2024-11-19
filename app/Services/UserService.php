<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register(array $data)
    {
        if ($this->userRepository->findByEmail($data['email'])) {
            throw new \Exception('Email already in use.');
        }

        return $this->userRepository->create($data);
    }

    public function login(array $credentials)
    {
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('YourAppName')->plainTextToken; 
            return response()->json([
                'user' => $user,
                'token' => $token
            ]);
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }
}
