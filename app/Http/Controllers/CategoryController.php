<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\EducenCat;
use App\Models\Educenter;
use App\Models\Section;

class CategoryController extends Controller
{
    public function index() {
        $categories = Section::query()->orderBy('name', 'ASC')->select(['name', 'symbol_code'])->get();

        return view('categories.index', [
            'categories' => $categories,
        ]);
    }

    public function show($section_symbol_code, $id) {
        $eduCentersId = EducenCat::query()->select(['educenter_id'])->where(['category_id' => $id])->get();
        $eduCenters = collect();
        foreach ($eduCentersId as $eduCenterId) {
            $temp = Educenter::query()->where(['id' => $eduCenterId->educenter_id])->first();
            $eduCenters->add($temp);
        }
        $categoryName = Category::where(['id' => $id])->select(['name'])->first();

        return view('educenters.index', [
            'eduCenters' => $eduCenters,
            'categoryName' => $categoryName,
        ]);
    }

    public function show_categories($symbol_code) {
        $subcategories = Category::query()->where(['section_symbol_code' => $symbol_code])->orderBy('name', 'ASC')->select(['name', 'id'])->get();

        return view('categories.subcategories.index', [
            'subcategories' => $subcategories,
            'section_symbol_code' => $symbol_code,
        ]);
    }
}
