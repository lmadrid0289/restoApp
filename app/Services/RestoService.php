<?php
namespace App\Services;
use Illuminate\Support\Facades\Auth;
use App\User;

class RestoService
{
    public function userRestoAndTables()
    {
        return Auth::user()->restaurants()->get();
    }
}