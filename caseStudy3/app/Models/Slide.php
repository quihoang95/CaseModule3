<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;
    protected $table = 'slides';
    protected $fillable = [
        'image'
    ];
    function getSlideImage()
    {
        return '/storage/slides/' . ltrim($this->image, '/public/slides/');
    }
    public $timestamp = false;
}
