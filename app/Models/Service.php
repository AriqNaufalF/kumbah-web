<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // relations
    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, Order::class);
    }
}
