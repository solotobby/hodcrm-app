<?php

namespace App\Livewire\System;

use App\Models\Denomination;
use Livewire\Component;

class ListDenomination extends Component
{
    public function render()
    {
        $denominations = Denomination::orderBy('created_at', 'DESC')->get();
        return view('livewire.system.list-denomination', ['denominations' => $denominations]);
    }
}
