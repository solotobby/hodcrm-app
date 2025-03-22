<?php

namespace App\Livewire\System;

use App\Models\Denomination;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CreateDenomination extends Component
{

    public $name;
    public $email;
    public $address;
    public $phone;
    public $description;


    public function createDenomination(){

         $validatedData = $this->validate([
            'name' => 'required|string|min:3|max:50',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits_between:10,15',
            'address' => 'required|string|min:5|max:100',
            'description' => 'required|string|min:10|max:500',
        ]);

        $validatedData['user_id'] = Auth::id();
        $validatedData['unique'] = $this->generateUniqueCode($this->name)['unique'];
        $validatedData['short_name'] = $this->generateUniqueCode($this->name)['initial'];

       
        Denomination::create([
            'user_id' => Auth::id(),
            'unique' => $this->generateUniqueCode($this->name)['unique'],
            'short_name' => $this->generateUniqueCode($this->name)['initial'],
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
            'description' => $validatedData['description'],
        ]);
        session()->flash('message', 'Denomination successfully created.');
        $this->reset();


    }

    public function generateUniqueCode($name) {
       
        $words = explode(' ', trim($name));
        
       
        $initials = '';
        foreach ($words as $word) {
            $initials .= strtoupper(substr($word, 0, 1));
        }
    
        // Generate a random 4-digit number
        $randomNumber = rand(1000, 9999);
    
        // Combine initials with the random number
        $uniqueCode = $initials . $randomNumber;
    
        $data['initial'] = $initials;
        $data['unique'] = $uniqueCode;
    
        return $data;
    }

    public function render()
    {
        return view('livewire.system.create-denomination');
    }
}
