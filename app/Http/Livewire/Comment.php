<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Comment extends Component
{
    public $record,$subject,$comment,$product_id,$rate;


    public function mount($id)
    {
        $this->record=Product::findOrFail($id);
        $this->product_id=$this->record->id;
    }
    public function render()
    {
        return view('livewire.comment');
    }
    private function resetInput()
    {
        $this->subject=null;
        $this->comment=null;
        $this->rate=null;
        $this->product_id=null;
        $this->IP=null;
    }

    public function store()
    {
        $this->validate([
            'subject'=>'required|min:5',
            'comment'=>'required|min:10',
            'rate'=>'required'
        ]);

        \App\Models\Comment::create([
           'product_id'=>$this->product_id,
           'user_id'=>Auth::id(),
           'IP'=>$_SERVER['REMOTE_ADDR'],
           'rate'=>$this->rate,
           'subject'=>$this->subject,
           'comment'=>$this->comment
        ]);
        session()->flash('message','Comment send succesfully');
        $this->resetInput();
    }
}
