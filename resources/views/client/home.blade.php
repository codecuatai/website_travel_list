<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelNest - Tận hưởng các chuyến đi</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav-left">
            <a href="#" class="nav-link"><i class="fas fa-plane"></i> Tìm chuyến bay</a>
            <a href="#" class="nav-link"><i class="fas fa-umbrella-beach"></i> Tìm tour</a>
        </nav>
        <nav class="nav-right">
            <a href="{{ route('login') }}" class="nav-link">Đăng nhập</a>
            <a href="{{ route('register') }}" class="btn-register">Đăng ký</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Tận hưởng các<br>chuyến đi cùng<br>TravelNest</h1>
            <p>Đăng nhập để bắt đầu</p>
        </div>
    </section>

    <!-- Search Box -->
    <div class="search-container">
        <div class="search-box">
            <h2>Bạn muốn đi đâu ?</h2>
            <div class="search-fields">
                <div class="field">
                    <label>Địa điểm</label>
                    <div class="input-wrapper">
                        <input type="text" placeholder="Xin mời nhập...">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                <div class="field">
                    <label>Chuyến đi</label>
                    <select>
                        <option>Khứ hồi</option>
                        <option>Một chiều</option>
                    </select>
                </div>
                <div class="field">
                    <label>Ngày đi, Ngày về</label>
                    <div class="input-wrapper">
                        <input type="text" placeholder="Xin mời nhập...">
                        <i class="fas fa-calendar"></i>
                    </div>
                </div>
                <div class="field">
                    <label>Hành khách</label>
                    <select>
                        <option>1 Người/Phổ thông</option>
                        <option>2 Người/Phổ thông</option>
                        <option>3 Người/Phổ thông</option>
                    </select>
                </div>
            </div>
            <button class="btn-search"><i class="fas fa-search"></i> Tìm kiếm</button>
        </div>
    </div>

    <!-- Destinations Section -->
    <section class="section destinations">
        <div class="section-header">
            <div>
                <h2>Chìm đắm trong các chuyến đi</h2>
                <p>Bạn có đi đâu, không? Dù bạn mơ ước đi đâu đó, chúng tôi có những công cụ lịch giúp bạn tiến được điểm đến của mình.</p>
            </div>
            <a href="#" class="view-all">Xem tất cả</a>
        </div>
        <div class="destination-cards">
            <div class="destination-card">
                <img src="/placeholder.svg?height=200&width=200" alt="Sapa">
                <div class="card-overlay">
                    <h3>Sapa</h3>
                    <button class="btn-book">Đặt ngay</button>
                </div>
            </div>
            <div class="destination-card">
                <img src="/placeholder.svg?height=200&width=200" alt="Hạ Long">
                <div class="card-overlay">
                    <h3>Hạ Long</h3>
                    <button class="btn-book">Đặt ngay</button>
                </div>
            </div>
            <div class="destination-card featured">
                <img src="/placeholder.svg?height=200&width=200" alt="Đà Nẵng">
                <div class="card-overlay">
                    <h3>Đà Nẵng</h3>
                    <button class="btn-book">Đặt ngay</button>
                </div>
            </div>
            <div class="destination-card">
                <img src="/placeholder.svg?height=200&width=200" alt="Đà Lạt">
                <div class="card-overlay">
                    <h3>Đà Lạt</h3>
                    <button class="btn-book">Đặt ngay</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Đi nào Section -->
    <section class="section go-section">
        <div class="section-header">
            <div>
                <h2>Đi nào!</h2>
                <p>Bắt đầu lên kế hoạch chuyến nghỉ trong mơ của bạn với các ưu đãi chuyến bay và điểm đến du lịch của chúng tôi.</p>
            </div>
            <a href="#" class="view-all">Xem tất cả</a>
        </div>
        <div class="go-content">
            <div class="featured-destination">
                <div class="featured-card">
                    <h3>Sapa</h3>
                    <p>Du lịch là một trải nghiệm độc đáo và đầy sức sống đối với mỗi người! Khác với những sở hữu vật thể hay tự quyết tính và phong cách sống, du lịch là hành trình riêng tư và mang lại cho bạn những trải nghiệm mà không ai có thể copy được.</p>
                    <p>Chúng ta khám phá những điểm mới như trào lưu, kim tự tháp, hoặc cả cuộc sống người dân.</p>
                </div>
                <button class="btn-book-large">Đặt ngay</button>
            </div>
            <div class="destination-grid">
                <img src="/placeholder.svg?height=150&width=200" alt="Temple">
                <img src="/placeholder.svg?height=150&width=200" alt="Hoi An">
                <img src="/placeholder.svg?height=150&width=200" alt="Rice terraces">
                <img src="/placeholder.svg?height=150&width=200" alt="Beach">
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="section map-section">
        <div class="section-header">
            <div>
                <h2>Chuyến đi mới, khám phá mới!</h2>
                <p>Khám phá mọi ngọc ngách trên thế giới với TravelNest.</p>
            </div>
            <a href="#" class="view-all">Xem tất cả</a>
        </div>
        <div class="world-map">
            <img src="/placeholder.svg?height=400&width=800" alt="World Map">
            <div class="map-pins">
                <div class="pin" style="top: 60%; left: 15%;">
                    <img src="/placeholder.svg?height=50&width=50" alt="Brazil">
                </div>
                <div class="pin" style="top: 70%; left: 20%;">
                    <img src="/placeholder.svg?height=50&width=50" alt="Peru">
                </div>
                <div class="pin" style="top: 40%; left: 48%;">
                    <img src="/placeholder.svg?height=50&width=50" alt="Paris">
                </div>
                <div class="pin" style="top: 45%; left: 75%;">
                    <img src="/placeholder.svg?height=50&width=50" alt="Vietnam">
                </div>
                <div class="pin" style="top: 55%; left: 80%;">
                    <img src="/placeholder.svg?height=50&width=50" alt="Thailand">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 TravelNest. All rights reserved.</p>
    </footer>
</body>

</html>