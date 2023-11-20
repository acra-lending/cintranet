<?php

namespace App\Exports\Sheets;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use DB;

class DirectoryPerDept implements FromQuery, WithTitle
{

    /**
     * @return Builder
     */
    public function query()
    {
        return DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id',  's2zar_jsn_users.id')
        ->select('name', 'position', 'extension', 'directphone', 'cell', 'email', 'created_at')
        ->get();
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'Department ';
    }
}
