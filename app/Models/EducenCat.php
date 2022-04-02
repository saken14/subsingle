<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducenCat extends Model
{
    use HasFactory;

    protected $fillable = [
        'educenter_id',
        'category_id',
    ];

    public function educenter() {
        $this->belongsTo(Educenter::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
