<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remark extends Model {
    use HasFactory;

    protected $fillable = ['outage_id', 'remarks'];

    public function outage() {
        return $this->belongsTo(Outage::class);
    }
}
