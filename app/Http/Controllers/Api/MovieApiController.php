<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class MovieApiController extends Controller
{
    // GET /api/movies
    public function index()
    {
        return response()->json(
            Movie::with('showtimes')->get()
        );
    }

    // GET /api/movies/{id}
    public function show($id)
    {
        return response()->json(
            Movie::with('showtimes')->findOrFail($id)
        );
    }

    // POST /api/movies
    public function store(StoreMovieRequest $request)
    {
        $movie = Movie::create($request->validated());

        return response()->json($movie, 201);
    }

    // PUT /api/movies/{id}
    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());

        return response()->json($movie);
    }

    // DELETE /api/movies/{id}
    public function destroy($id)
    {
        try {
            $movie = Movie::findOrFail($id);
            $movie->delete();

            return response()->json([
                'message' => 'Data film berhasil dihapus'
            ], 200);

        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Data film tidak dapat dihapus karena masih digunakan pada tabel showtimes.'
            ], 409);
        }
    }
}