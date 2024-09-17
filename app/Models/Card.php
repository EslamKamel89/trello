<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Card extends Model implements Sortable {
	use SortableTrait;
	use HasFactory;

	protected $fillable = [ 
		'user_id',
		'column_id',
		'title',
		'notes',
		'order',
	];

	public $sortable = [ 
		'order_column_name' => 'order',
		'sort_when_creating' => true,
	];

	//!Relationships
	public function user(): BelongsTo {
		return $this->belongsTo( User::class);
	}
	public function column(): BelongsTo {
		return $this->belongsTo( Column::class);
	}
}
