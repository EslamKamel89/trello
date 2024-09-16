<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 */
	public function run(): void {
		// $user = User::find( 1 );
		// $columns = $user->boards[0]->columns;
		// foreach ( $columns as $column ) {
		// 	$column->cards()->createMany( [
		// 		[ 'title' => $column->title . 'Card one', 'user_id' => $column->user_id, 'order' => 1 ],
		// 		[ 'title' => $column->title . 'Card two', 'user_id' => $column->user_id, 'order' => 2 ],
		// 		[ 'title' => $column->title . 'Card three', 'user_id' => $column->user_id, 'order' => 3 ],
		// 	] );
		// }
	}
}
