<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outage extends Model {
    use HasFactory;

    protected $fillable = [
        'type', 'applicant', 'protection_id', 'work', 'from', 'to', 'relayed_by', 'received_by', 'received_date', 'approved_by', 'approval_date', 'remarks', 'status', 'done',
    ];

    public function applicantx() {
        return User::find($this->applicant);
    }

    public function equipment() {
        return $this->belongsToMany(Equipment::class);
    }

    public function protection() {
        return $this->belongsTo(Protection::class);
    }

    public function relayed_byx() {
        return User::find($this->relayed_by);
    }

    public function received_byx() {
        $user = User::find($this->received_by);
        if (is_null($user)) {
            return '-';
        }
        return User::find($this->received_by);
    }

    public function approved_byx() {
        $user = User::find($this->approved_by);
        if (is_null($user)) {
            return '-';
        }
        return User::find($this->approved_by);
    }

    public function remarksx() {
        return $this->hasMany(Remark::class);
    }
}
