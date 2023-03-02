<?php 
namespace App\Transformers;

use App\Models\tbl_komcek;
use League\Fractal\TransformerAbstract;
//ini kia
class TblCommcheckTransformer extends TransformerAbstract
{
    public function transform(tbl_komcek $data){
    return [
        'data_id' => (int) $data->id,
        'sku' => $data->sku,
        'md' => $data->md,
        'toko' => $data->toko,       
        'harga_jual' => $data->harga_jual        
    ];
}
} 