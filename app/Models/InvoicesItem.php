<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\InvoicesItem
 *
 * @property int $id
 * @property int $invoice_id
 * @property int $product_id
 * @property string $quantity
 * @property string $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|InvoicesItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoicesItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoicesItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoicesItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoicesItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoicesItem whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoicesItem wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoicesItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoicesItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoicesItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class InvoicesItem extends Model
{
    use HasFactory;
    protected $fillable = ['invoice_id', 'product_id', 'name', 'quantity', 'price'];

}
