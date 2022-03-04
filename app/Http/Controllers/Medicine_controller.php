<?php

namespace App\Http\Controllers;

use App\Exports\MedicineExport;
use App\Imports\MedicineImport;
use App\Models\Medicine;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class Medicine_controller extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImportExport()
    {
       return view('file-import');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImport(Request $request) 
    {
        Excel::import(new MedicineImport, $request->file('file')->store('temp'));
        return back();
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport() 
    {
        return Excel::download(new MedicineExport, 'users-collection.xlsx');
    }
    
    public function search(){
        $search_text = $_GET['query'];
        $medicine = Medicine::where('brand_name','LIKE','%'.$search_text.'%')->get();
    if(count($medicine) > 0)
        return view('welcome')->withDetails($medicine)->withQuery ( $search_text );
    else return view ('welcome')->withMessage('No Details found. Try to search again !');
    }
}