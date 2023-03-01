<?php
use App\Modules\Komcek\Controllers\Activities;
use Illuminate\Support\Facedes\Route;

Route::group(['prefix'=> 'v1/activity', 'namespace' => 'App\Modules\Komcek\Controlllers','middleware' => ['api_token']], 
function (){
Route:get('tbl_komcek','Activities@tbl_komcek');
});
?>