<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protection extends Model {
    use HasFactory;

    protected $fillable = [
        'name', 'active',
    ];

    public function outages() {
        return $this->hasMany(Outage::class);
    }
}
