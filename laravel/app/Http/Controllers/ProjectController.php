<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private function getAllProjects(): array
    {
        return [
            [
                'id'          => 1,
                'title'       => 'Student Information System',
                'slug'        => 'student-information-system',
                'category'    => 'Web',
                'description' => 'A comprehensive full-stack web application for managing student records, grades, and enrollment. Built with Laravel MVC architecture and MySQL database.',
                'long_desc'   => 'This system allows administrators to manage students, courses, faculty, and grade submissions efficiently. Features include role-based access control, grade reports, and enrollment management dashboard.',
                'tech'        => ['Laravel', 'MySQL', 'Bootstrap', 'jQuery', 'Blade'],
                'icon'        => '🎓',
                'status'      => 'Completed',
                'year'        => '2024',
                'features'    => ['CRUD for students & courses', 'Role-based authentication', 'Grade computation & reports', 'Responsive dashboard'],
            ],
            [
                'id'          => 2,
                'title'       => 'Inventory Management App',
                'slug'        => 'inventory-management-app',
                'category'    => 'Desktop',
                'description' => 'Desktop application for tracking products, stock levels, suppliers, and generating sales reports.',
                'long_desc'   => 'A Python-based desktop app using Tkinter for the GUI. Manages product inventory with CRUD operations, generates PDF reports, and tracks sales history through SQLite.',
                'tech'        => ['Python', 'SQLite', 'Tkinter', 'ReportLab'],
                'icon'        => '📦',
                'status'      => 'Completed',
                'year'        => '2024',
                'features'    => ['Product tracking', 'Supplier management', 'PDF report generation', 'Sales analytics'],
            ],
            [
                'id'          => 3,
                'title'       => 'Personal Portfolio Website',
                'slug'        => 'personal-portfolio-website',
                'category'    => 'Web',
                'description' => 'This multi-page Laravel portfolio showcasing my work, skills, and academic journey.',
                'long_desc'   => 'Built from scratch using Laravel, Blade templating, and custom CSS. Features 10+ routes, 8 views, contact form with validation, and a clean dark cyberpunk aesthetic.',
                'tech'        => ['Laravel', 'Blade', 'CSS3', 'JavaScript'],
                'icon'        => '🌐',
                'status'      => 'Completed',
                'year'        => '2026',
                'features'    => ['10+ Laravel routes', '8+ Blade views', 'Contact form', 'Responsive design'],
            ],
            [
                'id'          => 4,
                'title'       => 'Online Voting System',
                'slug'        => 'online-voting-system',
                'category'    => 'Web',
                'description' => 'Secure web-based voting system for student council elections with real-time result tallying.',
                'long_desc'   => 'Developed for TUP Taguig student organizations. Implements OTP verification, one-vote enforcement, and live result charts using Chart.js.',
                'tech'        => ['PHP', 'MySQL', 'Chart.js', 'Bootstrap'],
                'icon'        => '🗳️',
                'status'      => 'In Progress',
                'year'        => '2025',
                'features'    => ['OTP email verification', 'One-vote enforcement', 'Live results chart', 'Admin dashboard'],
            ],
            [
                'id'          => 5,
                'title'       => 'Library Management System',
                'slug'        => 'library-management-system',
                'category'    => 'Web',
                'description' => 'Web-based system to manage book catalogues, borrowing records, and due date notifications.',
                'long_desc'   => 'A Laravel-powered library system that handles book cataloguing, member management, borrow/return tracking, and automated email reminders for due dates.',
                'tech'        => ['Laravel', 'MySQL', 'Alpine.js', 'Tailwind'],
                'icon'        => '📚',
                'status'      => 'Completed',
                'year'        => '2025',
                'features'    => ['Book catalogue management', 'Borrow & return tracking', 'Email due-date reminders', 'Member portal'],
            ],
            [
                'id'          => 6,
                'title'       => 'Weather App',
                'slug'        => 'weather-app',
                'category'    => 'Web',
                'description' => 'A clean weather application that fetches real-time data from a public API and displays forecasts.',
                'long_desc'   => 'Front-end JavaScript project consuming the OpenWeatherMap API. Shows current conditions, 5-day forecasts, and location-based auto-detection.',
                'tech'        => ['HTML5', 'CSS3', 'JavaScript', 'OpenWeatherMap API'],
                'icon'        => '🌤️',
                'status'      => 'Completed',
                'year'        => '2023',
                'features'    => ['Real-time weather data', '5-day forecast', 'Geolocation support', 'City search'],
            ],
        ];
    }

    public function index(Request $request)
    {
        $projects   = $this->getAllProjects();
        $categories = array_unique(array_column($projects, 'category'));
        $filter     = $request->get('category', 'All');

        if ($filter !== 'All') {
            $projects = array_filter($projects, fn($p) => $p['category'] === $filter);
        }

        return view('projects.index', compact('projects', 'categories', 'filter'));
    }

    public function show(int $id)
    {
        $projects = $this->getAllProjects();
        $project  = collect($projects)->firstWhere('id', $id);

        if (!$project) {
            abort(404, 'Project not found.');
        }

        $related = collect($projects)
            ->where('category', $project['category'])
            ->where('id', '!=', $id)
            ->take(2)
            ->values()
            ->all();

        return view('projects.show', compact('project', 'related'));
    }
}
