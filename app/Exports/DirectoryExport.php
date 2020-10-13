<?php

namespace App\Exports;

use App\Directory;
// use App\User;
// use DB;
// use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\FromQuery;
// use Maatwebsite\Excel\Concerns\WithMapping;
// use Maatwebsite\Excel\Concerns\WithHeadings;
// use Maatwebsite\Excel\Concerns\WithEvents;
// use Maatwebsite\Excel\Events\AfterSheet;
// use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DirectoryExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    // public function registerEvents(): array
    // {

    //     $styleArray = [
    //         'font' => [
    //             'bold' => true,
    //         ]
    //     ];

    //     return [
    //         // Handle by a closure.
    //         AfterSheet::class => function(AfterSheet $event) use($styleArray) {
    //             $event->sheet->getStyle('A1:G1')->applyFromArray($styleArray);
    //         }
    //     ];
    // }

    // public function query()
    // {
    //     return DB::table('s2zar_jsn_users')
    //     ->join('s2zar_users', 's2zar_users.id',  's2zar_jsn_users.id')
    //     ->orderBy('departments', 'asc');
    // }

    public function view(): View
    {
        return view('pages.usermanagement.exports', [
            'directory' => Directory::all() 
        ]);
    }

    // public function map($user): array
    // {
    //     return [
    //         $user->name,
    //         $user->position,
    //         $user->departments,
    //         $user->extension,
    //         $user->directphone,
    //         $user->cell,
    //         $user->email,
    //     ];
    // }

    // public function headings(): array
    // {
    //     return [
    //         'Name',
    //         'Position',
    //         'Department',
    //         'Ext',
    //         'Direct Number',
    //         'Cell Number',
    //         'Email',
    //     ];
    // }
}
