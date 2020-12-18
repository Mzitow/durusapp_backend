<?php

namespace App\Models\ApiModels;

use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Scholar extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $dates =['deleted_at'];

      protected $hidden =['created_at','deleted_at','updated_at'];

    protected $fillable=['user_id','title','name','gender','active',
'country_id','address','image'];


public function registerMediaCollections(): void
{
    $this->addMediaCollection('images')
    ->registerMediaConversions(function(Media $media)
    {
        $this->addMediaConversion('card')
        ->width(150)
        ->height(100);

        $this->addMediaConversion('thumb')
        ->width(100)
        ->height(100);

    });

}
}
