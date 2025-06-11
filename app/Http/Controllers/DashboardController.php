<?php

namespace App\Http\Controllers;
use App\Models\Incomes;
use App\Models\Expenses;
use App\Models\Balance;
use App\Models\Categories;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $total_incomes = Incomes::totalIncomes();

        $total_categories = Categories::totalCategories();

        $total_expenses = Expenses::totalExpenses();

        $total_balance = $total_incomes - $total_expenses;

        $incomesAndExpenses = Balance::getAllIncomesAndExpenses();

        $categories = Categories::getAll();

        $data = [
            'total_incomes' => $total_incomes,
            'total_balance' => $total_balance,
            'total_categories' => $total_categories,
            'total_expenses' => $total_expenses,
            'incomesAndExpenses' => $incomesAndExpenses,
            'categories' => $categories
        ];

        return view('dashboard/index', $data);
    }
}
