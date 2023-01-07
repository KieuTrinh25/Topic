<?php

namespace App\Http\Repositories\Klass;

interface KlassRepositoryInterface{
    public function list();
    public function getKlassBySlug($slug);

}
