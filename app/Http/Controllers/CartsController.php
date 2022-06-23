<?php
namespace App\Http\Controller;
use App\Repositories\Carts;
use App\Repositories\TrOrdersDetail;
use Illuminate\Http\Request;

class CartController extends  Controller
{
    public function getIndex() {
        $data['carts'] = Carts::getAllBySession();
        return view( 'front.crat' ,$data); 
    }
    public function getAdd(request $request) {
        $cart = new Carts();
        $cart->product_id = $request->products_id;
        $cart->customers_id = getCustSessiond()->id;
        $cart->save();

        return redirect ('cart')->with('success', 'success add to cart');
    }
    public function getDelete($id) {
        $cart = Carts::findById($id);
        if($cart->id == null) {
            return redirect('cart')->with('succsess', 'success delete data');
        }
    }
    public function postCheckout (Request $request) {

        $carts Carts::getAllBySession();
        
        if(count($carts) == 0) { I return redirect()->back()->with('danger', 'Cart is empty');
        
        }
        
        $total_price = 0;
        
        foreach($carts as $cart){
        
        $total price += $cart->product_price;
        
        }
        
        // Create Order
        
        $order = new Trorders();
        
        $order->code transaction = generateCodeTrasaction();
        
        $order->total_price = $total_price; $order->customers_id = getCustSessions()->id;
        
        $order->status = "SUCCESS";
        
        $order->save();
        
        // Create Order Detail
        
        foreach($carts as $cart){
        
        $order_detail = new TrordersDetail(); 
        $order_detail->tr_orders_id = $order->id; 
        $order_detail->products_id = $cart->product_id; 
        $order_detail->price = $cart->product_price; 
        $order_detail->save();
        
        }
        
        // Delete cart
        
        Carts: :deleteBy( column: 'customer_id', getCustSessions ()->id); return redirect( to: '/')->with('success', 'Success Checkout');
} 
}