<?php
namespace App\Modules\Komcek\Controllers;
use App\Http\Controllers\Controllers;
use Illuminate\Http\Request; 
use App\Transformers\TblCommcheckTransformer;

class Activities extends Controller{
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
}
?>