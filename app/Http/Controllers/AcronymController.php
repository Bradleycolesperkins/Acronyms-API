<?php

namespace App\Http\Controllers;

use App\Models\Acronym;
use Illuminate\Http\Request;

class AcronymController extends Controller
{
    public function index()
    {
        return Acronym::with(['user'])->get();
    }

    public function show($id)
    {
        $next = Acronym::where('id', '>', $id)->orderBy('id','asc')->first();
        $previous = Acronym::where('id', '<', $id)->orderBy('id','desc')->first();
        $acronym = Acronym::with(['user'])->findOrFail($id);
        $acronym = $acronym->toArray();
        $acronym['next'] = $next;
        $acronym['previous'] = $previous;
        return $acronym;
    }

    public function create(Request $request)
    {
        $acronym = new Acronym();
        $acronym->user_id = auth()->user()->id;
        $acronym->acronym = $request->acronym;
        $acronym->expansion = $request->expansion;
        $acronym->definition = $request->definition;
        $acronym->save();

        return $acronym;
    }


    public function test(){
        dd('in');
    }


}
