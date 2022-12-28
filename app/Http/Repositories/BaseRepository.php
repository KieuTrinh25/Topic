<?php

namespace App\Http\Repositories;

abstract class BaseRepository implements BaseRepositoryInterface{
    protected $model;

    public function __construct()
    {
        $this->model = $this->setModel();
    }

    public abstract function getModel();

    public function setModel(){
        return $this->model = app()->make(
            $this->getModel()
        );
    }

    public function getAll(){
        return $this->model->all();
    }

    public function find($id){
        return $this->model->find($id);
    }
    public function create(array $attributes){
        return $this->model->create($attributes);
    }
    public function update($id, array $attributes){
        $result = $this->model->find($id);
        if($result){
            $result->update($attributes);
            return $result;
        }
        return false;
    }
    public function delete($id){
        $result = $this->model->find($id);
        if($result){
            $result->delete();
            return true;
        }
        return false;
    }

    public function findFirstByField($field, $value){
        return $this->model->where($field , '=' , $value);
    }

    public function findByField($field, $operator, $value)
    {
        return $this->model->where($field , $operator , $value);
    }
}