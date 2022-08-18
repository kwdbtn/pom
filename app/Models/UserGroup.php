<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class UserGroup extends Model {
    use HasFactory, LogsActivity;

    protected $fillable = ['name', 'active'];

    public function users() {
        return $this->hasMany(User::class);
    }

    public function getActivitylogOptions(): LogOptions {
        return LogOptions::defaults()
            ->logFillable()
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs()
            ->useLogName('user');
    }
}
