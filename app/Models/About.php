<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\About
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $first_photo_id
 * @property int $second_photo_id
 * @property int $third_photo_id
 * @property int $forth_photo_id
 * @property int $fifth_photo_id
 * @property int $sixth_photo_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Photo $fifth_photo
 * @property-read \App\Models\Photo $first_photo
 * @property-read \App\Models\Photo $forth_photo
 * @property-read \App\Models\Photo $second_photo
 * @property-read \App\Models\Photo $sixth_photo
 * @property-read \App\Models\Photo $third_photo
 * @method static \Illuminate\Database\Eloquent\Builder|About newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|About newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|About query()
 * @method static \Illuminate\Database\Eloquent\Builder|About whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereFifthPhotoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereFirstPhotoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereForthPhotoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereSecondPhotoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereSixthPhotoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereThirdPhotoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class About extends Model
{
    use HasFactory;

    public function first_photo()
    {
        return $this->belongsTo(Photo::class, 'first_photo_id');
    }

    public function second_photo()
    {
        return $this->belongsTo(Photo::class, 'second_photo_id');
    }

    public function third_photo()
    {
        return $this->belongsTo(Photo::class, 'third_photo_id');
    }

    public function forth_photo()
    {
        return $this->belongsTo(Photo::class, 'forth_photo_id');
    }

    public function fifth_photo()
    {
        return $this->belongsTo(Photo::class, 'fifth_photo_id');
    }

    public function sixth_photo()
    {
        return $this->belongsTo(Photo::class, 'sixth_photo_id');
    }
}
