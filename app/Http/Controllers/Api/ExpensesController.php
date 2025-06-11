<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expenses;
use App\Models\Categories;

class ExpensesController extends Controller
{
    // GET /api/expenses
    public function index()
    {
        $expenses = Expenses::all();
        return response()->json($expenses);
    }

    // GET /api/expenses/{id}
    public function show($id)
    {
        $expense = Expenses::find($id);

        if (!$expense) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($expense);
    }

    // POST /api/expenses
    public function store(Request $request)
    {
        $validated = $request->validate([
            'amount'      => 'required|numeric',
            'description' => 'required|string',
            'date'        => 'required|date',
            'id_category' => 'required|exists:categories,id_category'
        ]);

        $expense = Expenses::create($validated);

        return response()->json(['message' => 'Expense created', 'data' => $expense], 201);
    }

    // PUT /api/expenses/{id}
    public function update(Request $request, $id)
    {
        $expense = Expenses::find($id);

        if (!$expense) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $validated = $request->validate([
            'amount'      => 'numeric',
            'description' => 'string',
            'date'        => 'date',
            'id_category' => 'exists:categories,id_category'
        ]);

        $expense->update($validated);

        return response()->json(['message' => 'Expense updated', 'data' => $expense]);
    }

    // DELETE /api/expenses/{id}
    public function destroy($id)
    {
        $expense = Expenses::find($id);

        if (!$expense) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $expense->delete();

        return response()->json(['message' => 'Expense deleted']);
    }
}
