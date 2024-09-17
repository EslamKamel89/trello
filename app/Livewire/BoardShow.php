<?php

namespace App\Livewire;

use App\Models\Board;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class BoardShow extends Component {
	public ?Board $board;
	public function mount( Board $board ) {
		Gate::authorize( 'view', $board );
		$this->board = $board;


	}
	public function render() {

		return view( 'livewire.board-show', [ 'columns' => $this->board->columns()->ordered()->get() ] );
	}

	public function sorted( array $items ) {
		// info( 'order[1]', [ $items[0]['order'] ] );
		// info( 'value[1]', [ (int) str( $items[0]['value'] )->explode( ' ' )[1] ] );

		// info( 'order[2]', [ $items[1]['order'] ] );
		// info( 'value[2]', [ (int) str( $items[1]['value'] )->explode( ' ' )[1] ] );

		// info( 'order[3]', [ $items[2]['order'] ] );
		// info( 'value[3]', [ (int) str( $items[2]['value'] )->explode( ' ' )[1] ] );

		// info( collect( $items )->pluck( 'value' )
		// 	->map( fn( $value, $key ) => (int) str( $value )->explode( ' ' )[1] ) );

		$order = collect( $items )->pluck( 'value' )
			->map( fn( $value, $key ) => (int) str( $value )->explode( ' ' )[1] );
		\App\Models\Column::setNewOrder( $order, 1, 'id', function (Builder $query) {
			return $query->where( 'user_id', auth()->id() );
		} );
	}
}
