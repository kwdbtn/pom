<?php

namespace App\Http\Controllers;

use App\Models\Protection;
use Illuminate\Http\Request;

class ProtectionController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $protections = Protection::all();
        return view('protections.index', compact('protections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Protection $protection) {
        return view('protections.form', compact('protection'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        Protection::create([
            'name'   => $request->name,
            'active' => true,
        ]);
        return redirect()->route('protections.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Protection  $protection
     * @return \Illuminate\Http\Response
     */
    public function show(Protection $protection) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Protection  $protection
     * @return \Illuminate\Http\Response
     */
    public function edit(Protection $protection) {
        return view('protections.form', compact('protection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Protection  $protection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Protection $protection) {
        $protection->update([
            'name' => $request->name,
        ]);
        return redirect()->route('protections.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Protection  $protection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Protection $protection) {
        //
    }
}
