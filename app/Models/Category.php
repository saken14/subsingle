<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'section_symbol_code'
    ];

    public function educen_cat() {
        $this->hasMany(EducenCat::class)->orderBy('created_at');
    }

    public function section() {
        return $this->belongsTo(Section::class);
    }
}
