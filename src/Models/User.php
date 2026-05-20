<?php

namespace App\Models;

use App\Config\Database;
use PDO;

class User
{
  private PDO $db;

  public function __construct()
  {
    $this->db = Database::getInstance()->getConnection();
  }

  public function getAll(): array
  {
    $query = "SELECT  users.id, users.nom, users.email, roles.nom as role_nom
                 FROM users
                 JOIN roles ON users.roleId = roles.id";
    $stmt = $this->db->query($query);

    return $stmt->fetchAll();
  }
}
