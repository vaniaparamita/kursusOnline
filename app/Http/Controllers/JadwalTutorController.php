<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelJadwal;
use Auth;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelJadwal::where('user_id', '=', Auth::user()->id)->get();
        return view('tutor.tutor', compact('data'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ModelJadwal();
        // $data->user_id = $request->user_id;
        $data->tutor_id = $request->tutor_id;
        $data->nama_tutor = $request->nama_tutor;
        // $data->program = $request->program;
        // $data->kelas = $request->kelas;
        // $data->mata_pelajaran = $request->mata_pelajaran;
        // $data->hari1 = $request->hari1;
        // $data->hari2 = $request->hari2;
        // $data->hari3 = $request->hari3;
        // $data->waktu = $request->waktu;
        $data->status = $request->status;
        $data->save();
        return redirect('tutor')->withMessage('Berhasil Konfirmasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = new ModelJadwal();
        $data->user_id = $request->user_id;
        $data->tutor_id = $request->tutor_id;
        $data->nama_tutor = $request->nama_tutor;
        $data->program = $request->program;
        $data->kelas = $request->kelas;
        $data->mata_pelajaran = $request->mata_pelajaran;
        $data->hari1 = $request->hari1;
        $data->hari2 = $request->hari2;
        $data->hari3 = $request->hari3;
        $data->waktu = $request->waktu;
        $data->status = $request->status;
        $data->save();
        return redirect('murid')->withMessage('Kamu Berhasil Daftar Les');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
