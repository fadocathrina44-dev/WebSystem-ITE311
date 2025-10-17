<?php

namespace App\Controllers;

use App\Models\AnnouncementModel;
use CodeIgniter\Controller;

class Announcement extends Controller
{
    protected $announcementModel;

    public function __construct()
    {
        // Load model once in the constructor
        $this->announcementModel = new AnnouncementModel();
    }

    public function index()
    {
        // Fetch all announcements ordered by created_at DESC
        $announcements = $this->announcementModel
            ->orderBy('created_at', 'DESC')
            ->findAll();

        // ✅ Pass data directly to the view (instead of storing in session)
        $data = [
            'announcements' => $announcements,
        ];

        // Render announcement.php view
        return view('announcement', $data);
    }
}
