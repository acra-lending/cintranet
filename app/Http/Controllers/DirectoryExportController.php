<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\DirectoryExport;
use App\Exports\UWExport;
use App\Exports\TMExport;
use App\Exports\CDLExport;
use App\Exports\InvoicesPerMonthSheet;
use Maatwebsite\Excel\Facades\Excel;

class DirectoryExportController extends Controller
{
    public function export()
    {
        return Excel::download(new DirectoryExport, 'CSC_Acra_Company_Directory.xlsx');
    }

    public function exportUW()
    {
        return Excel::download(new UWExport, 'UW_Teams.xlsx');
    }

    public function exportTM()
    {
        return Excel::download(new TMExport, 'TM_Teams.xlsx');
    }

    public function exportCDL()
    {
        return Excel::download(new CDLExport, 'CDL_Teams.xlsx');
    }
}
