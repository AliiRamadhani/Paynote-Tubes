<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Incomes;
use App\Models\Categories;

class IncomesController extends Controller
{
    // GET /api/incomes
    public function index()
    {
        $incomes = Incomes::all();
        return response()->json($incomes);
    }

    // GET /api/incomes/{id}
    public function show($id)
    {
        $income = Incomes::find($id);

        if (!$income) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($income);
    }

    // POST /api/incomes
    public function store(Request $request)
    {
        $validated = $request->validate([
            'amount'      => 'required|numeric',
            'description' => 'required|string',
            'date'        => 'required|date',
            'id_category' => 'required|exists:categories,id_category'
        ]);

        $income = Incomes::create($validated);

        return response()->json(['message' => 'Income created', 'data' => $income], 201);
    }

    // PUT /api/incomes/{id}
    public function update(Request $request, $id)
    {
        $income = Incomes::find($id);

        if (!$income) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $validated = $request->validate([
            'amount'      => 'numeric',
            'description' => 'string',
            'date'        => 'date',
            'id_category' => 'exists:categories,id_category'
        ]);

        $income->update($validated);

        return response()->json(['message' => 'Income updated', 'data' => $income]);
    }

    // DELETE /api/incomes/{id}
    public function destroy($id)
    {
        $income = Incomes::find($id);

        if (!$income) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $income->delete();

        return response()->json(['message' => 'Income deleted']);
    }
}
