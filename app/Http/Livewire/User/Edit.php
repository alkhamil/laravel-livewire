<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\User;

class Edit extends Component
{
    public $userId;
    public $name;
    public $email;
    public $password;

    public function mount($id)
    {
        $user = User::find($id);
        if ($user) {
            $this->userId = $user->id;
            $this->name = $user->name;
            $this->email = $user->email;
            $this->password = $user->password;
        }
    }

    public function update()
    {
        $user = User::find($this->userId);
        if ($user) {
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password
            ]);
        }
        session()->flash('msg', 'This user has been updated.');
        return redirect()->route('user.index');
    }

    public function render()
    {
        return view('livewire.user.edit');
    }
}
