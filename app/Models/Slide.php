<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Slide
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $photo_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $status
 * @property-read \App\Models\Photo $photo
 * @method static \Illuminate\Database\Eloquent\Builder|Slide newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slide newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slide query()
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide wherePhotoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Slide extends Model
{
    use HasFactory;

    public function photo()
    {
        return $this->belongsTo(Photo::class);
    }
}
