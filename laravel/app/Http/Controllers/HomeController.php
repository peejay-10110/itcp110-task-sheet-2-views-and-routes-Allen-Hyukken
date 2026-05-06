<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featured_projects = [
            [
                'id'          => 1,
                'title'       => 'Student Information System',
                'description' => 'A full-stack web app to manage student records, grades, and enrollment built with Laravel & MySQL.',
                'tech'        => ['Laravel', 'MySQL', 'Bootstrap'],
                'icon'        => '🎓',
            ],
            [
                'id'          => 2,
                'title'       => 'Inventory Management App',
                'description' => 'Desktop application for tracking products, stock levels, and sales reports using Python & SQLite.',
                'tech'        => ['Python', 'SQLite', 'Tkinter'],
                'icon'        => '📦',
            ],
            [
                'id'          => 3,
                'title'       => 'Personal Portfolio Website',
                'description' => 'This very site — a responsive, multi-page Laravel portfolio showcasing my skills and projects.',
                'tech'        => ['Laravel', 'Blade', 'CSS3'],
                'icon'        => '🌐',
            ],
        ];

        $stats = [
            ['label' => 'Projects Built',      'value' => '12+'],
            ['label' => 'Technologies Learned', 'value' => '15+'],
            ['label' => 'Years of Study',       'value' => '3'],
            ['label' => 'Cups of Coffee',       'value' => '∞'],
        ];

        return view('home', compact('featured_projects', 'stats'));
    }
}
