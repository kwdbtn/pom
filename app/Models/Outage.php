<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outage extends Model {
    use HasFactory;

    protected $fillable = [
        'type', 'applicant', 'equipment_id', 'protection_id', 'work', 'from', 'to', 'relayed_by', 'received_date', 'remarks', 'status',
    ];

    public function applicantx() {
        return User::find($this->applicant);
    }

    public function equipment() {
        return $this->belongsTo(Equipment::class);
    }

    public function protection() {
        return $this->belongsTo(Protection::class);
    }

    public function relayed_byx() {
        return User::find($this->relayed_by);
    }
}
