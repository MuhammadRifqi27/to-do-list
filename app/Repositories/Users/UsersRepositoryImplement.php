<?php

namespace App\Repositories\Users;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use LaravelEasyRepository\Implementations\Eloquent;

class UsersRepositoryImplement extends Eloquent implements UsersRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected User $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        $query = DB::table('users')
            ->leftJoin('grade', 'users.grade_id', '=', 'grade.id')
            ->select('users.*', 'grade.name as grade_name')
            ->get();
        return $query;
    }

    // Write something awesome :)
}
