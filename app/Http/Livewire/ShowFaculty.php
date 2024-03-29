<?php

namespace App\Http\Livewire;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;


class ShowFaculty extends ModalComponent
{

    // public $users;
    public $faculties;

    protected $listeners = [
        'updateShowFaculty' => 'refreshData'
    ];


    public function refreshData()
    {
        $this->faculties = User::all(); // Refresh the faculties data
    }

    public function render()
    {

        return view('livewire.show-faculty');
    }
}
