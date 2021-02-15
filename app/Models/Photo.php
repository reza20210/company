<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Photo
 *
 * @property int $id
 * @property string $path
 * @property string $name
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Project[] $projects
 * @property-read int|null $projects_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Service[] $services
 * @property-read int|null $services_count
 * @property-read \App\Models\Slide $slide
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Photo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Photo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Photo query()
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereUserId($value)
 * @mixin \Eloquent
 */
class Photo extends Model
{
    use HasFactory;

    protected $uploads = '/images/';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getPathAttribute($photo)
    {
        return $this->uploads . $photo;
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function slide()
    {
        return $this->belongsTo(Slide::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
