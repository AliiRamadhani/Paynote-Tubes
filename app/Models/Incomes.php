<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incomes extends Model
{
    protected $table = 'incomes';
    protected $primaryKey = 'id_income';
    protected $secondaryTable = 'balance';

    public $timestamps = false;
    protected $fillable = [
        'amount', 'description', 'date', 'id_category', 'created_at'
    ];

    public static function getAll()
    {
        return Incomes::all();
    }

    public static function getById($id)
    {
        return Incomes::where('id_income', $id)->first();
    }

    public static function insert($data)
    {
        $amount = $data['amount'];
        $description = "Pemasukan";
        $balance = Balance::create([
            'amount' => $amount,
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        if ($balance) {
            $income = Incomes::create($data);
            return $income;
        }
        return false;
    }

    public static function updateData($id_income, $data)
    {
        return Incomes::where('id_income', $id_income)->update($data);
    }

    public static function deleteData($id)
    {
        return Incomes::where('id_income', $id)->delete();
    }

    public static function totalIncomes()
    {
        $incomes = Incomes::getAll();
        $total_incomes = 0;
        foreach ($incomes as $income) {
            $total_incomes += $income->amount;
        }
        return $total_incomes;
    }
}