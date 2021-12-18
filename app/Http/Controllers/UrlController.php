<?php

namespace App\Http\Controllers;

use App\Models\Url;
use App\Http\Requests\StoreUrlRequest;
use App\Http\Requests\UpdateUrlRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class UrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Url::orderBy('created_at')->get();
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
     * @param  \App\Http\Requests\StoreUrlRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUrlRequest $request)
    {
       
       Url::create($request->all());
       return response('Created', Response::HTTP_CREATED);
       /* $url = new Url();
        $url->original_url =  $request->original_url;
        $url->shortner_url =  $request->shortner_url;
        $url->save();*/
       //dd($request->all());   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function show(Url $url)
    {
       return $url;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function edit(Url $url)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUrlRequest  $request
     * @param  \App\Models\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUrlRequest $request, Url $url)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function destroy(Url $url)
    {
        $url->delete();
        return response('',Response::HTTP_NO_CONTENT);
    }
}
