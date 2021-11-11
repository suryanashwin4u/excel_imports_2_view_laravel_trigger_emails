<?php

namespace App\Http\Controllers;
use Excel;
use App\Imports\employeeImport;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function importExcelFile() 
    {
            return view('import-form');  
    }
    public function import(Request $request) 
    {
        $data = new employeeImport;
        Excel::import($data, $request->file);
       $emails = $data->data;
        return view('import-form', ['emails' => $emails]);
    }   
}
