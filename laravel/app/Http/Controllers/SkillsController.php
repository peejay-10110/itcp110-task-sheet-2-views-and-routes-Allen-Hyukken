<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $skills = [
            'Languages' => [
                ['name' => 'PHP',        'level' => 85, 'icon' => '🐘'],
                ['name' => 'Python',     'level' => 75, 'icon' => '🐍'],
                ['name' => 'Java',       'level' => 65, 'icon' => '☕'],
                ['name' => 'JavaScript', 'level' => 70, 'icon' => '🌐'],
                ['name' => 'C',          'level' => 55, 'icon' => '⚙️'],
                ['name' => 'SQL',        'level' => 80, 'icon' => '🗄️'],
            ],
            'Frameworks & Libraries' => [
                ['name' => 'Laravel',    'level' => 82, 'icon' => '🔴'],
                ['name' => 'Bootstrap',  'level' => 78, 'icon' => '🅱️'],
                ['name' => 'jQuery',     'level' => 68, 'icon' => '💲'],
                ['name' => 'Tailwind',   'level' => 60, 'icon' => '🌬️'],
            ],
            'Tools & Platforms' => [
                ['name' => 'Git & GitHub',  'level' => 80, 'icon' => '🐙'],
                ['name' => 'VS Code',       'level' => 90, 'icon' => '🖊️'],
                ['name' => 'MySQL',         'level' => 78, 'icon' => '🐬'],
                ['name' => 'Figma',         'level' => 55, 'icon' => '🎨'],
                ['name' => 'XAMPP',         'level' => 85, 'icon' => '🔧'],
                ['name' => 'Postman',       'level' => 65, 'icon' => '📮'],
            ],
        ];

        $soft_skills = [
            'Problem Solving', 'Team Collaboration', 'Communication',
            'Time Management', 'Adaptability', 'Critical Thinking',
            'Attention to Detail', 'Self-Learning',
        ];

        return view('skills', compact('skills', 'soft_skills'));
    }
}
