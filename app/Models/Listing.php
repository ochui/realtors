<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\CommonMarkConverter;

class Listing extends Model {
    use HasFactory;

    protected $guarded = ['id'];
    protected $dates = ['published_at'];

    public function user() {
        return $this->belongsTo( User::class );
    }


    public function category() {
        return $this->belongsTo( Category::class );
    }


    public function images() {
        return $this->belongsToMany( Image::class, 'listing_image' );
    }

    public function keywords() {
        return $this->belongsToMany( Keyword::class, 'listing_keyword' );
    }

    public function hits() {
        return $this->hasMany( HitLogger::class );
    }

    public function scopeNotDeleted( Builder $builder ) {
        return $builder->where( 'is_deleted', 0 );
    }

    public function scopePublished( Builder $builder ) {
        return $builder->where( 'is_published', 1 );
    }

    public function getPublishedAtHumanAttribute() {
        return $this->published_at->diffForHumans();
    }

    public function getCreatedAtHumanAttribute() {
        return $this->created_at->diffForHumans();
    }

    public function getUpdatedAtHumanAttribute() {
        return $this->updated_at->diffForHumans();
    }

    public function getCategoryNameAttribute() {
        return optional( $this->category )->name;
    }

    public function getContentAsHtmlAttribute() {
        $converter = new CommonMarkConverter();
        echo $converter->convertToHtml( $this->content );
    }

    public static function getPaginate( Request $request ) {
        $perPage = config( 'listing.item_per_page' );

        $categoryAlias = $request->route( 'listingAlias' );
        $keywordName = $request->route( 'keywordName' );

        if ( !is_null( $categoryAlias ) ) {
            $category = ListingCategory::where( 'alias', $categoryAlias )->first();
            if ( is_null( $category ) ) {
                return collect( [] );
            }
            $listingQuery = Listing::where( 'category_id', $category->id );
        } elseif ( !is_null( $keywordName ) ) {
            $keyword = Keyword::where( 'name', $keywordName )->first();
            if ( is_null( $keyword ) ) {
                return collect( [] );
            }
            $articleIds = $keyword->articles->pluck( 'id' )->toArray();
            $listingQuery = Listing::whereIn( 'id', $articleIds );
        } else {
            $listingQuery = Listing::published()->notDeleted();
        }

        $paginateUrl = '';
        if ( $request->has( 'lang' ) ) {
            $listingQuery = $listingQuery->where( 'language', $request->lang );
            $paginateUrl = '?lang=' . $request->lang;
        }

        return $listingQuery->with( 'category', 'keywords', 'user' )
        ->latest()
        ->paginate( $perPage )
        ->withPath( $paginateUrl );
    }
}
