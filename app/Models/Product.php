<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property string $name
 * @property int $price
 * @property string $category
 * @property string $product_description
 * @property string|null $image
 * @property string|null $image_description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImageDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Product extends Model
{
    protected $fillable = [ 'id', 'name', 'price', 'category', 'product_description', 'image', 'image_description'];    
   
    public static function validationRules(): array {
        return [
            'name' => ['required', 'min:2'],
            'price' => 'required|numeric',
            'product_description' => 'required'
        ];
    }

    public static function validationMessages(): array {
        return [
            'name.required' => 'Tenés que ingresar el nombre del producto',
            'name.min' => 'El nombre del producto tiene que tener al menos :min caracteres',
            'price.required' => 'Tenés que ingresar el precio del producto',
            'price.numeric' => 'El precio tiene que ser un número',
            'product_description.required' => 'Tenés que escribir la fecha de estreno de la película',
        ];
    }
}

