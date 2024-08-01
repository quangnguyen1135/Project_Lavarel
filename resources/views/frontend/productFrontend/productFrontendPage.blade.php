@extends('frontend.layout.master')
@section('content')
<section id="collection-wrapper">
    <div class="wrapper">
        <div class="inner">
            <div class="grid">
                <div class="grid__item large--one-whole medium--one-whole small--one-whole float-right">
                    <div class="collection-content-wrapper">
                        <div class="collection-head">
                            <div class="grid">
                                <div class="grid__item large--one-whole medium--one-whole small--one-whole text-center">
                                    <div class="collection-title">
                                        <h1  id="selectedCategory">Tất cả sản phẩm</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="collection_breadcrumb">
                                <div class="grid">
                                    <div class="grid__item large--one-whole medium--one-whole small--one-whole">
                                        <div class="breadcrumb-content">
                                            <div class="inner text-left">
                                                <div class="breadcrumb-small">
                                                    <a href="../index.html" title="Quay trở về trang chủ">Trang chủ</a>
                                                    <span aria-hidden="true">/</span>
                                                    <!-- Add an id to the span element -->
                                                    <span id="selectedCategory" name="cate">Tất cả sản phẩm</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collection_menu_sort">
                                <div class="grid">
                                    <div class="grid__item large--two-thirds medium--one-whole small--one-whole">
                                        <ul id="collection_menu_top" class="no-bullets">
                                            <li class="item "><a href="/productsPage/">Tất cả sản phẩm</a></li>
                                            <li class="item "><a href="/productsPage/1">Món Nhật</a></li>
                                            <li class="item "><a href="/productsPage/2">Món VN</a></li>
                                            <li class="item "><a href="/productsPage/3">Món Hàn</a></li>
                                            <li class="item "><a href="/productsPage/4">Món Thái</a></li>
                                        </ul>
                                    </div>
                                    <div class="grid__item large--one-third medium--one-whole small--one-whole">
                                        <div class="collection-sorting-wrapper">
                                            <!-- /snippets/collection-sorting.liquid -->
                                            <div class="form-horizontal text-right">
                                                <label for="SortBy">Sắp xếp</label>
                                                <select name="SortBy" id="SortBy">
                                                    <option value="manual">Tùy chọn</option>
                                                    <option value="best-selling">Sản phẩm bán chạy</option>
                                                    <option value="title-ascending">Theo bảng chữ cái từ A-Z</option>
                                                    <option value="title-descending">Theo bảng chữ cái từ Z-A</option>
                                                    <option value="price-ascending">Giá từ thấp tới cao</option>
                                                    <option value="price-descending">Giá từ cao tới thấp</option>
                                                    <option value="created-descending">Mới nhất</option>
                                                    <option value="created-ascending">Cũ nhất</option>
                                                </select>
                                            </div>
                                            <script>
                                                /*============================================================================
    Inline JS because collection liquid object is only available
    on collection pages and not external JS files
  ==============================================================================*/
                                                Haravan.queryParams = {};
                                                if (location.search.length) {
                                                    for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
                                                        aKeyValue = aCouples[i].split('=');
                                                        if (aKeyValue.length > 1) {
                                                            Haravan.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
                                                        }
                                                    }
                                                }
                                                $(function() {
                                                    $('#SortBy')
                                                        .val('created-descending')
                                                        .bind('change', function() {
                                                            Haravan.queryParams.sort_by = jQuery(this).val();
                                                            location.search = jQuery.param(Haravan.queryParams);
                                                        });
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collection-body">
                            <div class="grid-uniform md-mg-left-15 product-list">
                            @foreach ($products as $product)
                                <div class="grid__item large--one-half medium--one-half small--one-whole md-pd-left15">
                                    <div class="product-item-list">
                                        <div class="grid mg-left-10">
                                            <div class="grid__item large--one-third medium--one-whole small--one-whole pd-left10">
                                                <div class="product-img">
                                                <a href="products/{{$product->id}}">
                                                        <img id="1038518691" src="{{asset('/')}}frontend/img_product/{{$product->image}}" alt="lẩu vịt nấu chao (N)" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="grid__item large--two-thirds medium--one-whole small--one-whole pd-left10">
                                                <div class="product-item-info text-left">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <a href="../products/lau-vit-nau-chao-nho.html">{{$product->name}}</a>
                                                        </div>
                                                        <div class="product-price clearfix">
                                                            <span class="current-price">{{$product->price}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-coll">
                                                        <a href="menu-ship.html">MENU HÀNG NGÀY</a>
                                                        <span>/</span>
                                                        <a href="cac-mon-lau.html">Lẩu</a>
                                                    </div>
                                                    <div class="product-desc">
                                                    </div>
                                                    <div class="product_btn_price">
                                                        <div class="product_btn">
                                                            <button type="button" class="btnAddToCart add-to-cart" data-id="1084390659"><span><i class="fas fa-shopping-cart"></i></span><span><a style="color:aliceblue;" href="products/{{$product->id}}">Oder</a></span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="grid__item large--one-whole">
                                    <div class="set_combo text-right">
                                        <a href="collections/set-menu.html">Set món ăn</a>
                                    </div>
                                    <hr />
                                </div>
                            </div>
                            <div class="pagination not-filter">
                                <div id="pagination-" class="text-center clear-left">
                                    <div class="pagination-custom">
                                    {!! $products->links() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
