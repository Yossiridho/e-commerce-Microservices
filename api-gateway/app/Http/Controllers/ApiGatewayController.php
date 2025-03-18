namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiGatewayController extends Controller
{
    public function forward(Request $request, $service, $endpoint)
    {
        $services = [
            'user' => 'http://localhost:8001/api',
            'product' => 'http://localhost:8002/api',
            'order' => 'http://localhost:8003/api'
        ];

        if (!isset($services[$service])) {
            return response()->json(['message' => 'Service not found'], 404);
        }

        $response = Http::send($request->method(), "{$services[$service]}/{$endpoint}", [
            'query' => $request->query(),
            'json' => $request->all()
        ]);

        return response()->json($response->json(), $response->status());
    }
}
