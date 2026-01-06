<?php

namespace App\Services\Users;

use LaravelEasyRepository\BaseService;

interface UsersService extends BaseService{
    public function getAll();
}
