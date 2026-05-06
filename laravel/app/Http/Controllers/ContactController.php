<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact_info = [
            ['icon' => '📧', 'label' => 'Email',    'value' => 'allencarl.odang@tup.edu.ph', 'link' => 'mailto:allencarl.odang@tup.edu.ph'],
            ['icon' => '📍', 'label' => 'Location', 'value' => 'Taguig City, Metro Manila, Philippines', 'link' => null],
            ['icon' => '🏫', 'label' => 'School',   'value' => 'Technological University of the Philippines – Taguig', 'link' => 'https://tup.edu.ph'],
            ['icon' => '💼', 'label' => 'GitHub',   'value' => 'github.com/hyukken',  'link' => 'https://github.com/hyukken'],
        ];

        return view('contact', compact('contact_info'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|min:2|max:100',
            'email'   => 'required|email|max:150',
            'subject' => 'required|string|min:3|max:200',
            'message' => 'required|string|min:10|max:2000',
        ]);

        // In a real app, you'd use Mail::to(...)->send(new ContactMail($validated));
        // For now, we flash a success message.
        session()->flash('success', 'Thanks for reaching out, ' . $validated['name'] . '! I\'ll get back to you soon. 🚀');

        return redirect()->route('contact');
    }
}
