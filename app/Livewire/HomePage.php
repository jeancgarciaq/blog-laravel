<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout; // <-- Make sure to import this

// This line tells Livewire to use your main layout file for this component.
#[Layout('layouts.app')]
class HomePage extends Component
{
    public function render()
    {
        return view('livewire.home-page');
    }
}