<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{     protected $fillable = [
        'id',
        'name',
        'descripition',
        'is_active',
        'establishment_id',
      ];
      use HasFactory;

    public function establishment()
    {
      return $this->belongsTo(Establishment::class);
    }
    public function products()
    {
      return $this->belongsToMany(Product::class);
    }
    }
