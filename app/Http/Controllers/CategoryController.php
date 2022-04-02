<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function create(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();
        
        return redirect('/boombcraft');
    }
}
