<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'user_id',
        'educenter_id'
    ];

    public function educenter() {
        $this->belongsTo(Educenter::class);
    }

    public function user() {
        $this->belongsTo(User::class);
    }
}
