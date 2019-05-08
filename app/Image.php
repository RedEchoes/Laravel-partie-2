<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['name'];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->locale('fr')->diffForHumans(Carbon::now());
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('alert')->withTimestamps();
    }

    public function scopeRandom($query)
    {
        return $query->inRandomOrder()->first();
    }
}
