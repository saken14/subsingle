<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educenter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'address',
        'phone_num',
        'email',
        'web_site',
        'thumbnail',
        'rating',
        'feedback_count'
    ];

    public function feedbacks() {
        $this->hasMany(Feedback::class)->orderBy('created_at');
    }

    public function educen_cat() {
        $this->hasMany(EducenCat::class)->orderBy('created_at');
    }
}
