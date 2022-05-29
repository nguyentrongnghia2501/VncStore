<div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Sản phẩm nổi bật </h2>
                        <div class="product-carousel">
                        @foreach($product  as $key =>$products )
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="/nvs/{{$products->thum}}" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2><a href="/san-pham/{{$products->id}}">{{$products->name}}</a></h2>

                                <div class="product-carousel-price">
                                    <ins>{{ App\Helpers\Helper::price($products->price,$products->price_sale)}}</ins>
                                </div>
                            </div>
                            @endforeach




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
