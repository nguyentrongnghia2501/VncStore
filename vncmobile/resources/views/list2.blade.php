<div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="" class="wid-view-more">View All</a>
                        @foreach($product as $key => $products)
                        <div class="single-wid-product col-md-4">
                            <a href="single-product.html"><img src="/nvs/{{$products->thum}}" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">{{$products->name}}</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>${{$products->price}}</ins> <del>${{$products->price_sale}}</del>
                            </div>
                        </div>
                        @endforeach
                        <!--  -->


                    </div>
                </div>


            </div>
        </div>
    </div> <!-- End product widget area -->
