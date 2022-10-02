<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Student;
use App\Models\StudentCourse;

class StudentListComponent extends Component
{
    use WithPagination;
    public $student,$course_name,$capital_city;
    public $upd_continent,$upd_course_name,$upd_capital_city,$cid;
    protected $listeners = ['delete','deleteCheckedCountries'];
    public $checkedStudent = [];

    public function render()
    {
        return view('livewire.student-list-component',[
            'students'=>Student::orderBy('name','asc')->paginate(5)
        ]);
    }
}
