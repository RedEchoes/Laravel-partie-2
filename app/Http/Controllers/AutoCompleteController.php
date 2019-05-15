<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Location;
 
class AutoCompleteController extends Controller
{
 
    public function index()
    {
        return view('home');
    }
 
    public function search(Request $request)
    {
          $q = $request->get('term');
      
          $result = Location::where('name', 'LIKE', '%'. $q. '%')->get();
 
          return response()->json($result);
            
    } 
}