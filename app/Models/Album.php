<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $primaryKey = 'albumID';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['albumID', 'albumTitle', 'artistID'];

    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artistID', 'artistID');
    }

    public function songs()
    {
        return $this->hasMany(Song::class, 'albumID', 'albumID');
    }
}
