<div>
    <div class="cart-items">
        @foreach ($cart as $cart_item)
        @php
            $book = App\Models\Books::find($cart_item->id)
        @endphp
        <div class="item">
            <img src="{{ asset("img/$cart_item->options->image") }}" alt="">
            <span class="title">{{ $book->title }}</span>
            <span class="remove" title="Xóa" wire:click="xoa('{{ $cart_item->rowId }}')"><svg width="512px" height="512px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title>ionicons-v5-m</title><path d="M289.94,256l95-95A24,24,0,0,0,351,127l-95,95-95-95A24,24,0,0,0,127,161l95,95-95,95A24,24,0,1,0,161,385l95-95,95,95A24,24,0,0,0,385,351Z"/></svg></span>
        </div>
        @endforeach
        <a href="{{ route('checkout') }}" class="check-out">Tiếp tục</a>
    </div>
</div>
