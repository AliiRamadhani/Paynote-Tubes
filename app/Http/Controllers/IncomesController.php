<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incomes;
use App\Models\Balance;
use App\Models\Categories;

class IncomesController extends Controller
{
    public function index()
    {
        $incomes = Incomes::getAll();
        $categories = Categories::getAll();
        return view('dashboard.incomes.list', compact('incomes', 'categories'));
    }

    public function addPage()
    {
        $title = "Tambah Data Pemasukan";
        $categories = Categories::getAll();
        return view('dashboard.incomes.add', compact('title', 'categories'));
    }

    public function insert(Request $request)
    {
        
        $income = Incomes::insert([
            'amount'        => $request->amount,
            'description'   => $request->description,
            'date'          => $request->date,
            'id_category'   => $request->id_category,
            'created_at'    => now(),
        ]);

        if ($income) {
            return redirect()->route('incomes')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('incomes')->with('error', 'Data Gagal Ditambahkan');
        }
    }

    public function delete($id)
    {
        $income = Incomes::deleteData($id);

        if ($income) {
            return redirect()->route('incomes')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('incomes')->with('error', 'Data Gagal Dihapus');
        }
    }
}