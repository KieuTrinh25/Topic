<?php
namespace App\Services\Klass\Tasks;

use App\Http\Repositories\Klass\KlassRepository;
use App\Services\Task;

class ShowKlassTask extends Task
{
    private $repository;

    public function __construct(KlassRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->list();
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }
    public function getKlassBySlug($slug)
    {
        return $this->repository->getKlassBySlug($slug);
    }
}
