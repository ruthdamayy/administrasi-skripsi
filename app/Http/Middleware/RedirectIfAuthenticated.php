<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
   public function handle($request, Closure $next, $guard = null)
   {
      if (Auth::guard($guard)->check()) {
         $role = Auth::user()->status;

         switch ($role) {
            case 'admin':
               return '/admin/dashboard';
               break;
            case 'mahasiswa':
               return '/mahasiswa/dashboard';
               break;
            case 'dosen':
               return '/dosen/dashboard';
               break;
            case 'prodi':
               return '/prodi/dashboard';
               break;
            case 'kepala laboratorium':
               return '/kepala-laboratorium/dashboard';
               break;
            case 'kepala prodi':
               return '/kepala-prodi/dashboard';
               break;
            case 'sekretaris prodi':
               return '/sekretaris-prodi/dashboard';
               break;
            case 'pegawai prodi':
               return '/pegawai-prodi/dashboard';
               break;
            case 'dosen pembimbing':
               return '/dosen-pembimbing/dashboard';
               break;
            case 'dosen penguji':
               return '/dosen-penguji/dashboard';
               break;
            default:
               return '/';
               break;
         }
      }
      return $next($request);
   }
}
