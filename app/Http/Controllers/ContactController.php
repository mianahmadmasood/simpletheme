<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use PDF;

class ContactController extends Controller
{
    public function index()
    {
        $allConact = Contact::paginate(10);
        if( $allConact) {
            $massage = 'All Contact Data';
            return successResponse($allConact, $massage);
        }else{
            $massage = "Error:Data no more";
            $error =[];
            return errorResponse($error, $massage);
        }

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdfview(Request $request)
    {
        $items = DB::table("items")->get();
        view()->share('items',$items);


        if($request->has('download')){
            $pdf = PDF::loadView('reportGen.pdf');
            return $pdf->download('pdfview.pdf');
        }


        return view('reportGen.pdf');
    }

}
