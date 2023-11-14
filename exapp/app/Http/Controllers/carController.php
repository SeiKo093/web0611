<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarTestModel;


class carController extends Controller
{

public function index(){

    $carritos = CarTestModel::all();
    return response()->json($carritos);
}

public function create(){
    //
}

public function show(string $id){
    $carritos = CarTestModel::findOrFail($id);
    return response()->json($carritos);
}
}
