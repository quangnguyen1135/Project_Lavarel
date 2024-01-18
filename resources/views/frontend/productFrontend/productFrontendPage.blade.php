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
                                        <h1>Tất cả sản phẩm</h1>
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


                                                    <span>Tất cả sản phẩm</span>




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


                                            <li class="item "><a href="menu-ship.html">MENU SHIP</a></li>

                                            <li class="item "><a href="cuon-phuong-nam.html">Cuốn</a></li>

                                            <li class="item "><a href="cac-mon-lau.html">Lẩu</a></li>

                                            <li class="item "><a href="nuong.html">Nướng</a></li>

                                            <li class="item "><a href="mon-an-nhe.html">Món ăn nhẹ</a></li>

                                            <li class="item "><a href="banh-trang-trang-bang.html">Bánh tráng Tràng Bàng</a></li>

                                            <li class="item "><a href="set-menu.html">Set Menu</a></li>

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


                                <div class="grid__item large--one-half medium--one-half small--one-whole md-pd-left15">
                                    <div class="product-item-list">
                                        <div class="grid mg-left-10">
                                            <div class="grid__item large--one-third medium--one-whole small--one-whole pd-left10">
                                                <div class="product-img">
                                                    <a href="../products/lau-vit-nau-chao-nho.html">
                                                        <img id="1038518691" src="../../product.hstatic.net/1000093072/product/lau_vit_nau_chao_b1383c967c76496792edb7cd9891d13b_large.jpg" alt="lẩu vịt nấu chao (N)" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="grid__item large--two-thirds medium--one-whole small--one-whole pd-left10">
                                                <div class="product-item-info text-left">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <a href="../products/lau-vit-nau-chao-nho.html">lẩu vịt nấu chao (N)</a>
                                                        </div>
                                                        <div class="product-price clearfix">
                                                            <span class="current-price">348,000₫</span>
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
                                                            <button type="button" class="btnAddToCart add-to-cart" data-id="1084390659"><span><i class="fas fa-shopping-cart"></i></span><span>Order</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                        <span class="page page-node current">1</span>
                                        <span class="page"><a class="page-node" href="all4658.html?page=2">2</a></span>
                                        <span class="page"><a class="page-node" href="all9ba9.html?page=3">3</a></span>
                                        <span class="page page-node ">&hellip;</span>
                                        <span class="page"><a class="page-node" href="all235c.html?page=7">7</a></span>
                                        <span class="nextPage"><a href="all4658.html?page=2"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></span>
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
