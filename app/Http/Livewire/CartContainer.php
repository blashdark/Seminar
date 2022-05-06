<?php

namespace App\Http\Livewire;

use App\Models\Books;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Livewire\Component;

class CartContainer extends Component
{
    protected $listeners = [
        'cartcontainerUpdate' => 'render'
    ];
    public function xoa($rowId){
        Cart::remove($rowId);
        $this->emit('cartUpdated');
    }
    public function render()
    {
        $cart=Cart::content();
        return view('livewire.cart-container',[
            'cart'=>$cart
        ]);
    }
}
