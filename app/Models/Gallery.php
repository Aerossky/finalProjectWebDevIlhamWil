<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Gallery extends Model
{

    use HasFactory;
    protected $fillable = [
        'id',
        'gallery_name',
        'gallery_title',
        'gallery_file',
        'category_gallery_id',
        'created_at',
        'updated_at',
    ];
    public function getData()
    {
        $model = new Gallery();
        $gallery = $model->getData();
        return $gallery;
    }

    public function GalleryCategory(): BelongsTo
    {
        return $this->belongsTo(CategoryGallery::class, 'category_gallery_id', 'id');
    }

//    public function GalleryReview(): HasMany
//    {
//        return $this->hasMany(Review::class, 'gallery_id', 'id');
//    }


//    public static function index() {
//        return collect(self::$gal);
//    }



}
