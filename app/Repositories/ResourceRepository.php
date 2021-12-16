<?php

    namespace App\Repositories;

    abstract class ResourceRepository {
        protected $model;

        public function get() {
            return $this->model->get();
        }

        public function getById($id) {
            return $this->model->findOrFail($id);
        }

        public function getByForeignKey($name, $value) {
            return $this->model->where($name, $value)->first();
        }

        public function store($inputs) {
            return $this->model->create($inputs);
        }

        public function update($id, Array $inputs) {
            $this->getById($id)->fill($inputs)->save();
        } 

        public function destroy($id) {
            $this->getById($id)->delete();
        }

        public function getBySlug($slug) {
            return $this->model->where('slug', $slug)->first();
        }
    }