<?php

namespace App\Http\Controllers;

use App\Models\table_kelas;
use Illuminate\Http\Request;

class TableKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data =table_kelas::all();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\table_kelas  $table_kelas
     * @return \Illuminate\Http\Response
     */
    public function show(table_kelas $table_kelas)
    {
        //
        $data = table_kelas::with('id')->find($table_kelas->id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\table_kelas  $table_kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, table_kelas $table_kelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\table_kelas  $table_kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(table_kelas $table_kelas)
    {
        //
    }
}