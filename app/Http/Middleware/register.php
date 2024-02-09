<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use App\Models\UserRole;

class register
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         $request->validate([
            'email' => 'required|email',
             'password' => 'required|confirmed|min:8',
             'password_confirmation' => 'required|same:password',
             'name' => 'required|string',
            ]);

// dd($credentials);
        $reg= User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
         ]);
         $lastUser = User::latest()->first();
            $role= UserRole::create([
                'user' => $lastUser->id,
                'role' => 2,
             ]);
         if($reg && $role){
            return redirect('/login')->with('success',"your registration has been succesful ");;
         }else{
            return redirect()->back()->with('danger',"some error had eccord in your registartion ");
         }
    }
}
