<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sermons;
use DB;
class SermonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request)
    {
        $title = $request->title;
        $description =$request->description;
        try{
            $pageindex= (int)($request->page);
        }
        catch(\Exception $e)
        {
            $pageindex= 1;
        }
        $sermons = DB::table('sermons')->where('title','LIKE','%'.$title.'%')
        ->Where('description','LIKE','%'.$description.'%')
        ->paginate(5); 
        //$sermons = DB::table('sermons')->paginate(5);  
        //return response()->$sermons;
        return response()->json(['data' => $sermons->toArray()], 201);
    }
    public function index()
    {
        
       // $searchparam=new  $sermons;    
        //$searchparam->title=$title;

        try 
        {
         $title = $_GET['title'];
        $description =$_GET['description'];
        $sval =$title;
        $sermons = DB::table('sermons')->where('title','LIKE','%'.$title.'%')
        ->Where('description','LIKE','%'.$description.'%')
        ->paginate(5);  
        }
        catch(\Exception $e){
            $title = "";
        $description ="";
            $sermons = DB::table('sermons')->paginate(5);        
        } 
        
        return view('sermons.index', compact('sermons','title','description'));
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
        //
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
