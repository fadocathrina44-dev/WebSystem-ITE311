<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Auth extends Controller
{
    // Registration
    public function register()
    {
        helper(['form']);
        $session = session();

        $db = \Config\Database::connect();

        //

        if (strtolower($this->request->getMethod()) === 'post') {
            $rules = [
                'name' => 'required|min_length[3]|max_length[50]',
                'email' => 'required|valid_email',
                'password' => 'required|min_length[6]',
                'password_confirm' => 'matches[password]'
            ];

            if (!$this->validate($rules)) {
                return view('auth/register', ['validation' => $this->validator]);
            }

            $userModel = new UserModel();

            // Check if email already exists
            $existingUser = $userModel->where('email', $this->request->getPost('email'))->first();
            if ($existingUser) {
                $session->setFlashdata('error', 'Email already exists.');
                return view('auth/register');
            }

            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'role' => 'student',
            ];

            // Try insert
            if (!$userModel->insert($data)) {
                // Show detailed DB/model errors
                echo "<h3>⚠️ Registration Failed</h3>";
                echo "<pre>";
                print_r($userModel->errors()); // validation errors
                print_r($userModel->db->error()); // database errors
                echo "</pre>";
                exit;
            }

            $session->setFlashdata('success', 'Registration successful! Please log in.');
            return redirect()->to(site_url('login'));
        }

        return view('auth/register');
    }

    // Login
public function login()
{
    helper(['form']);
    $data = [];

    if ($this->request->is('post')) {
        $rules = [
            'email'    => 'required|valid_email',
            'password' => 'required|min_length[8]|max_length[255]',
        ];

        if ($this->validate($rules)) {
            $email    = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            // Fetch user from database
            $db   = \Config\Database::connect();
            $user = $db->table('users')->where('email', $email)->get()->getRow();

            if ($user) {
                if (password_verify($password, $user->password)) {
                    // Set session data
                    $session = session();
                    $session->set([
                        'userID'     => $user->id,
                        'user_name'  => $user->name,
                        'user_email' => $user->email,
                        'user_role'  => $user->role,
                        'isLoggedIn' => true,
                    ]);

                    // Redirect based on role
                    return match ($user->role) {
                        'admin'   => redirect()->to('/admin/dashboard'),
                        'teacher' => redirect()->to('/teacher/dashboard'),
                        default   => redirect()->to('/announcements'), // students
                    };
                }

                // Password invalid
                return redirect()->back()->withInput()
                    ->with('error', 'Incorrect email or password.');
            }

            // No user found
            return redirect()->back()->withInput()
                ->with('error', 'Email not found.');
        }

        // Validation failed
        $data['validation'] = $this->validator;
    }

    return view('auth/login', $data);
}



    // Logout
    public function logout()
    {
        session()->destroy();
        return redirect()->to(site_url('login'));
    }

    // Dashboard
    public function dashboard()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to(site_url('login'));
        }

        return view('auth/dashboard', [
            'name' => $session->get('name'),
            'role' => $session->get('role'),
        ]);
    }
}