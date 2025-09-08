<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
protected $table = 'user1'; // correct table name
protected $primaryKey = 'id';

protected $allowedFields = ['name', 'email', 'password', 'role'];
protected $useTimestamps = true; // since you have created_at, updated_at
protected $createdField = 'created_at';
protected $updatedField = 'updated_at';
}