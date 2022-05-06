<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Books;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductList extends Component
{
    public $books;
    public function addToCart($product_id){
        $product_item = Books::find($product_id);
        Cart::add(['id'=>$product_item->id,'name'=>'item','weight'=>100,'options' => ['image'=> $product_item->img]]);
        $this->emit('cartUpdated');
        $this->emit('cartcontainerUpdate');
        dd($product_id);
    }
    public function render()
    {
        return view('livewire.product-list');
    }
}
