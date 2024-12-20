<?php

namespace App\Contracts;

use App\Models\Category;

Interface CategoryInterface{
    public function all(): Collection;
    public function find($id): Category;
    public function create(array $data): Category;
    public function update($id, array $data): Category;
    public function delete($id): bool;

}