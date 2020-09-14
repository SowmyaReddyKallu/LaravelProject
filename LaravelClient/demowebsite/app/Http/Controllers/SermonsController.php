<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class SermonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
             $title = $_GET['title'];
            $description =$_GET['description']; 
            
        } catch (\Throwable $th) {
            $title = "";
            $description =""; 
        }
        try {
            $page=$_GET['page']; 
        } catch (\Throwable $th) {
            $page=1;
        }
        $client = new Client();

        $response = $client->request('GET', 'http://localhost:8005/api/sermons/list', [
            'query' => [
                'title' => $title,
                'description' => $description,
                'page' => $page
            ]
        ]);
        $sermonsres=$response->getBody();
        $sermons=json_decode($sermonsres, true);        
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
