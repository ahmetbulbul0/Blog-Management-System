<?php

namespace App\Interfaces\Repositories;

interface RoleRepositoryInterface
{
    public function getAll();
    public function findById($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function findByName($name);
    public function getRoleUsers($roleId);
    public function getUsersCount($roleId);
}