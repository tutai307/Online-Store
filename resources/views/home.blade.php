@extends('layouts.app')

@section('title', 'Trang chủ - Online Store')

@section('content')
    {{-- Carousel --}}
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?w=1920&h=600&fit=crop"
                    class="d-block w-100"
                    alt="Banner 1 - Thời trang">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=1920&h=600&fit=crop"
                    class="d-block w-100"
                    alt="Banner 2 - Giày dép">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1445205170230-053b83016050?w=1920&h=600&fit=crop"
                    class="d-block w-100"
                    alt="Banner 3 - Phụ kiện">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <!-- Hero Section -->
        <div class="hero-section">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Chào mừng đến với Online Store</h1>
                    <p>Khám phá các sản phẩm chất lượng với giá cả hợp lý</p>
                    <a href="#" class="btn-primary">Mua sắm ngay</a>
                </div>
                <div class="hero-image">
                    <img src="https://via.placeholder.com/600x400" alt="Hero Image">
                </div>
            </div>
        </div>

        <!-- Featured Products -->
        <h2 class="section-title">Sản phẩm nổi bật</h2>
        <div class="products-grid">
            @for ($i = 1; $i <= 4; $i++)
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" alt="Product {{ $i }}">
                    <div class="card-body">
                        <h5 class="card-title">Sản phẩm {{ $i }}</h5>
                        <p class="card-text">Mô tả ngắn về sản phẩm {{ $i }}</p>
                        <p class="price">500.000đ</p>
                        <a href="#" class="btn-primary">Thêm vào giỏ</a>
                    </div>
                </div>
            @endfor
        </div>

        <!-- Categories -->
        <h2 class="section-title">Danh mục sản phẩm</h2>
        <div class="categories-grid">
            @for ($i = 1; $i <= 3; $i++)
                <div class="card">
                    <img src="https://via.placeholder.com/400x200" alt="Category {{ $i }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">Danh mục {{ $i }}</h5>
                        <a href="#" class="btn-outline-primary">Xem thêm</a>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
