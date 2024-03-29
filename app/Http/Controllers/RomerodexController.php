<?php

namespace App\Http\Controllers;

use App\Mail\SolicitarAjudaMail;
use App\Models\Romeroball;
use App\Models\Romeromon;
use App\Models\User;
use App\Notifications\RomemormonAlterado;
use App\Notifications\RomemormonCadastrado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

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

    public function mail()
    {
        $destiny = User::find(1);
        // Mail::to($destiny)->send(new SolicitarAjudaMail(Auth::user()));
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'nr' => 'required|min:3',
            'dc' => 'required|max:255',
            'rb' => 'required'
        ]);
        
        $romerodex = new Romeromon();

        $name = $request->post('nr');
        $description = $request->post('dc');
        $romeroball = $request->post('rb');

        $romerodex->rom_name = $name;
        $romerodex->rom_description = $description;
        $romerodex->rom_bal_id = $romeroball;
        $romerodex->rom_use_id = auth()->user()->id;

        // Image Add
        // $imageName = $request->file('image')->getClientOriginalName();
        // $request->file('image')->storeAs('romeromon',$imageName);
        // $romerodex->image = "storage/romeromon/$imageName";

        $romerodex->save();

        $ball = DB::table('romeroballs')->where('bal_id', '=', $romeroball)->get();
        // Auth::user()->notify(new RomemormonCadastrado($romerodex, $ball[0]));
        return redirect(url('/romerodex/create'));
    }

    public function history()
    {
        $romeromons = Romeromon::all();
        return view('list', ['romeromons' => $romeromons]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $romeromon = DB::table('romeromons')->where('rom_id', '=', $id)->get();
        $ball = DB::table('romeroballs')->join('romeromons', 'rom_bal_id', '=', 'bal_id')->where('rom_id', '=', $id)->get();
        $romeromon = $romeromon[0];
        $ball = $ball[0];
        return view('show', ['romeromon' => $romeromon, 'romeroballs' => $ball, 'id' => $id]);
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
        $name = $request->post('nr');
        $description = $request->post('dc');
        $romeromon = DB::table('romeromons')->where('rom_id', '=', $id)->get();
        DB::table('romeromons')->where('rom_id', '=', $id)->update(['rom_name' => $name, 'rom_description' => $description]);
        // Auth::user()->notify(new RomemormonAlterado($romeromon[0]));
        $romeromons = Romeromon::all();
        return view('list', ['romeromons' => $romeromons]);
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
