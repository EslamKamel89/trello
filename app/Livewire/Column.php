<?php

namespace App\Livewire;

use Livewire\Component;

class Column extends Component {
	public $column;
	public function mount( $column ) {

		$this->column = $column;
	}
	public function render() {
		return view( 'livewire.column', [ 'cards' => $this->column->cards()->ordered()->get() ] );
	}
}
