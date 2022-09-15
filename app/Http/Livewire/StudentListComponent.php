<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StudentListComponent extends Component
{
    public $checkedStudent;
    public $checkedCountry;
    public $countries;

    public function render()
    {
        return view('livewire.student-list-component');
    }
}
