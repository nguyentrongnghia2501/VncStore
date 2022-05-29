
<!DOCTYPE html>

<html lang="en">
  <head>
   @include('head')

  </head>
  <body>


   <!-- @yield('menu')
     -->
     <div class="header-area">

<div class="container">
    <div class="row">



    </div>
</div>
</div> <!-- End header area -->
<div class="site-branding-area">
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="logo">
                <h1><a href="index.html"><span>Vnc Mobile</span></a></h1>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="shopping-item">
                <a href="cart.html">Cart - <span class="cart-amunt">$800</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
            </div>
        </div>
    </div>
</div>
</div> <!-- End site branding area -->

<div class="mainmenu-area">
<div class="container">
    <div class="row">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="header-navigation">
            <ul>
                <Li><a href="">Home</a></Li>
                @foreach($menus_lm as $menul)
                <!-- href="/danh-muc/'.$menu->id.'-'. Str::slug($menu->name, '-').'.html"
                href="{{$menul->id}}.'-'.{{Str::slug($menul->name, '-').'.html'}}"-->
                <li class="dropdown">
                    <a href="/danh-muc/{{$menul->id}}">
                        {{$menul->name}}

                    </a>
                    @if($menul->isChild->count())

                    <ul class="dropdown-menu" >

                          @foreach($menul->isChild as $menuChild)
                        <li><a href="shop-product-list.html">{{$menuChild->name}}</a></li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach

            </ul>
        </div>
    </div>
</div>

</div> <!-- End mainmenu area -->

    <div class="slider-area">
        <div class="zigzag-bottom"></div>
        <div id="slide-list" class="carousel carousel-fade slide" data-ride="carousel">

            <div class="slide-bulletz">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="carousel-indicators slide-indicators">
                                <li data-target="#slide-list" data-slide-to="0" class="active"></li>
                                <li data-target="#slide-list" data-slide-to="1"></li>
                                <li data-target="#slide-list" data-slide-to="2"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <div class="single-slide">
                        <div class="slide-bg slide-two"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>Giới thiệu</h2>
                                                <p>Công ty TNHH Vnc Mobile thành lập vào tháng 05/2022 bởi 1 thành viên sáng lập Nguyễn Trọng Nghĩa, lĩnh vực hoạt động chính của công ty bao gồm: mua bán sửa chữa các thiết bị liên quan đến điện thoại di động, thiết bị kỹ thuật số và các lĩnh vực liên quan đến thương mại điện tử</p>
                                                <a href="" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-three"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>Vnc Mobile</h2>

                                                <p>Vnc Mobile ngày càng nhận được nhiều sự tín nhiệm và lòng tin của người tiêu dùng, số lượng khách mỗi ngày đến cửa hàng dao động gần 520.000 người. Do vậy, để có thể phục vụ khách hàng một cách tốt nhất các chuỗi hệ thống cửa hàng ngày càng được mở rộng ở các khu vực để khách hàng thuận tiện và dễ dàng mua sắm các thiết bị điện tử, gia dụng,...cho gia đình. ngày càng nhận được nhiều sự tín nhiệm và lòng tin của người tiêu dùng, số lượng khách mỗi ngày đến cửa hàng dao động gần 520.000 người. Do vậy, để có thể phục vụ khách hàng một cách tốt nhất các chuỗi hệ thống cửa hàng ngày càng được mở rộng ở các khu vực để khách hàng thuận tiện và dễ dàng mua sắm các thiết bị điện tử, gia dụng,...cho gia đình.</p>
                                                <a href="" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- End slider area -->

    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->

    @include('list')

    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <h2 class="section-title">Brands</h2>
                        <div class="brand-list">
                            <img src="/Ustemplate/img/services_logo__1.jpg" alt="">
                            <img src="/Ustemplate/img/services_logo__2.jpg" alt="">
                            <img src="/Ustemplate/img/services_logo__3.jpg" alt="">
                            <img src="/Ustemplate/img/services_logo__4.jpg" alt="">
                            <img src="/Ustemplate/img/services_logo__1.jpg" alt="">
                            <img src="/Ustemplate/img/services_logo__2.jpg" alt="">
                            <img src="/Ustemplate/img/services_logo__3.jpg" alt="">
                            <img src="/Ustemplate/img/services_logo__4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->

   @include('list2')

    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>e<span>Vnc Mobile</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Order history</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Vendor contact</a></li>
                            <li><a href="#">Front page</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="#">Mobile Phone</a></li>
                            <li><a href="#">Home accesseries</a></li>
                            <li><a href="#">LED TV</a></li>
                            <li><a href="#">Computer</a></li>
                            <li><a href="#">Gadets</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->

    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2015 eElectronics. All Rights Reserved. Coded with <i class="fa fa-heart"></i> by <a href="http://wpexpand.com" target="_blank">WP Expand</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->

    @include('footer')
  </body>
</html>
