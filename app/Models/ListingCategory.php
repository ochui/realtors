<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingCategory extends Model {
    use HasFactory;

    protected $guarded = ['id'];
    protected $appends = ['createdAtHuman'];

    public function listings() {
        return $this->hasMany( Listing::class );
    }

    public function parent() {
        return $this->hasMany( ListingCategory::class, 'parent_category_id' );
    }

    public function children() {
        return $this->belongsTo( ListingCategory::class, 'parent_category_id' );
    }

    public function getCreatedAtHumanAttribute() {
        $carbonDate = new Carbon( $this->updated_at );
        return $carbonDate->diffForHumans();
    }

    public static function getNonEmptyOnly(): Collection {
        return ListingCategory::whereHas( 'listing' )->active()->get();
    }

    public function scopeActive( $query ) {
        return $query->where( 'is_active', 1 );
    }
}

