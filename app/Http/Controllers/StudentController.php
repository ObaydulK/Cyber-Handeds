<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Storage;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image'=> 'nullable|image|mimes:jpeg,png,jep,gif|max:5120',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students',
            'phone' => 'required|string|max:11',
            'position' => 'required|string|max:255',
            'gender' => 'required| in:Male,Female,Other',
            'bio' => 'required|string', 
        ]);

        $imagePath = null;
        if($request -> hasFile('image')){
            $imagePath = $request -> file('image')->store('student_images', 'public');
        }
        
        $student = Student::create([
            'image'=> $imagePath,
            'name'=> $request -> name,
            'email'=> $request -> email,
            'phone'=> $request -> phone,
            'position' => $request -> position,
            'gender'=> $request -> gender,
            'bio'=>$request->bio,
        ]);

        return redirect()->route('students.index')->with('success', 'Student added successfully.');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'phone' => 'required|string|max:15',
            'position' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female,Other',
            'bio' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            if ($student->image) {
                Storage::disk('public')->delete($student->image);
            }
            $student->image = $request->file('image')->store('students', 'public');
        }

        $student->update($request->only(['name', 'email', 'phone', 'position', 'gender', 'bio']));

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
