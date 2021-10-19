<?php

namespace App\Http\Controllers;

use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OramiController extends Controller
{
    public function index(){
        try{
            $product = DB::table('produck')->get();
            Log::info("==============================================================");
            Log::info("get data product".$product);
            Log::info("==============================================================");
            foreach($product as $key){
                $stock = DB::table('stock')->where('productId', $key->productId)->get();
                Log::info("get data stock".$stock);
                Log::info("==============================================================");
                $detail= array();
                foreach ($stock as $dataStock){
                    $location = DB::table('location')->where('locationId', $dataStock->locationId)->get();
                    Log::info("get data location".$location);
                    Log::info("==============================================================");
                    foreach($location as $resultLocation){
                        $detail[]=array(
                            "locationName"=>$resultLocation->locationName, 
                            "stock"=>$dataStock->stock
                        );
                    }
                }
                $hasil["result"] []= 
                array(
                "produckName"=>$key->produckName,
                "stock" => (object)[
                    "total"=>$stock->sum('stock'),
                    "detail"=>$detail
                    ]
                );
            }
            Log::info("result to client ". json_encode($hasil));
            return response()->json($hasil);   
        }catch(Exception $e){
            throw new Exception ("error to process data ". $e->getMessage());
        }    
        
    }
}
