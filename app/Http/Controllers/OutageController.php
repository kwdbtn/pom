<?php

namespace App\Http\Controllers;

use App\Models\Outage;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OutageController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $outages = Outage::orderBy("created_at", "desc")->get();
        return view('outages.index', compact('outages'));
    }

    public function outages($status) {
        $outages = Outage::where('status', $status)->orderBy("created_at", "desc")->get();
        $stat = $status == 'Pending' ? 'Pending' : 'Completed';
        return view('outages.status', compact('outages', 'stat'));
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
        $outage = Outage::create([
            'type'          => $request->type,
            'applicant'     => $request->applicant,
            'protection_id' => $request->protection_id,
            'work'          => $request->work,
            'from'          => date('Y-m-d H:i:s', strtotime($request->from)),
            'to'            => date('Y-m-d H:i:s', strtotime($request->to)),
            'relayed_by'    => auth()->user()->id,
            'received_date' => now(),
            'remarks'       => $request->remarks,
            'status'        => 'Pending',
        ]);

        $outage->equipment()->sync($request->input('equipment'));

        $outage->remarksx()->create([
            'remarks' => auth()->user()->name . ' ~ ' . $request->remarks,
        ]);

        notify()->success('Application submitted successfully!');

        return redirect()->route('outages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Outage  $outage
     * @return \Illuminate\Http\Response
     */
    public function show(Outage $outage) {
        activity()
            ->performedOn($outage)
            ->event('viewed')
            ->log('viewed');
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

    public function approve(outage $outage, Request $request) {

        // dd($request);

        if ($request->has('acknowledge')) {
            $outage->update([
                'received_by'   => auth()->user()->id,
                'received_date' => now(),
                'remarks'       => $request->remarks,
                'status'        => "Dispatch Received",
            ]);

            $outage->remarksx()->create([
                'remarks' => auth()->user()->name . ' ~ ' . $request->remarks,
            ]);
        } else if ($request->has('approve')) {
            $outage->update([
                'approved_by'   => auth()->user()->id,
                'approval_date' => now(),
                'remarks'       => $request->remarks,
                'status'        => "Planning Approved",
            ]);

            $outage->remarksx()->create([
                'remarks' => auth()->user()->name . ' ~ ' . $request->remarks,
            ]);
        } else if ($request->has('comment')) {
            $outage->update([
                'remarks' => $request->remarks,
            ]);

            $outage->remarksx()->create([
                'remarks' => auth()->user()->name . ' ~ ' . $request->remarks,
            ]);
        } else if ($request->has('done')) {
            $outage->update([
                'remarks' => $request->remarks,
                'status'  => "Done",
            ]);

            $outage->remarksx()->create([
                'remarks' => auth()->user()->name . ' ~ ' . $request->remarks,
            ]);
        }
        return redirect()->route('outages.index');
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
