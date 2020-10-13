<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\DirectoryExport;
use Maatwebsite\Excel\Facades\Excel;

class DirectoryExportController extends Controller
{
    public function export()
    {
        return Excel::download(new DirectoryExport, 'directory.html', \Maatwebsite\Excel\Excel::HTML);
    }
}
