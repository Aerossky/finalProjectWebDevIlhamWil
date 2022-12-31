<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Models\Booking;
use App\Models\CategoryGallery;
use App\Models\Domisili;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('createbooking', [
            'title' => 'Booking',
            'main' => 'Booking',
            'booking' => Booking::all(),
            'domisilis'=> Domisili::all(),
            'categories'=>CategoryGallery::all()

        ]);
    }

    public function store(StoreBookingRequest $request)
    {
        Booking::create([
            'booking_name' => $request->booking_name,
            'booking_email' => $request->booking_email,
            'booking_phone' => $request->booking_phone,
            'booking_address' => $request->booking_address,
            'booking_date' => $request->booking_date,
            'domisili_id' => $request->domisili_id,
            'category_gallery_id' => $request->category_gallery_id,
//

        ]);
        return redirect('/contact_us');
    }

    public function show(Booking $id)
    {
        $id = Booking::findOrFail($id);
        return view('tampilan_booking', [
            'title' => 'Show Booking',
            'main' => 'Booking',
            'bookings' => $id,
            'booking' => Booking::all(),
            'domisilis'=> Domisili::all(),
            'categories'=>CategoryGallery::all()

        ]);
    }

    public function edit()
    {
        return view('tampilan_booking', [
            'title' => 'Edit Booking',
            'main' => 'Booking',
            'booking' => Booking::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $booking->update([
            'booking_name' => $request->booking_name,
            'booking_email' => $request->booking_email,
            'booking_phone' => $request->booking_phone,
            'booking_address' => $request->booking_address,
            'booking_date' => $request->booking_date,


        ]);
        return redirect('dashboard/tampilan_booking');

    }

    public function destroy($id)
    {
        $id = Booking::findOrFail($id);
        $id->delete();
        return redirect('dashboard/tampilan_booking');
    }

    public function contactbooking()
    {
        return view('contact', [
            'booking' => Booking::all(),
            'domisilis'=> Domisili::all(),
            'categories'=>CategoryGallery::all()

        ]);
    }
}
