
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller {
    // This route requires authentication via Sanctum
    public function protectedRoute(Request $request) {
        return response()->json(['message' => 'This is a protected route']);
    }

    // This route is accessible without authentication
    public function openRoute() {
        return response()->json(['message' => 'This is an open route']);
    }
}
