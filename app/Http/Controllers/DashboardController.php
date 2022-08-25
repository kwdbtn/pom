<?php

namespace App\Http\Controllers;

use App\Charts\EquipmentOutageChart;
use App\Charts\OutageFrequencyChart;
use App\Charts\OutageStatusChart;
use App\Models\Dashboard;
use App\Models\Outage;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $total = Outage::count();
        $pending = Outage::where('status', 'Pending')->count();
        $dispatchreceived = Outage::where('status', 'Dispatch Received')->count();
        $planningapproved = Outage::where('status', 'Planning Approved')->count();
        $done = Outage::where('status', 'Done')->count();

        $arr = [
            'total' => $total,
            'pending' => $pending,
            'dispatchreceived' => $dispatchreceived,
            'planningapproved' => $planningapproved,
            'done' => $done,
        ];

        $statuschart = new OutageStatusChart;
        $statuschart->labels(['Pending', 'Dispatch Received', 'Planning Approved', 'Done']);
        $statuschart->dataset('Application Status', 'doughnut', [$pending, $dispatchreceived, $planningapproved, $done])
            ->backgroundColor([
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)',
                'rgb(38, 194, 129)',
            ]);

        $outages = Outage::all();
        $equipment = [];

        foreach ($outages as $outage) {
            foreach ($outage->equipment as $equip) {
                array_push($equipment, $equip);
            }
        }

        $equipmentx = new Collection($equipment);
        $equipment = $equipmentx->unique();
        $equipp = $equipment->pluck('name', 'id');
        $equippcount = [];

        foreach ($equipment as $eqp) {
            array_push($equippcount, $eqp->outages->count());
        }

        $equipmentoutagechart = new EquipmentOutageChart;
        $equipmentoutagechart->labels($equipp->values());
        $equipmentoutagechart->dataset('Equipment Outages', 'bar', $equippcount)
            ->backgroundColor(
                'rgb(54, 162, 235)'
            );

        $last_outages = Outage::pluck('id', 'applicant');

        $outagefreqchart = new OutageFrequencyChart;
        $outagefreqchart->labels($last_outages->keys());
        $outagefreqchart->dataset('Applicants', 'line', $last_outages->values())
            ->backgroundColor(
                'rgb(255, 99, 132)',
            );

        return view('dashboard.index', compact('statuschart', 'arr', 'equipmentoutagechart', 'outagefreqchart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard) {
        //
    }
}
