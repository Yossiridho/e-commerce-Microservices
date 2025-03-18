use App\Http\Controllers\UserController;

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/', function () {
    return response()->json(['message' => 'User Service is Running!']);
});
