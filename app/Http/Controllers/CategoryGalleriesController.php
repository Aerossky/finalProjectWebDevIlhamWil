<?php

namespace App\Http\Controllers;

use App\Models\CategoryGallery;
use App\Models\Pricelist;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryGalleriesController extends Controller
{
    public function index()
    {
        return view('product', [
            'title' => 'Galleries',
            'main' => 'Galleries',
            'user' => User::all(),
            'categorygallery' => CategoryGallery::all(),
            'pricelist' => Pricelist::all()

            ]);

    }

    public function create()
    {
        return view('createcategorygallery', [
            'title' => 'Category Gallery',
            'main' => 'Category Gallery',
            'categorygallery' => CategoryGallery::all(),
            'pricelist' => Pricelist::all()


        ]);
    }

    public function store(Request $request)
    {
        CategoryGallery::create([
            'category_gallery_file' => $request-> file('category_gallery_file')->store('coverphotos', 'public'),
            'category_name' => $request->category_name,
            'pricelist_id' => $request->pricelist_id,
        ]);
        return redirect('dashboard/tampilan_category');
    }



    public function show(CategoryGallery $id)
    {
        $id = CategoryGallery::findOrFail($id);
        return view('tampilan_category', [
            'title' => 'Show Category',
            'main' => 'Category',
            'categorys' => $id,
            'categorygallery' => CategoryGallery::all(),
            'pricelist' => Pricelist::all()

        ]);
    }

    public function edit()
    {
        return view('tampilan_category', [
            'title' => 'Edit Category',
            'main' => 'Category',
            'categorygallery' => CategoryGallery::all()
        ]);


    }

    public function update(Request $request, $id)
    {
        $categorygallery = CategoryGallery::findOrFail($id);
        $categorygallery->update([
            'category_gallery_file' => $request-> file('category_gallery_file')->store('coverphotos', 'public'),
            'category_name' => $request->category_name,
        ]);
        return redirect('dashboard/tampilan_category');
    }

    public function destroy($id)
    {
        $categorygallery = CategoryGallery::findOrFail($id);
        $categorygallery->delete();
        return redirect('dashboard/tampilan_category');
    }
}
