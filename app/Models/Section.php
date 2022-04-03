<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'symbol_code'
    ];

    public function category() {
        $this->hasMany(Category::class)->orderBy('created_at');
    }
}
