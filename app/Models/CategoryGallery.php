<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CategoryGallery extends Model
{
    protected $fillable = [
        'id',
        'category_gallery_file',
        'category_name',
        'pricelist_id',
        'harga',
        'created_at',
        'updated_at',
    ];

    public function BookingGallery(): HasMany
    {
        return $this->hasMany(Booking::class);
    }


    public function GalleryCatagoryGallery(): HasMany
    {
        return $this->hasMany(Gallery::class);
    }

    public function Pricelist(): BelongsTo
    {
        return $this->belongsTo(Pricelist::class, 'pricelist_id', 'id');
    }




}
