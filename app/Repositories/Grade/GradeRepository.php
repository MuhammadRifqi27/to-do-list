<?php

namespace App\Repositories\Grade;

use LaravelEasyRepository\Repository;

interface GradeRepository extends Repository{

    public function getAll();
}
