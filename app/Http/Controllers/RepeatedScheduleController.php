<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRepeatedScheduleRequest;
use App\Http\Requests\UpdateRepeatedScheduleRequest;
use App\Models\RepeatedSchedule;

class RepeatedScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRepeatedScheduleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRepeatedScheduleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RepeatedSchedule  $repeatedSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(RepeatedSchedule $repeatedSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RepeatedSchedule  $repeatedSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(RepeatedSchedule $repeatedSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRepeatedScheduleRequest  $request
     * @param  \App\Models\RepeatedSchedule  $repeatedSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRepeatedScheduleRequest $request, RepeatedSchedule $repeatedSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RepeatedSchedule  $repeatedSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(RepeatedSchedule $repeatedSchedule)
    {
        //
    }
}
