<div>
    <div class="item-list">
        @foreach ($books as $book)
            <div class="item">
                <img src="{{ asset("img/$book->img") }}" alt="{{ $book->title }}">
                <span class="title">{{ $book->title }}</span>
                <span class="author">{{ $book->author }}</span>
                <form wire:submit.prevent="addToCart('{{ $book->id }}')">
                    @csrf
                    <button type="submit">Mượn sách</button>
                </form>
            </div>
        @endforeach
    </div>

</div>
