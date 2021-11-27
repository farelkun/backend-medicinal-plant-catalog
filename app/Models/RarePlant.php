<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RarePlant extends Model
{
    use HasFactory;
    protected $table = 'rare_plant';

    public function plant()
    {
        return $this->belongsTo(Plant::class, 'plant_id');
    }
}
