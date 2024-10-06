<?php

use App\Models\Category;


if(! function_exists('getCategory')){
    function getCategory(){
        $category = Category::all();
        return $category;
    }
}
