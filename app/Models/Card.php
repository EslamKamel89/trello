<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Card extends Model {
	use HasFactory;
	protected $fillable = [
		'user_id',
		'column_id',
		'title',
		'notes',
		'order',
	];

	//!Relationships
	public function user(): BelongsTo {
		return $this->belongsTo( User::class);
	}
	public function column(): BelongsTo {
		return $this->belongsTo( Column::class);
	}
}
