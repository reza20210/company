<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Project
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $meta_description
 * @property string $meta_keywords
 * @property int $user_id
 * @property int $photo_id
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $status
 * @property-read \App\Models\Category $category
 * @property-read \App\Models\Photo $photo
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project wherePhotoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUserId($value)
 * @mixin \Eloquent
 */
class Project extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function photo()
    {
        return $this->belongsTo(Photo::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function projectVideo()
    {
        return $this->belongsTo(Photo::class, 'projectVideoId');
    }

    public function projectVideoPoster()
    {
        return $this->belongsTo(Photo::class, 'projectVideoPosterId');
    }
}
