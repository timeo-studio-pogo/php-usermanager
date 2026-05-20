<?php

namespace App\Controllers;

use App\Models\User;

class HomeController
{
  public function index(): void
  {
    $userModel = new User();
    $users = $userModel->getAll();

    require_once __DIR__ . '/../Views/home.php';
  }

  public function edit(): void
  {
    require_once __DIR__ . '/../Views/edit.php';
  }
}
