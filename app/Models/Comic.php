<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comic extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type', 'artists', 'writers'];

    protected function price(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) =>  '$' . $value,
        );
    }

    protected function artists(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) =>  json_encode(explode(', ', $value)),
        );
    }

    protected function writers(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) =>  json_encode(explode(', ', $value)),
        );
    }
}
