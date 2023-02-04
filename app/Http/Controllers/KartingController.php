<?php

namespace App\Http\Controllers;

use App\Models\Karting;
use Illuminate\Http\Request;
use League\CommonMark\Extension\CommonMark\Parser\Inline\AutolinkParser;

class KartingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = Karting::all();
        return view('karting.index')->with('rez',$a);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'lokacija'=>'required',
            'radnoVreme'=>'required',
            'pravilaStaze'=>'required',
            'cena'=>'required',
            'usluge'=>'required',
     ]);

        $r = new Karting();
        $r->lokacija = $request->input('lokacija');
        $r->radnoVreme = $request->input('radnoVreme');
        $r->pravilaStaze = $request->input('pravilaStaze');
        $r->cena = $request->input('cena');
        $r->usluge = $request->input('usluge');
        $r->save();

        return redirect('/karting')->with('success','Karting centar je uspesno kreiran!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $a = Karting::find($id);
        return view('karting.show')->with('r',$a);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = Karting::find($id);
        return view('karting.edit')->with('rez',$a);
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
        $r = Karting::find($id);
        $r->lokacija = $request->input('lokacija');
        $r->radnoVreme = $request->input('radnoVreme');
        $r->pravilaStaze = $request->input('pravilaStaze');
        $r->cena = $request->input('cena');
        $r->usluge = $request->input('usluge');
        $r->save();

        return redirect('/karting')->with('success','Karting centar je uspesno izmenjen!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Karting::find($id);
        $a->delete();
        return redirect('/karting')->with('success','Karting centar je uspesno izbrisan!');
    }
}
