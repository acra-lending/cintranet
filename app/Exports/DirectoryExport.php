<?php

namespace App\Exports;

use App\Directory;
use App\User;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
// use Maatwebsite\Excel\Concerns\WithMultipleSheets;
// use App\Exports\Sheets\DirectoryPerDept;
// use Maatwebsite\Excel\Concerns\FromQuery;
// use Maatwebsite\Excel\Concerns\WithColumnFormatting;
// use Maatwebsite\Excel\Concerns\WithEvents;
// use Maatwebsite\Excel\Events\AfterSheet;
// use Maatwebsite\Excel\Concerns\ShouldAutoSize;
// use Illuminate\Contracts\View\View;
// use Maatwebsite\Excel\Concerns\FromView;

class DirectoryExport implements FromCollection, WithMapping, WithHeadings, WithColumnWidths
{
    // use Exportable;

    // /**
    //  * @return array
    //  */
    // public function sheets(): array
    // {
    //     $sheets = [];

    //     for ($department = 1; $department <= 12; $department++) {
    //         $sheets[] = new DirectoryPerDept($department);
    //     }

    //     return $sheets;
    // }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id',  's2zar_jsn_users.id')
        ->orderBy('division')
        // ->select('name', 'position', 'extension', 'directphone', 'cell', 'email')
        ->get();

        // return DB::table('s2zar_jsn_users')
        // ->join('s2zar_users', 's2zar_users.id',  's2zar_jsn_users.id')
        // ->join('role_user', 'role_user.user_id', 's2zar_users.id')
        // ->select(
        //     's2zar_users.name as name',
        //     's2zar_jsn_users.position as position',
        //     's2zar_jsn_users.extension as extension',
        //     's2zar_jsn_users.directphone as directphone',
        //     's2zar_jsn_users.cell as cell',
        //     's2zar_users.email as email',
        //     's2zar_jsn_users.division as division',
        //     's2zar_jsn_users.departments as departments',
        //     's2zar_jsn_users.team as team',
        //     's2zar_users.created_at as created_at',
        //     )
        // ->where('role_id', 3)
        // ->orWhere('role_id', 2)
        // ->orWhere('role_id', 1)
        // ->orderBy('division')
        // ->get();
    }

    public function map($user): array
    {
        return [
            $user->name,
            $user->position,
            $user->extension,
            $user->directphone,
            $user->cell,
            $user->email,
            $user->division,
            $user->departments,
            $user->team,
            date('Y-n-j', strtotime($user->created_at))
        ];
    }

    public function headings(): array
    {
        return [
            'Name',
            'Position',
            'Ext',
            'Direct Number',
            'Cell Number',
            'Email',
            'Division',
            'Department',
            'Team',
            'Register Date'
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 26.86,
            'B' => 45.29,
            'C' => 4,
            'D' => 13.43,
            'E' => 13.71,
            'F' => 44,
            'G' => 44,
            'H' => 26.43,
            'I' => 19,
            'J' => 15,
        ];
    }

}
