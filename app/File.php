<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $guarded = [];

    protected $appends = [

    	'link'

    ];

    public function getLinkAttribute()

    {


    	$config = config('app');

    	$result =$config['url'] . '/storage/app/' . $this->path;;

    	return $result; 

    }

}
