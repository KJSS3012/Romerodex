<?php

namespace App\Http\Controllers;

use App\Models\Romeroball;
use App\Models\Romeromon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RomerodexController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $romeroballs = Romeroball::all();
        return view('registerRm', ['romeroballs' => $romeroballs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $romerodex = new Romeromon();

        $name = $request->post('nr');
        $description = $request->post('dc');
        $romeroball = $request->post('rb');

        $romerodex->rom_name = $name;
        $romerodex->rom_description = $description;
        $romerodex->rom_bal_id = $romeroball;
        $romerodex->rom_use_id = auth()->user()->id;
        $romerodex->save();
        return redirect(url('/romerodex/create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $romeromons = Romeromon::all();
        return view('list');
        // ->with('romerodex', $romeromons);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
