<?php

namespace App\Http\Controllers;

use App\Image;
use App\Location;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
        $this->middleware('ajax')->only('destroy', 'update');
    }

    public function index(Request $request)
    {
        
        $images = Image::with('users')->get();
       
        $images = $this->getReportedImage($images)->where('dissaproved', 1);
        
        $pageStart = request()->get('page', 1);
        $perPage = 6;
        $offset = ($pageStart * $perPage) - $perPage;

        $images = new Paginator(
            array_slice($images->all(), $offset, $perPage, true),
            $images->count(),
            $perPage,
            null,
            [
                'path'  => $request->url(),
                'query' => $request->query(),
            ]
        );

        $images->appends(['search' => $request->post('search')]);

        return view('signalement.index', compact('images'));
    }

    public function getReportedImage($images)
    {
        $images->transform(function ($image) use ($images) {
            $number = $image->users->where('pivot.alert', 1)->count();
            
            $image->dissaproved = ($number < 1) ? 0 : 1;
            
            return $image;
        });
        
        return $images;
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
    public function destroy(Image $image)
    {
        if ($image->delete()) {
            return response()->json([
                'id' => $image->id,
            ], 200);
        } else {
            return response()->json(['message' => 'Not Found!'], 404);
        }
    }
}
