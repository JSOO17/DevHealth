<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Comment;

class Comments extends Component
{
	public $message;

	public $comments = [];
    public function render()
    {
        return view('livewire.comments');
    }

    public function getComments($id){
    	$this->comments = Comment::where('post_id', $id);
    	return $this->comments;
    	//$this->message = "hola";
    	//return $this->message;
    }
}
