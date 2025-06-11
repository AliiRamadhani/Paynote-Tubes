<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expenses;
use App\Models\Categories;

class ExpensesController extends Controller
{
    public function index()
    {
        $expenses = Expenses::getAll();
        $categories = Categories::getAll();
        return view('dashboard.expenses.list', compact('expenses', 'categories'));
    }

    public function addPage()
    {
        $categories = Categories::getAll();
        return view('dashboard.expenses.add', compact('categories'));
    }

    public function insert(Request $request)
    {
        $expense = Expenses::insert([
            'amount'        => $request->amount,
            'description'   => $request->description,
            'date'          => $request->date,
            'id_category'   => $request->id_category,
            'created_at'    => date('Y-m-d H:i:s')
        ]);

        if ($expense) {
            return redirect('/expenses')->with(['success' => $request->description . 'Telah ditambahkan']);
        } else {
            return redirect('/expenses')->with(['error' => 'Terjadi kesalahan']);
        }    
    }
}