<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisements;

class AdvertisementsController extends Controller
{
    //


    public function index() {
        try {

        //$ads =  Advertisements::paginate(10);
        $ads =  Advertisements::orderBy('created_at', 'DESC')->get();;
        return response()->json($ads,200);

        } catch (\Throwable $th) {

            return response()->json(['error' => $th->getMessage()], 500);
        }

    }

    public function create(Request $request) {
        // return response()->json($request->all());
        // Todo  data validation before saving
        try {

            $ad =  Advertisements::create([
                'title' => $request->title,
                'link' => $request->link,
                'valid_until' => $request->valid_until,
            ]);
            $ad->save();

            return response()->json('Ad created', 201);
        } catch (\Throwable $th) {

            // catch errors
            return response()->json(['error' => $th->getMessage()], 500);
        }

    }

    // Show

    // Update

    // Edit








}
