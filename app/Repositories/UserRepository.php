<?php

namespace App\Repositories; 

use App\Models\User;  

class UserRepository
{
   
    public function findByEmail($email)
    {
        return User::where('email', $email)->first();  // Find and return the user or null if not found
    }

    public function create($data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'date_of_birth' => $data['date_of_birth'], 
        ]);
    }
}
