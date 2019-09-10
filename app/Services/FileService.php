<?php

namespace App\Services;

use app\File;
use App\Repositories\FileRepository;
use Illuminate\Database\Eloquent\Model;


class FileService
{


    protected $file_repository;

    public function __construct(FileRepository $file_repository)
    {

        $this->file_repository = $file_repository;

    }

    public function store (Model $owner, array $data) : File
    {
        
    	$model_data = [

    		'name' => $data['name'],
    		'mime' => $data['mime'],
    		'owner_id'=> $owner->id,
    		'owner_type'=> get_class($owner),

    	];

    	$dir = sha1(microtime());
    	$content = base64_decode($data['content']);
    	mkdir(

    		storage_path('app/' . $dir),
    		0777,
    		true
    	);

    	file_put_contents(
    		storage_path('app/' . $dir . '/' . $model_data['name']), $content);
    	$model_data['path'] = $dir . '/' . $model_data['name'];

        return $this->file_repository->store($model_data);
    }

}
