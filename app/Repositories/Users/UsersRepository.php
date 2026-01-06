<?php

namespace App\Repositories\Users;

use LaravelEasyRepository\Repository;

interface UsersRepository extends Repository{

    public function getAll();
}
