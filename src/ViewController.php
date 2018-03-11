<?php

namespace GPlane\SkinUtilities;

use App\Models\Texture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    public function tools()
    {
        return view('GPlane\SkinUtilities::tools')->with('user', app('user.current'));
    }

    public function converter()
    {
        return view('GPlane\SkinUtilities::converter')->with('user', app('user.current'));
    }

    public function editor1(Request $request)
    {
        $tid = $request->has('tid') ? (Int) $request->tid : -1;
        $texture = Texture::find($tid);
        if (!$texture || $texture->type === 'cape')
            $tid = -1;
        return view('GPlane\SkinUtilities::editor1', [
            'tid' => $tid
        ]);
    }

    public function editor2(Request $request)
    {
        $tid = $request->has('tid') ? (Int) $request->tid : -1;
        $texture = Texture::find($tid);
        if (!$texture || $texture->type === 'cape')
            $tid = -1;
        return view('GPlane\SkinUtilities::editor2', [
            'tid' => $tid
        ]);
    }
}
