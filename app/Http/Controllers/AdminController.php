<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function showAdminPage()
    {
        return view('adminonly');
    }

    public function updateBricks(Request $request)
    {
        $request->validate([
            'numberOfSoldBricks' => 'required|integer',
            'pin' => 'required|string',
        ]);

        if ($request->input('pin') !== '9963') {
            return redirect('/adminonly')->withErrors(['pin' => 'Incorrect pin number']);
        }

        $numberOfSoldBricks = $request->input('numberOfSoldBricks');

        // Update the PHP file with the new number of sold bricks
        $filePath = base_path('resources/views/page2.blade.php');
        $fileContent = File::get($filePath);
        $updatedContent = preg_replace('/fillBrickWall\(\d+\);/', "fillBrickWall($numberOfSoldBricks);", $fileContent);
        $updatedContent = preg_replace('/var numberOfSoldBricks = \d+;/', "var numberOfSoldBricks = $numberOfSoldBricks;", $updatedContent);
        File::put($filePath, $updatedContent);

        return redirect('/adminonly')->with('success', 'Number of sold bricks updated successfully');
    }
}
