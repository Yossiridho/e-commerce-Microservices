namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'items' => 'required|array',
            'items.*.product_id' => 'required|exists:products,id',
            'items.*.quantity' => 'required|integer|min:1'
        ]);

        // Buat order baru
        $order = Order::create([
            'user_id' => $request->user_id,
            'total_price' => 0,
            'status' => 'pending'
        ]);

        $total_price = 0;

        // Tambahkan item ke order
        foreach ($request->items as $item) {
            $orderItem = OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['quantity'] * 10000 // Misalnya harga tetap 10,000
            ]);
            $total_price += $orderItem->price;
        }

        $order->update(['total_price' => $total_price]);

        return response()->json(['message' => 'Order created successfully', 'order' => $order], 201);
    }

    public function userOrders($user_id)
    {
        $orders = Order::where('user_id', $user_id)->with('items')->get();
        return response()->json($orders);
    }
}
