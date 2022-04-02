<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\EducenCat;
use App\Models\Educenter;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::query()->orderBy('name', 'ASC')->select(['name', 'id'])->get();

        return view('categories.index', [
            'categories' => $categories,
        ]);
    }

    public function show($id) {
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
}
