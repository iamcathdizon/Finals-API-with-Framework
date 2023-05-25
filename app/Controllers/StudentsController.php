<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentsModel;

class StudentsController extends BaseController
{
    public function index()
    {   
        $fetchStudent = new StudentsModel();
        $data['students'] = $fetchStudent->findAll();

        return view('students/list', $data);
    }

    public function createStudent()
    {
        $data['studentId'] = '20000_'.uniqid();
        return view('students/add', $data);
    }

    public function storeStudent()
    {
        //Store the student
        $insertStudent = new StudentsModel();

        $data = array(
            'id' => $this->request->getpost('studentId'),
            'student_name' => $this->request->getpost('studentName'),
            'student_lastname' => $this->request->getpost('studentLastname'),
            'student_contact' => $this->request->getpost('studentContact'),
            'student_course' => $this->request->getpost('studentCourse'),
            'student_year' => $this->request->getpost('studentYear'),
            'student_section' => $this->request->getpost('studentSection'),
        );
        $insertStudent->insert($data);

        return redirect()->to('/students')->with('success','Student Added Successfully!');
    }

    public function editStudent($id)
    {
        $fetchStudent = new StudentsModel();
        $data['student'] = $fetchStudent->where('id',$id)->first();
        return view('students/edit',$data);
    }

    public function updateStudent($id)
    {
        $updateStudent = new StudentsModel();
        //Update the student
        $data = array (
            'id' => $this->request->getpost('studentId'),
            'student_name' => $this->request->getpost('studentName'),
            'student_lastname' => $this->request->getpost('studentLastname'),
            'student_contact' => $this->request->getpost('studentContact'),
            'student_course' => $this->request->getpost('studentCourse'),
            'student_year' => $this->request->getpost('studentYear'),
            'student_section' => $this->request->getpost('studentSection'),
        );
        $updateStudent->update($id, $data);

        return redirect()->to('/students')->with('success', 'Student Updated Successfully!');
    }

    public function deleteStudent($id)
    {
        //Delete the student 
        $deleteStudent = new StudentsModel();
        $deleteStudent->delete($id);

        return redirect()->to('/students')->with('success','Student Deleted Successfully!');
    }
}
