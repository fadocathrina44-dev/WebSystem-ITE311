<?php

namespace App\Models;

use CodeIgniter\Model;

class AnnouncementModel extends Model
{
    protected $table            = 'announcements';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    // Results as associative arrays (you can also use 'object')
    protected $returnType       = 'array';

    protected $allowedFields    = ['title', 'content', 'created_at'];

    // If you want CI4 to auto-manage timestamps, set this to true
    protected $useTimestamps    = false; 
    protected $createdField     = 'created_at';
    protected $updatedField     = ''; // Not used (no updated_at column)
    protected $deletedField     = ''; // Not used (no deleted_at column)

    // Optional: validation rules
    protected $validationRules = [
        'title'   => 'required|max_length[255]',
        'content' => 'permit_empty',
    ];

    protected $validationMessages = [
        'title' => [
            'required'    => 'The announcement title is required.',
            'max_length'  => 'The title cannot exceed 255 characters.',
        ],
    ];

    // Optional: clean insert/update behavior
    protected $skipValidation = false;
}
