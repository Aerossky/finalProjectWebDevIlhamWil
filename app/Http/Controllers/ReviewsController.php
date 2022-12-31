<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index()
    {
        return view('review', [
            'title' => 'Reviews',
            'main' => 'Reviews',
            'user'=> User::all(),
            'reviews' => Review::all(),
        ]);
    }

    public function create()
    {
        return view('dashboard', [
            'title' => 'Create Review',
            'main' => 'Create Review',
            'reviews'=>Review::all(),
        ]);
    }

    public function store(Request $request)
    {
        Review::create([
            'review_name' => $request->review_name,
            'review_text' => $request->review_text,
        ]);
        return redirect('/contact_us');
    }

    public function show(Review $id)
    {
        $id = Review::findOrFail($id);
        return view('review', [
            'title' => 'Show Review',
            'main' => 'Review',
            'review' => $id,
            'reviews'=> Review::all(),
        ]);
    }

    public function edit()
    {
        return view('editreview', [
            'title' => 'Edit Review',
            'main' => 'Edit Review',
            'reviews' => Review::all(),
        ]);
    }

    public function update(Request $request, $id)
    {

        $reviews = findOrFail($id);
        $reviews ->update([
            'review_name' => $request->review_name,
            'review_text' => $request->review_text,
        ]);
        return redirect('/dashboard/review');
    }

    public function destroy($id)
    {
        $reviews = Review::findOrFail($id);
        $reviews->delete();
        return redirect('dashboard');
    }



}
