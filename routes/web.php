<?php

use App\Livewire\BoardShow;
use Illuminate\Support\Facades\Route;

Route::view( '/', 'welcome' );

Route::view( 'dashboard', 'dashboard' )
	->middleware( [ 'auth', 'verified' ] )
	->name( 'dashboard' );

Route::view( 'profile', 'profile' )
	->middleware( [ 'auth' ] )
	->name( 'profile' );

Route::get( '/board/{board}', BoardShow::class);

require __DIR__ . '/auth.php';
