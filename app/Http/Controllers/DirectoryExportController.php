<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\DirectoryExport;
use App\Exports\InvoicesPerMonthSheet;
use Maatwebsite\Excel\Facades\Excel;

class DirectoryExportController extends Controller
{
    public function export()
    {
        return Excel::download(new DirectoryExport, 'CSC_Acra_Company_Directory.xlsx');
    }
}
