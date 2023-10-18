<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CustomersField
 *
 * @property int $id
 * @property int $customer_id
 * @property string $field_key
 * @property string $field_value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CustomersField newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomersField newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomersField query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomersField whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomersField whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomersField whereFieldKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomersField whereFieldValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomersField whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomersField whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CustomersField extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'field_key', 'field_value'];
}
