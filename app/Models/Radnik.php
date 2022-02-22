<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Radnik extends Model
{
    use HasFactory;

    protected $fillable = ['ime', 'prezime', 'plata', 'departman_id', 'struka_id'];
    protected $with = ['departman', 'struka'];
    public function departman()
    {
        return $this->belongsTo(Departman::class);
    }
    public function struka()
    {
        return $this->belongsTo(Struka::class);
    }
}
