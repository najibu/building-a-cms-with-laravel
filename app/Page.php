<?php

namespace SundaySim;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'name', 'url', 'content'];
    
}
