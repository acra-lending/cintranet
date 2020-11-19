<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ExpenseReportingController extends Controller
{
    public function index()
    {
        // Concur Expense Report Training
        $expenseTraining = Post::where('category_id', 'hrExpenseReporting')
        ->where('filename', 'like', '%Concur Expense Report%')
        ->orderBy('created_at', 'desc')
        ->first();

        return view('pages.humanresources.expensereport')
        ->with([
            'expenseTraining' => $expenseTraining,
        ]);
    }
}
