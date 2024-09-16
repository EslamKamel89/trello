<?php

namespace App\Livewire;

use App\Models\Board;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class BoardShow extends Component {
	public ?Board $board;
	public function mount( Board $board ) {
		Gate::authorize( 'view', $board );
		$this->board = $board;


	}
	public function render() {

		return view( 'livewire.board-show', [ 'columns' => $this->board->columns ] );
	}
}
