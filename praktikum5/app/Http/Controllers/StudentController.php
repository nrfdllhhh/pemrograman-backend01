<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   
    
    public function index()
    {
        $student = Student::all();

        $data = [
            'message' => 'Get all student',
            'data' => $student
        ];
        return response()->json($data, 200);
    }

    public function store(request $request) {
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan,

        ];
        $student = Student::create($input);

        $data = [
            'message'=> 'Get all student',
            'data' => $student
        ];
        return response()->json($data,201);
    }

    public function update(request $request, string $id){
        $student = Student::find($id);

        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        $student->update($request->all());

        $data = [
            'message' => 'Student updated successfully',
            'data' => $student
        ];
        return response()->json($data, 200);
        
    }
    public function destroy(string $id){
        $student = Student::find($id);

        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        $student->delete();

        return response()->json(['message' => 'Student deleted successfully'], 200);
    }
    public function show($id) {
        $student = Student::find($id);
    
        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }
    
        $data = [
            'message' => 'Get student details',
            'data' => $student
        ];
        
        return response()->json($data, 200);
    }
    

    }


