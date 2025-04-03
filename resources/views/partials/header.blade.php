<header class="bg-white shadow-sm sticky-top py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 d-flex justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <img class="header__logo" style="height:40px;" src="{{ asset('storage/logo.svg') }}"
                        alt="logo">
                </a>
            </div>
            <div class="col-lg-5 d-flex justify-content-center">
                <form class="d-flex w-100" role="search" action="" method="GET">
                    <div class="input-group">
                        <input class="form-control border-0 shadow-sm" type="search" placeholder="Tìm kiếm sản phẩm..."
                            aria-label="Search" name="key">
                        <button class="btn btn-dark" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 d-flex justify-content-end">
                @if (Auth::check())
                <a class="btn btn-outline-dark me-2" data-bs-toggle="tooltip" data-bs-placement="bottom"
                    data-bs-custom-class="custom-tooltip" data-bs-title="Giỏ hàng">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
                    <div class="dropdown">
                        <button class="btn btn-outline-dark dropdown-toggle" type="button" id="userDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item">Đơn hàng</a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST" class="mb-0">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Đăng xuất</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a class="btn btn-outline-dark me-2" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Giỏ hàng">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                    <a href="{{ route('login') }}" class="btn btn-outline-dark" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Đăng nhập">
                        <i class="fa-solid fa-right-to-bracket"></i>
                    </a>
                @endif
            </div>
        </div>
    </div>
</header>

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let lastScrollTop = 0;
            const header = document.querySelector('header');

            window.addEventListener('scroll', function() {
                let currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;

                if (currentScrollTop > lastScrollTop) {
                    header.classList.add('hide-header');
                } else {
                    header.classList.remove('hide-header');
                }

                lastScrollTop = currentScrollTop <= 0 ? 0 : currentScrollTop;
            });
        });
    </script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
    </script>
@endsection