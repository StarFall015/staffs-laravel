<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongToMany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    public function toppings(): BelongsToMany
    {
        return $this->belongsToMany(Topping::class);
    }

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }
}
