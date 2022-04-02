<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\EducenCat;
use App\Models\Educenter;

class EducenterController extends Controller
{
    public function show($id) {

        $eduCenter = Educenter::query()->where(['id' => $id])->first();

        return view('educenters.show', [
            'eduCenter' => $eduCenter,
        ]);
    }
}
