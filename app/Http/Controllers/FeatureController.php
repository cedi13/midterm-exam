<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature; // Use Feature model instead of User

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::all(); // Fetch all records from the "features" table
        return view('features.index', compact('features')); // Pass data to Blade
    }
}
