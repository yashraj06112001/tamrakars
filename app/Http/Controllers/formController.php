<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\analysis;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AnalysisExport;
use App\Exports\DataExport;
class formController extends Controller
{
    //
    function formhandler(Request $req)
    {
        $name = $req->name;
    $phone = $req->phone;
    $pincode = $req->pincode;

    // Check if the data already exists in the database
    $existingData = Analysis::where('name', $name)
                            ->where('phone', $phone)
                            ->where('pincode', $pincode)
                            ->first();

    if ($existingData) {
        // Data already exists
        return response()->json(['message' => 'Data already exists'], 409);
    } else {
        // Data does not exist, save it
        $total = $req->total;
        $male = $req->male;
        $female = $req->female;
        $children = $req->children;

        $data = new Analysis;
        $data->name = $name;
        $data->phone = $phone;
        $data->total = $total;
        $data->male = $male;
        $data->female = $female;
        $data->children = $children;
        $data->pincode = $pincode;
        $data->save();

        return response()->json(['message' => 'Data added successfully'], 200);
    }
}
    public function process(Request $request)
    {
        $pincode = $request->input('pincode');
        
        // Fetch data based on pincode from your 'analysis' model
        $data = analysis::where('pincode', $pincode)->get();
        if ($data->isEmpty()) {
            return redirect()->back()->with('message', 'No data found for this pincode.');
        }
       
        return Excel::download(new AnalysisExport($data), 'analysis.xlsx');
    }

    public function take(Request $req)
    {
            if($req->button==="add")
            {
                return redirect()->route('form');
            }
            else{
                return redirect()->route('admin');
            }
    }
    public function newprocess(Request $req)
    {
        $data = analysis::all();
        if ($data->isEmpty()) {
            return redirect()->back()->with('message2', 'No data exist !!!!.');
        }
       
        return Excel::download(new AnalysisExport($data), 'analysis.xlsx');
    }
}
