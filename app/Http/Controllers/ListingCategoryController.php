<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Listing;
use App\Models\ListingCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ListingCategoryController extends Controller {

    public function index() {
        $categories = ListingCategory::with( [
            'articles' => function ( $articles ) {
                return $articles->notDeleted();
            }
        ] )->get();
        return view( 'backend.categoryList', compact( 'categories' ) );
    }

    public function update( CategoryRequest $request, $categoryId ) {
        $updatedCategory = $request->only( ['name', 'alias', 'position', 'parent_category_id'] );
        try {
            ListingCategory::where( 'id', $categoryId )->update( $updatedCategory );
        } catch ( \PDOException $e ) {
            Log::error( $this->getLogMsg( $e ) );
            return redirect()->back()->with( 'errorMsg', $this->getMessage( $e ) );
        }
        return redirect()->back()->with( 'successMsg', 'ListingCategory updated successfully!' );
    }

    public function store( CategoryRequest $request ) {
        $newCategory = $request->only( ['name', 'alias', 'position', 'parent_category_id'] );
        try {
            ListingCategory::create( $newCategory );
        } catch ( \PDOException $e ) {
            Log::error( $this->getLogMsg( $e ) );
            return redirect()->back()->with( 'errorMsg', $this->getMessage( $e ) );
        }
        return redirect()->back()->with( 'successMsg', 'ListingCategory created successfully!' );
    }

    public function toggleActive( $categoryId ) {
        $category = ListingCategory::find( $categoryId );
        try {
            $category->update( ['is_active' => !$category->is_active] );
        } catch ( \PDOException $e ) {
            Log::error( $this->getLogMsg( $e ) );
            return redirect()->back()->with( 'errorMsg', $this->getMessage( $e ) );
        }
        return redirect()->route( 'categories' )->with( 'successMsg', 'ListingCategory updated' );
    }

    public function getArticles( Request $request, $categoryAlias ) {
        $articles = Listing::getPaginate( $request );

        return view( 'frontend.articles.index', compact( 'articles' ) );
    }

    public function destroy( $categoryId ) {
        try {
            ListingCategory::destroy( $categoryId );
        } catch ( \PDOException $e ) {
            Log::error( $this->getLogMsg( $e ) );
            return redirect()->back()->with( 'errorMsg', $this->getMessage( $e ) );
        }
        return redirect()->back()->with( 'successMsg', 'ListingCategory deleted' );
    }
}
