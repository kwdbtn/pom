<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class ActivityController extends Controller {
    public function index() {
        $logs = Activity::all();
        return view('activities.index', compact('logs'));
    }
}
