<?php

namespace App\Http\Repositories;

interface BaseRepositoryInterface{
    public function getAll();
    public function find($id);
    public function create(array $attributes);
    public function update($id, array $attributes);
    public function delete($id);
    public function findFirstByField($field, $value);
    public function findByField($field, $operator, $value);
}