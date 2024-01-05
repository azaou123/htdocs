<?php
// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;


use App\Models\Teacher;
use App\Models\Student;
use App\Models\Exchange;
use App\Models\Partner;
use App\Models\Workshop;
use App\Models\Project;
use App\Models\Fablab;
use App\Models\Program;
use App\Models\Internship;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) { 
            $admin = Auth::guard('admin')->user();
            session(['admin' => [
                'name' => $admin->name,
                'email' => $admin->email,
                'photo' => $admin->photo
            ]]);
            return redirect()->intended('admin'); 
        }
        return back()->withErrors([
            'email' => 'password or email is incorrect.',
        ]);
    }
    public function logout()
    {
        Auth::guard('admin')->logout();

        return view('front.login.login'); 
    }
    public function index()
    {
        return view('back.index');
    }

    public function students()
    {
        $students = Student::all();
        return view('back.students',compact('students'));
    }

    public function teachers()
    {
        $teachers = Teacher::all();
        return view('back.teachers',compact('teachers'));
    }

    public function exchanges()
    {
        $exchanges = Exchange::all();
        return view('back.exchanges',compact('exchanges'));
        
    }

    public function workshops()
    {
        $partners = Partner::all();
        $workshops = Workshop::all();

        return view('back.workshops',compact('partners', 'workshops'));
    }

    public function projects()
    {
        $projects = Project::all();
        return view('back.projects', compact('projects'));
    }

    public function fablabs()
    {
        $fablabs = Fablab::all();
        return view('back.fablabs', compact('fablabs'));
    }

    public function programs()
    {
        $programs = Program::all();
        $teachers=Teacher::all();
        return view('back.programs', compact('programs','teachers'));
        
    }
    public function partners()
    {
        $partners = Partner::all();
        return view('back.partners',compact('partners'));
    }
    public function internships()
    {
        $internships = Internship::all();
        $partners=Partner::all();
        return view('back.internships',compact('internships','partners'));
    }
}
