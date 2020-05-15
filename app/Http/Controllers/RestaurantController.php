<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RestoService;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    public function index(RestoService $restoService)
    {
        $restos = $restoService->userRestoAndTables();
        return view('resto.resto-index', compact('restos'));

    }
    public function store( Request $request ){
        $postData = $this->validate($request,[
            'name' => 'required|min:3',
            'location' => 'required|min:3',
            'tables' => 'required|integer',
        ]);
        $resto = Auth::user()->restaurants()->create($postData);
        return $request->json($resto,201);
    }
}
