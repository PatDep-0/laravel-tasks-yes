<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $primaryKey = 'artistID';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['artistID', 'artistName'];

    public function albums()
    {
        return $this->hasMany(Album::class, 'artistID', 'artistID');
    }

    public function songs()
    {
        return $this->hasMany(Song::class, 'artistID', 'artistID');
    }
}
