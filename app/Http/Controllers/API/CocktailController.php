<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cocktail;

class CocktailController extends Controller
{

    public function uploadFile(Request $request)
{
    $file = $request->file('file');
    $content = file_get_contents($file->getRealPath());

    $newFile = new Cocktail();
    $newFile->name = $file->getClientOriginalName();
    $newFile->content = $content;
    $newFile->save();

    return redirect()->back()->with('success', 'File uploaded successfully.');
}


    public function index (){
        return response()->json([
            'status' => 'Success',
            'result' => Cocktail::all(),
        ]);
    }
}
