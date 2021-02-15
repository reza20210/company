<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Header
 *
 * @property int $id
 * @property string $email
 * @property string $telephoneNumber
 * @property string $workTime
 * @property string $telegram
 * @property string $instagram
 * @property string $youtube
 * @property string $twitter
 * @property string $facebook
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $title
 * @property string|null $description
 * @property int|null $siteLogoId
 * @property string|null $address
 * @property-read \App\Models\Photo|null $siteLogo
 * @method static \Illuminate\Database\Eloquent\Builder|Header newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Header newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Header query()
 * @method static \Illuminate\Database\Eloquent\Builder|Header whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Header whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Header whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Header whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Header whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Header whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Header whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Header whereSiteLogoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Header whereTelegram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Header whereTelephoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Header whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Header whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Header whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Header whereWorkTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Header whereYoutube($value)
 * @mixin \Eloquent
 */
class Header extends Model
{
    use HasFactory;

    public function siteLogo()
    {
        return $this->belongsTo(Photo::class, 'siteLogoId');
    }

    public function siteVideo()
    {
        return $this->belongsTo(Photo::class, 'siteVideoId');
    }

    public function siteVideoPoster()
    {
        return $this->belongsTo(Photo::class, 'siteVideoPosterId');
    }
}
