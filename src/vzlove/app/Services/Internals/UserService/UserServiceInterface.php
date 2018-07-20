<?php

namespace App\Services\Internals\UserService;

interface UserServiceInterface
{
    public function get($params = [], $option = []);

    public function find($id, $option = []);

    public function first($params = [], $options = []);
}