<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $primaryKey = 'songID';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['songID', 'songTitle', 'artistID'];

    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artistID', 'artistID');
    }
}
