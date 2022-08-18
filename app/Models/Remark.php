<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Remark extends Model {
    use HasFactory, LogsActivity;

    protected $fillable = ['outage_id', 'remarks'];

    public function outage() {
        return $this->belongsTo(Outage::class);
    }

    public function getActivitylogOptions(): LogOptions {
        return LogOptions::defaults()
            ->logOnly(['outage.id', 'remarks'])
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs()
            ->useLogName('user');
    }
}
