<?php
use App\Modules\Komcek\Controllers\Komcek;
use Illuminate\Support\Facedes\Route;

Route::group(['prefix'=> 'v1/komcek', 'namespace' => 'App\Modules\Komcek\Controllers','middleware' => ['api_token']], 
function (){
Route::get('tbl_komcek','Komcek@tbl_komcek');
});
?>