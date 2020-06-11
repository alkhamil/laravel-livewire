<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

use App\User;

class Create extends Component
{
    public $name;
    public $email;
    public $password;

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        session()->flash('msg', 'New user has been created.');
        return redirect()->route('user.index');
    }

    public function render()
    {
        return view('livewire.user.create');
    }
}
