<div class="products">
    @foreach($products as $product)

        <div class="product">

            <img src="{{ $product->image_url }}" alt="">

            <h3><a href="#">{{ $product->title }}</a></h3>
            <p><a href="#">{{ $product->content }}</a></p>

        </div>

    @endforeach
</div>
