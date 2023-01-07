<?php
namespace App\Services\Klass\Tasks;

use App\Http\Repositories\Klass\KlassRepository;
use App\Services\Task;

class UpdateKlassTask extends Task{

    private $repository;

    public function __construct(KlassRepository $repository)
    {
        $this->repository = $repository;
    }

    public function update($id,array $attributes){
        return $this->repository->update($id,$attributes);
    }
 

}