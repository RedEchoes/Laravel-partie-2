<?php

namespace App\Http\Controllers;

use App\Image;
use App\Location;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        /*   $this->middleware('auth', ['except' => ['index','show']]); */
        $this->middleware('ajax')->only('destroy');
    }

    public function index(Request $request)
    {
        $images = Image::orderBy('created_at', 'desc')->get();

        $images = $this->getReportedImage($images)->where('approved', 1);
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

        return view('images.index', compact('images'));
    }

    public function getReportedImage($images)
    {
        $images->transform(function ($image) use ($images) {
            $number = $image->users->where('pivot.alert', 1)->count();
            $image->approved = ($number >= 2) ? 0 : 1;

            return $image;
        });

        return $images;
    }

    public function user(User $user)
    {
        $images = $this->getImagesForUser($user->id);

        return view('search', compact('user', 'images'));
    }

    public function alert(Request $request, $id)
    {
        $user_id = auth()->user()->id;
        $image = Image::find($id);
        $image->users()->syncWithoutDetaching([$user_id => ['alert' => 1]]);

        return back();
    }

    public function randomImage()
    {
        $images = Image::all();
        $randomImages = $images[rand(0, count($images) - 1)];

        return view('welcome', compact('randomImages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Location::pluck('name', 'id');

        return view('images.create', compact('locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2000',
            'name' => 'nullable|string|max:255',
        ]);

        // Enregistre l'image originale dans le dossier '/storage/app/public/images'
        $path = basename($request->image->store('images', 'public'));

        // Enregistre l'image réduite dans le dossier '/storage/app/public/thumbs'
        $image = InterventionImage::make($request->image)->resize(300, 300, function ($constraint) {
            $constraint->upsize();
        })->encode();

        Storage::put('public/thumbs/'.$path, $image);

        // Sauvegarde dans la base de données
        $image = new Image;
        $image->name = $path;
        $image->location_id = $request->location_id;
        $image->user_id = auth()->user()->id;
        $image->save();

        return redirect('images')->with('ok', __("L'image a bien été enregistrée"));
        $image->locations()->sync(request()->get('locations'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $images = Image::all();

        return view('images.show', compact('images'));
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

    public function getImagesForUser($id)
    {
        return Image::user()->whereHas('user', function ($query) use ($id) {
            $query->whereId($id);
        });
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
