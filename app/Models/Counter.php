<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Counter
 *
 * @property int $id
 * @property int $workExperience
 * @property int $satisfiedCustomers
 * @property int $successfulProduct
 * @property int $hoursOfWork
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Counter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Counter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Counter query()
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereHoursOfWork($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereSatisfiedCustomers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereSuccessfulProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereWorkExperience($value)
 * @mixin \Eloquent
 */
class Counter extends Model
{
    use HasFactory;
}
