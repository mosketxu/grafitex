<?php

namespace App\Http\Controllers;

use App\{CampaignStore, Store};
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CampaignStoreController extends Controller
{


    public function stoAsoc($campaignid)
    {
        $stoAsoc=CampaignStore::where('campaign_id',$campaignid)->get();

        $stoAsoc=CampaignStore::
        join('stores','stores.id',"=","store_id")
        ->where('campaign_id',$campaignid)->get();
        // $data = User::select('users.nameUser', 'categories.nameCategory')
        //         ->join('categories', 'users.idUser', '=', 'categories.user_id')
        //         ->get();
     
        return response()->json(
            $stoAsoc->toArray()
        );
    }

    public function stoDisp($campaignid)
    {
     
        $stoDisp=Store::whereNotIn('id', function ($query) use ($campaignid) {
             $query->select('store_id')->from('campaign_stores')->where('campaign_id', '=', $campaignid);
        })->get();

        return response()->json(
            $stoDisp->toArray()
        );
    }


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
