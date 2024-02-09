<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Authentification
{
    
    public function handle($request, Closure $next)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
           return redirect('/')->with('success','welcome again');
            
            // $roles = User::with('role')->find($user->id)->role;
            
            // if ($roles->contains('id', 1)) {
            //     return redirect('categorie');
            // } elseif ($roles->contains('id', 2)) {
            //     return redirect('home');
            // }
        }

     
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }
}
