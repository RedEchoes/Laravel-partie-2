<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Support\Facades\Input;

class RechercheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $q = Input::get('q');
        $locations = Location::where('name', 'LIKE', '%'.$q.'%')->get();
        if (count($locations) > 0) {
            return view('search.index')->withDetails($locations)->withQuery($q);
        } else {
            return redirect('/')->with('message', 'Aucun résultat trouvé !');
        }
    }
}
