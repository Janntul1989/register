<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\homecontroller;
use App\Http\Controllers\frontend\diseasecontroller;
use App\Http\Controllers\frontend\registrationcontroller;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\createcontroller;
use App\Http\Controllers\backend\LoginController;
use Illuminate\Http\request;
use App\Models\Article;
use Illuminate\Support\Facades\Validator;
use App\Events\message;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[homecontroller::class, 'index']);

//Route::get('/registration',[registrationcontroller::class, 'index']);
Route::get('/disease',[diseasecontroller::class, 'index']);



Route::get('/login', function (){
    return view('login');
});

Route::get('/create', function (){
    return view('create');
});

Route::post('/create', function (){
  $Validator = Validator::make(request()->all(), [

          "name" => "required",
          "phonenumber" => "required|min:11",

])->Validate();
   Article::create([

             'name' => request('name'),
             'phonenumber' => request('phonenumber'),
             'nid' => request('nid'),
             'addres' => request('addres'),
             'animal' => request('animal'),
             'bird' => request('bird'),
             'farmer' => request('farmer'),
             'licesnsnumber' => request('licesnsnumber'),

    ]);

return redirect ("/create");

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/generate-pdf',[PdfController::class,'generate_pdf']);
Route::get('/download-pdf',[PdfController::class,'download_pdf']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();



Route::post ( "send-message",function(Request $request){

    event (new message($request->username ,$request->message));
    return ['succes' => true];

});
