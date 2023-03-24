<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PrestamosExport;
use App\Exports\PrestamosExportB;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller{
    
    public function exportA(){
        return Excel::download(new PrestamosExport, 'prestamosA.xlsx');
    }
    public function exportB(){
        return Excel::download(new PrestamosExportB, 'prestamosB.xlsx');
    }
}
