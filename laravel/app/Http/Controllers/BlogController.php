<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private function getAllPosts(): array
    {
        return [
            [
                'id'       => 1,
                'slug'     => 'getting-started-with-laravel',
                'title'    => 'Getting Started with Laravel as a Student',
                'excerpt'  => 'My experience picking up Laravel for the first time — what clicked, what didn\'t, and tips I wish I had.',
                'content'  => 'Laravel was intimidating at first. Coming from plain PHP scripts, wrapping my head around MVC, routing, and Eloquent took weeks. But once it clicked, it changed how I write code entirely. The key is to start small — build a simple CRUD app first, then layer on features like authentication and relationships.',
                'category' => 'Laravel',
                'date'     => 'March 15, 2025',
                'read_time'=> '5 min read',
                'emoji'    => '🔴',
                'tags'     => ['Laravel', 'PHP', 'Beginners'],
            ],
            [
                'id'       => 2,
                'slug'     => 'python-vs-php-for-beginners',
                'title'    => 'Python vs PHP: Which Should CS Students Learn First?',
                'excerpt'  => 'An honest comparison from a student who has used both in academic projects.',
                'content'  => 'Both languages have their place. PHP is web-native and pairs well with MySQL — perfect for building portals and management systems. Python wins for readability, data science, and scripting. My take: learn PHP with Laravel first if your goal is web development; learn Python if you want flexibility and a gentler syntax. Either way, concepts carry over.',
                'category' => 'Opinion',
                'date'     => 'January 22, 2025',
                'read_time'=> '4 min read',
                'emoji'    => '🐍',
                'tags'     => ['Python', 'PHP', 'Opinion'],
            ],
            [
                'id'       => 3,
                'slug'     => 'my-first-semester-at-tup-taguig',
                'title'    => 'My First Semester at TUP Taguig — What I Learned',
                'excerpt'  => 'Lessons from the first semester: technical, personal, and everything in between.',
                'content'  => 'TUP Taguig was a culture shock in the best way. The BTVTEICT program pushes you to think both technically and pedagogically. Beyond coding, you learn how to teach, document, and communicate your solutions. The workload is real, but the community of students pulling all-nighters together makes it worthwhile.',
                'category' => 'Life',
                'date'     => 'November 5, 2024',
                'read_time'=> '6 min read',
                'emoji'    => '🎓',
                'tags'     => ['TUP', 'Student Life', 'BTVTEICT'],
            ],
            [
                'id'       => 4,
                'slug'     => 'git-basics-every-cs-student-needs',
                'title'    => 'Git Basics Every CS Student Needs to Know',
                'excerpt'  => 'Stop losing your project files. Here\'s the Git workflow I use for every school project.',
                'content'  => 'If you\'re not using Git yet, start today. Commit often with meaningful messages, use branches for experiments, and push to GitHub regularly. The key commands: git init, git add ., git commit -m "message", git push. Set up a .gitignore for your IDE files and never commit passwords. Your future self will thank you.',
                'category' => 'Tools',
                'date'     => 'September 10, 2024',
                'read_time'=> '3 min read',
                'emoji'    => '🐙',
                'tags'     => ['Git', 'GitHub', 'Tools', 'Beginners'],
            ],
        ];
    }

    public function index()
    {
        $posts      = $this->getAllPosts();
        $categories = array_unique(array_column($posts, 'category'));

        return view('blog.index', compact('posts', 'categories'));
    }

    public function show(string $slug)
    {
        $posts = $this->getAllPosts();
        $post  = collect($posts)->firstWhere('slug', $slug);

        if (!$post) {
            abort(404, 'Post not found.');
        }

        $related = collect($posts)
            ->where('slug', '!=', $slug)
            ->take(2)
            ->values()
            ->all();

        return view('blog.show', compact('post', 'related'));
    }
}
