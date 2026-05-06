<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $timeline = [
            [
                'year'  => '2022',
                'title' => 'Started BTVTEICT at TUP Taguig',
                'desc'  => 'Enrolled in the Bachelor of Technical-Vocational Teacher Education in ICT program, majoring in Computer Programming.',
            ],
            [
                'year'  => '2023',
                'title' => 'First Web Development Project',
                'desc'  => 'Built my first full-stack application — a simple Student Record System using PHP and MySQL.',
            ],
            [
                'year'  => '2024',
                'title' => 'Learned Laravel Framework',
                'desc'  => 'Dived deep into Laravel, mastering MVC architecture, Eloquent ORM, Blade templating, and RESTful APIs.',
            ],
            [
                'year'  => '2025',
                'title' => 'Expanded to Python & Java',
                'desc'  => 'Extended my skill set with Python for data processing and Java for desktop application development.',
            ],
            [
                'year'  => '2026',
                'title' => 'Senior Year — Future Ahead',
                'desc'  => 'Preparing for internship applications, thesis development, and leveling up as a full-stack developer.',
            ],
        ];

        $hobbies = [
            ['emoji' => '🎮', 'label' => 'Gaming'],
            ['emoji' => '💻', 'label' => 'Coding'],
            ['emoji' => '🎵', 'label' => 'Music'],
            ['emoji' => '📚', 'label' => 'Reading'],
            ['emoji' => '🍜', 'label' => 'Food'],
            ['emoji' => '🏀', 'label' => 'Basketball'],
        ];

        return view('about', compact('timeline', 'hobbies'));
    }
}
