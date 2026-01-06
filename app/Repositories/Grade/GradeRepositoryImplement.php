<?php

namespace App\Repositories\Grade;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\Grade;
use Illuminate\Support\Facades\DB;

class GradeRepositoryImplement extends Eloquent implements GradeRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected Grade $model;

    public function __construct(Grade $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        $query = DB::table('grade')->get();
        return $query;
    }
}
