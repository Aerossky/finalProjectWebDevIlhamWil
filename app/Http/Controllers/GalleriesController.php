<?php

namespace App\Http\Controllers;

use App\Models\CategoryGallery;
use App\Models\Gallery;
use App\Models\User;
use App\Admin;
use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    public function index(Request $request)
    {
        $query = Gallery::query();

        if ($request->has('search')) {
            $query->where('gallery_name', 'like', '%' . $request->search . '%');
            $gallery = $query->paginate(5);
            return view('product', [
                'title' => 'Galleries',
                'main' => 'Galleries',
                'user' => User::all(),
                'gallery' => $gallery,
                'categories' => CategoryGallery::all(),
            ]);
        } else {
            $gallery = Gallery::paginate(5);
            return view('product', [
                'title' => 'Galleries',
                'main' => 'Galleries',
                'user' => User::all(),
                'gallery' => $gallery,
                'categories' => CategoryGallery::all(),
            ]);
        }

    }


    public function create()
    {
        return view('creategallery', [
            'title' => 'Galleries',
            'main' => 'Galleries',
            'galleries' => Gallery::all(),
            'categories' => CategoryGallery::all()

        ]);
    }

    public function store(Request $request)
    {

        Gallery::create([
            'gallery_name' => $request->gallery_name,
            'gallery_title' => $request->gallery_title,
            'gallery_file' => $request->file('gallery_file')->store('coverphotos', 'public'),
            'category_gallery_id' => $request->category_gallery_id,
        ]);
        return redirect('dashboard/product');
    }

    public function show(Gallery $id)
    {
        $id = Gallery::findOrFail($id);

        return view('product', [
            'title' => 'Show Gallery',
            'main' => 'Gallery',
            'galleries' => $id,
            'gallery' => Gallery::all(),
            'categories' => CategoryGallery::all()

        ]);
    }


    public function edit()
    {
        return view('product', [
            'title' => 'Edit Gallery',
            'main' => 'Gallery',
            'gallery' => Gallery::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        if ($request->file('gallery_file')) {
            unlink('storage/' . $gallery->gallery_file);
            $gallery->update([
                'gallery_name' => $request->gallery_name,
                'gallery_title' => $request->gallery_title,
                'gallery_file' => $request->file('gallery_file')->store('coverphotos', 'public'),
            ]);
        } else {
            $gallery->update([
                'gallery_name' => $request->gallery_name,
                'gallery_title' => $request->gallery_title,

            ]);
        }

        return redirect('dashboard/product');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
        return redirect('dashboard/product');
    }


    public function postfoto()
    {
        return view('portfolio', [
            'gallery' => Gallery::all()
        ]);
    }

}
