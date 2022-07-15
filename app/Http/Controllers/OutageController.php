<?php

namespace App\Http\Controllers;

use App\Models\Outage;
use Illuminate\Http\Request;

class OutageController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $outages = Outage::all();
        return view('outages.index', compact('outages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Outage $outage) {
        return view('outages.form', compact('outage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        Outage::create([
            'type'          => $request->type,
            'applicant'     => auth()->user()->id,
            'equipment_id'  => $request->equipment_id,
            'protection_id' => $request->protection_id,
            'work'          => $request->work,
            'from'          => date_create($request->from),
            'to'            => date_create($request->to),
            'relayed_by'    => $request->relayed_by,
            'received_date' => now(),
            'remarks'       => $request->remarks,
            'status'        => 'Pending',
        ]);

        return reirect()->route('outages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Outage  $outage
     * @return \Illuminate\Http\Response
     */
    public function show(Outage $outage) {
        return view('outages.show', compact('outage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Outage  $outage
     * @return \Illuminate\Http\Response
     */
    public function edit(Outage $outage) {
        return view('outages.form', compact('outage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Outage  $outage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Outage $outage) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Outage  $outage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outage $outage) {
        //
    }
}
