<?php

namespace App\Contracts;

use App\Models\Post;

Interface PostInterface{
    public function all(): Collection;
    public function find($id): Post;
    public function create(array $data): Post;
    public function update($id, array $data): Post;
    public function delete($id): bool;
}