<?php
namespace App\Modules\Komcek\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Transformers\TblCommcheckTransformer;
class Komcek extends Controller{
    public function tbl_komcek(){
        $data = \App\Models\tbl_komcek::get();
        $response = fractal()
        ->collection($data)
        ->transformWith(new TblCommcheckTransformer())
        ->toArray();

        return response()->json([
            'status' => 200,
            'message' => 'Success',
            'data' => $response['data']
        ]);
    } 

    // public function update_komcek(){
    //     $id_komcek = $request->input('id_komcek');
    //     $harga_jual = $harga_jual->input('harga_jual');
    //     $harga_beli = $harga_beli->input('harga_beli');

    //     try{
    //         foreach($id_komcek as $kry => $row){
    //             $data = \App\Models\tbl_komcek::where('id_komcek',$row)
    //             ->first();

    //             if($data){
    //                 $data->update([
    //                     'harga_beli' => $harga_beli,
    //                     'harga_jual' => $hawrgajual
    //                 ]);
    //             }
    //         }
    //     }
    // }

    // public function 



}
?>