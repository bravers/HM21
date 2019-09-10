<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $with = [
    	'file'
    ];

    public function file()
    	{
    		return $this->morphOne(File::class,'owner');
    	}
}
