<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Column extends Model {
	use HasFactory;
	protected $fillable = [
		'user_id',
		'board_id',
		'title',
		'order',
	];

	//! Relationships
	public function user(): BelongsTo {
		return $this->belongsTo( User::class);
	}
	public function board(): BelongsTo {
		return $this->belongsTo( Board::class);
	}
	public function cards(): HasMany {
		return $this->hasMany( Card::class);
	}
}
