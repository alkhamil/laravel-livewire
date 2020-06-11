<?php

namespace App\Http\Livewire\User;

use Livewire\WithPagination;
use Livewire\Component;
use App\User;

class Index extends Component
{
    use WithPagination;
    public $search;

    protected $updatesQueryString = [];

    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
        }
        session()->flash('msg', 'This user has been destroyed.');
        return redirect()->route('user.index');
    }

    public function render()
    {
        return view('livewire.user.index', [
            'users' => $this->search === null ? User::latest()->paginate(10) : User::where('name','like','%'.$this->search.'%')->latest()->paginate(10)
        ]);
    }
}
