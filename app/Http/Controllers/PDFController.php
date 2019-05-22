<?php
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
use App;
use DB;
use Storage;
use Response;
  
class PDFController extends Controller
{
    
	// Generate PDF Without force downloadin PDF
    public function generatePDF($id){
        $result = DB::table('legislations')->where('id',$id)->get();

        $path="upload/legislations/". $result[0]->body;

        header('content-type:application/pdf');

        echo file_get_contents($path);

        //    $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML($data);
        // return $pdf->stream();

    }
}