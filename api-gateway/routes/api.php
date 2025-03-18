use App\Http\Controllers\ApiGatewayController;

Route::any('/{service}/{endpoint}', [ApiGatewayController::class, 'forward']);
