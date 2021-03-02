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

        $expenseGuide = Post::where('category_id', 'hrExpenseGuide')
        ->where('filename', 'like', '%Paylocity Expense Guide%')
        ->orderBy('created_at', 'desc')
        ->first();

        $expenseGuideMobile = Post::where('category_id', 'hrExpenseGuideMobile')
        ->where('filename', 'like', '%Paylocity Expense Guide Mobile%')
        ->orderBy('created_at', 'desc')
        ->first();

        $expenseGuideCellInternet = Post::where('category_id', 'hrExpenseCellInternet')
        ->where('filename', 'like', '%Paylocity Cell Phone and Internet Reimbursement%')
        ->orderBy('created_at', 'desc')
        ->first();

        return view('pages.humanresources.expensereport')
        ->with([
            'expenseTraining'           => $expenseTraining,
            'expenseGuide'              => $expenseGuide,
            'expenseGuideMobile'        => $expenseGuideMobile,
            'expenseGuideCellInternet'  => $expenseGuideCellInternet,
        ]);
    }
}
