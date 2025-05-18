<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::create([
            'name' =>'hhh',

        ]);
        $success = "با موفقیت انجام شد.";
        return $brands;
    }
}
