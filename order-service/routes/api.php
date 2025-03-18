use App\Http\Controllers\OrderController;

Route::post('/orders', [OrderController::class, 'store']);
Route::get('/orders/{user_id}', [OrderController::class, 'userOrders']);
