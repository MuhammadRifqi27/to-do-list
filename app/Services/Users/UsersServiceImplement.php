<?php

namespace App\Services\Users;

use LaravelEasyRepository\ServiceApi;
use App\Repositories\Users\UsersRepository;

class UsersServiceImplement extends ServiceApi implements UsersService{

    /**
     * set title message api for CRUD
     * @param string $title
     */
     protected string $title = "";
     /**
     * uncomment this to override the default message
     * protected string $create_message = "";
     * protected string $update_message = "";
     * protected string $delete_message = "";
     */

     /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
     protected UsersRepository $mainRepository;

    public function __construct(UsersRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    public function getAll()
    {
        return $this->mainRepository->getAll();
    }
}
