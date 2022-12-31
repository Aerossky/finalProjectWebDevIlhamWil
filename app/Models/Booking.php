<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'booking_name',
        'booking_email',
        'booking_phone',
        'booking_address',
        'booking_date',
        'domisili_id',
        'category_gallery_id',
        'created_at',
        'updated_at',
    ];

    public function BookingCategory(): BelongsTo
    {
        return $this->belongsTo(CategoryGallery::class, 'category_gallery_id', 'id');
    }

    public function BookingDomisili(): BelongsTo
    {
        return $this->belongsTo(Domisili::class, 'domisili_id', 'id');
    }





}
