<?php

namespace App\Livewire\System;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class CreateUser extends Component
{

    public $roles;
    public $name;
    public $email;
    public $role;
    public $phone;

    public function mount(){
        
        $this->roles = Role::select(['id', 'name'])->get();
       
    }
    public function submitUser(){

        $validatedData = $this->validate([
            'name' => 'required|string|min:3|max:50',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric|digits_between:10,15|unique:users,phone',
            'role' => 'required|string',
        ]);

       

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'password' => bcrypt($this->generatePassword(10)),
        ]);

        $user->assignRole($validatedData['role']);
        session()->flash('message', 'User created successfully.');
        $this->reset();
        return redirect()->route('create.user');
        // ->with('success','User created successfully')


    }

    private function generatePassword($length){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }

        return $randomString;
    }
    public function render()
    {
        $roles = Role::select(['id', 'name'])->get();
        return view('livewire.system.create-user', ['roles' => $roles]);
    } 
}
