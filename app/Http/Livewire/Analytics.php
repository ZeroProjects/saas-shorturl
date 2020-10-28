<?php

namespace App\Http\Livewire;

use App\Models\Link;
use Livewire\Component;

class Analytics extends Component
{
    protected $listeners = ['linkCreated' => '$refresh'];

    public function deleteLink($id)
    {
        Link::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.analytics', [
            'links' => auth()->user()->links()->latest()->get()
        ]);
    }
}

/*
<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Analytics extends Component
{
    public function render()
    {
        return view('livewire.analytics');
    }
}
*/