<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $education = [
            [
                'degree'      => 'Bachelor of Technical-Vocational Teacher Education in ICT',
                'major'       => 'Major in Computer Programming',
                'school'      => 'Technological University of the Philippines – Taguig',
                'year'        => '2022 – Present',
                'description' => 'Studying systems analysis, programming, database management, web development, and pedagogy.',
            ],
            [
                'degree'      => 'Senior High School – STEM Track',
                'major'       => '',
                'school'      => 'Taguig Science High School',
                'year'        => '2020 – 2022',
                'description' => 'Graduated with honors. Science, Technology, Engineering, and Mathematics strand.',
            ],
        ];

        $experience = [
            [
                'role'    => 'Freelance Web Developer',
                'company' => 'Self-Employed',
                'year'    => '2024 – Present',
                'bullets' => [
                    'Built and deployed small business websites using Laravel and Bootstrap.',
                    'Developed CRUD-based management systems for local clients.',
                    'Maintained and updated existing PHP/MySQL web applications.',
                ],
            ],
            [
                'role'    => 'ICT Student Assistant',
                'company' => 'TUP Taguig – College of Industrial Technology',
                'year'    => '2023 – 2024',
                'bullets' => [
                    'Assisted faculty in setting up computer laboratory environments.',
                    'Provided technical support to students during programming labs.',
                    'Helped document and maintain laboratory project repositories.',
                ],
            ],
        ];

        return view('resume', compact('education', 'experience'));
    }

    public function certifications()
    {
        $certifications = [
            [
                'title'   => 'NC II — Computer Systems Servicing',
                'issuer'  => 'TESDA',
                'date'    => '2022',
                'emoji'   => '🖥️',
                'status'  => 'Certified',
            ],
            [
                'title'   => 'Introduction to Web Development',
                'issuer'  => 'freeCodeCamp',
                'date'    => '2023',
                'emoji'   => '🌐',
                'status'  => 'Certified',
            ],
            [
                'title'   => 'PHP & MySQL for Beginners',
                'issuer'  => 'Udemy',
                'date'    => '2023',
                'emoji'   => '🐘',
                'status'  => 'Certified',
            ],
            [
                'title'   => 'Laravel: From Scratch',
                'issuer'  => 'Laracasts',
                'date'    => '2024',
                'emoji'   => '🔴',
                'status'  => 'Completed',
            ],
            [
                'title'   => 'Python for Everybody',
                'issuer'  => 'Coursera – University of Michigan',
                'date'    => '2024',
                'emoji'   => '🐍',
                'status'  => 'Completed',
            ],
            [
                'title'   => 'Git & GitHub Essentials',
                'issuer'  => 'GitHub Learning Lab',
                'date'    => '2024',
                'emoji'   => '🐙',
                'status'  => 'Certified',
            ],
        ];

        return view('certifications', compact('certifications'));
    }
}
