<?php
namespace App\Services\Klass\Tasks;

use App\Http\Repositories\Klass\KlassRepository;
use App\Services\Task;

class DeleteKlassTask extends Task{

    private $repository;

    public function __construct(KlassRepository $repository)
    {
        $this->repository = $repository;
    }

    public function delete($id){
        return $this->repository->delete($id);
    }

}