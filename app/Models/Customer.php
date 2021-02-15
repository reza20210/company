<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Customer
 *
 * @property int $id
 * @property string $companyEmail
 * @property string $companyTitle
 * @property int $companyLogoId
 * @property string $companyAgentName
 * @property string $companyAgentRole
 * @property string $companyAgentEmail
 * @property int $companyAgentPhotoId
 * @property string $companyAgentComment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Photo $companyAgentPhoto
 * @property-read \App\Models\Photo $companyLogo
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCompanyAgentComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCompanyAgentEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCompanyAgentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCompanyAgentPhotoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCompanyAgentRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCompanyEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCompanyLogoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCompanyTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Customer extends Model
{
    use HasFactory;

    public function companyLogo()
    {
        return $this->belongsTo(Photo::class, 'companyLogoId');
    }

    public function companyAgentPhoto()
    {
        return $this->belongsTo(Photo::class, 'companyAgentPhotoId');
    }
}
