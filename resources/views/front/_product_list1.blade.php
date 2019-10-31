<div class="media">
    <div class="media-left">
        <a href="#">
            @if(count($product->product_images)>0)
                <img src="{{ config('system.image_path').$product->product_images[0]->image }}" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;">
            @endif
        </a>
    </div>
    <div class="media-body">
        <div class="caption">
            <h4><a href="product.html">{{ $product->name }}</a></h4>


            <div class="ratings">
                {{ $product->category->name }}
            </div>
            <div class="price">
                <span class="price-new">{{ $product->unit_price }}</span>
            </div>
        </div>

    </div>
</div>