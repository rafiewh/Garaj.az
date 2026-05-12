<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <title>{{ $carAd->brand }} {{ $carAd->model }} - Elan</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f2f3f5;
            color: #222;
        }

        .topbar {
            background: #0b2f5b;
            color: white;
        }

        .container {
            width: 1180px;
            max-width: calc(100% - 30px);
            margin: 0 auto;
        }

        .header {
            height: 68px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            color: white;
            text-decoration: none;
            font-size: 30px;
            font-weight: 800;
        }

        .back {
            color: white;
            text-decoration: none;
            font-weight: 600;
        }

        .page {
            display: grid;
            grid-template-columns: 1fr 340px;
            gap: 24px;
            margin-top: 24px;
            margin-bottom: 40px;
        }

        .main,
        .side {
            background: white;
            border-radius: 7px;
            box-shadow: 0 1px 4px rgba(0,0,0,.08);
        }

        .main {
            overflow: hidden;
        }

        .gallery {
            background: #111;
        }

        .main-image {
            width: 100%;
            height: 520px;
            background: #111;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .main-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .thumbs {
            display: flex;
            gap: 8px;
            overflow-x: auto;
            padding: 12px;
            background: #1b1b1b;
        }

        .thumb {
            width: 96px;
            height: 70px;
            border: 2px solid transparent;
            border-radius: 5px;
            overflow: hidden;
            flex: 0 0 auto;
            cursor: pointer;
            background: #333;
        }

        .thumb.active {
            border-color: #7ed321;
        }

        .thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .info {
            padding: 22px;
        }

        .title {
            font-size: 26px;
            font-weight: 700;
            margin: 0 0 14px;
        }

        .price {
            font-size: 30px;
            font-weight: 800;
            margin-bottom: 22px;
        }

        .details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0 28px;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            gap: 14px;
            padding: 12px 0;
            border-bottom: 1px solid #eee;
            font-size: 15px;
        }

        .detail-label {
            color: #777;
        }

        .detail-value {
            color: #222;
            font-weight: 600;
            text-align: right;
        }

        .description {
            margin-top: 24px;
            line-height: 1.6;
            font-size: 15px;
            white-space: pre-line;
        }

        .side {
            padding: 22px;
            height: fit-content;
        }

        .seller-price {
            font-size: 29px;
            font-weight: 800;
            margin-bottom: 16px;
        }

        .phone {
            display: block;
            background: #7ed321;
            color: white;
            text-decoration: none;
            text-align: center;
            padding: 14px;
            border-radius: 6px;
            font-size: 18px;
            font-weight: 800;
            margin-bottom: 18px;
        }

        .side-info {
            color: #555;
            font-size: 14px;
            line-height: 1.7;
        }
        
        .delete-form {
            margin-top: 20px;
            padding-top: 18px;
            border-top: 1px solid #eeeeee;
        }

        .delete-ad-btn {
            width: 100%;
            height: 46px;
            border: 1px solid #e3b4b4;
            border-radius: 6px;
            background: #fff5f5;
            color: #b00020;
            font-size: 15px;
            font-weight: 800;
            cursor: pointer;
        }

        .delete-ad-btn:hover {
            background: #ffe8e8;
            border-color: #d68c8c;
        }

        .empty-image {
            color: white;
            font-size: 18px;
        }

        @media (max-width: 900px) {
            .page {
                grid-template-columns: 1fr;
            }

            .main-image {
                height: 380px;
            }

            .details {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 600px) {
            .header {
                height: 60px;
            }

            .logo {
                font-size: 25px;
            }

            .main-image {
                height: 300px;
            }

            .title {
                font-size: 22px;
            }

            .price {
                font-size: 25px;
            }
        }

        .main-image {
            position: relative;
            overflow: hidden;
        }

        .main-image img {
            transition: opacity .25s ease, transform .25s ease;
            cursor: zoom-in;
        }

        .main-image img.changing {
            opacity: 0;
            transform: scale(.98);
        }

        .gallery-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 46px;
            height: 46px;
            border: 0;
            border-radius: 50%;
            background: rgba(0, 0, 0, .55);
            color: white;
            font-size: 32px;
            cursor: pointer;
            z-index: 5;
        }

        .gallery-btn:hover {
            background: rgba(0, 0, 0, .75);
        }

        .gallery-btn.prev {
            left: 16px;
        }

        .gallery-btn.next {
            right: 16px;
        }

        .fullscreen-viewer {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .92);
            z-index: 9999;
            align-items: center;
            justify-content: center;
        }

        .fullscreen-viewer.active {
            display: flex;
        }

        .fullscreen-viewer img {
            max-width: 94%;
            max-height: 90%;
            object-fit: contain;
        }

        .fullscreen-close {
            position: absolute;
            top: 22px;
            right: 28px;
            background: transparent;
            border: 0;
            color: white;
            font-size: 42px;
            cursor: pointer;
        }

        .fullscreen-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 54px;
            height: 54px;
            border: 0;
            border-radius: 50%;
            background: rgba(255,255,255,.18);
            color: white;
            font-size: 36px;
            cursor: pointer;
        }

        .fullscreen-arrow.prev {
            left: 28px;
        }

        .fullscreen-arrow.next {
            right: 28px;
        }

    </style>
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">

</head>
<body>

<div class="topbar">
    <div class="container header">
        <a href="{{ route('car-ads.index') }}" class="logo">Garaj.az</a>
        <a href="{{ route('car-ads.index') }}" class="back">Elanlara qayıt</a>
    </div>
</div>

<div class="container">
    <div class="page">
        <div class="main">
            <div class="gallery">
                <div class="main-image">
                    @if(!empty($carAd->images) && count($carAd->images))
                        <button type="button" class="gallery-btn prev" onclick="prevImage(event)">‹</button>
                    
                        <img 
                            id="mainImage" 
                            src="{{ asset('storage/' . $carAd->images[0]) }}" 
                            alt="{{ $carAd->brand }} {{ $carAd->model }}"
                            onclick="openFullscreen()"
                        >

                        <button type="button" class="gallery-btn next" onclick="nextImage(event)">›</button>
                    @elseif($carAd->image)
                        <img 
                            id="mainImage" 
                            src="{{ asset('storage/' . $carAd->image) }}" 
                            alt="{{ $carAd->brand }} {{ $carAd->model }}"
                            onclick="openFullscreen()"
                        >
                    @else
                        <div class="empty-image">Şəkil yoxdur</div>
                    @endif
                </div>

                @if(!empty($carAd->images) && count($carAd->images))
                    <div class="thumbs">
                        @foreach($carAd->images as $index => $image)
                            <div class="thumb {{ $index == 0 ? 'active' : '' }}" onclick="changeImage('{{ asset('storage/' . $image) }}', this)">
                                <img src="{{ asset('storage/' . $image) }}" alt="Şəkil {{ $index + 1 }}">
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="info">
                <h1 class="title">{{ $carAd->brand }} {{ $carAd->model }}</h1>
                <div class="price">{{ number_format($carAd->price, 0, '.', ' ') }} AZN</div>

                <div class="details">
                    <div class="detail-row">
                        <span class="detail-label">Şəhər</span>
                        <span class="detail-value">{{ $carAd->city }}</span>
                    </div>

                    <div class="detail-row">
                        <span class="detail-label">Marka</span>
                        <span class="detail-value">{{ $carAd->brand }}</span>
                    </div>

                    <div class="detail-row">
                        <span class="detail-label">Model</span>
                        <span class="detail-value">{{ $carAd->model }}</span>
                    </div>

                    <div class="detail-row">
                        <span class="detail-label">Buraxılış ili</span>
                        <span class="detail-value">{{ $carAd->year }}</span>
                    </div>

                    <div class="detail-row">
                        <span class="detail-label">Matorun növü</span>
                        <span class="detail-value">{{ $carAd->engine_type ?? '-' }}</span>
                    </div>

                    <div class="detail-row">
                        <span class="detail-label">Matorun həcmi</span>
                        <span class="detail-value">{{ $carAd->engine_volume ?? '-' }}</span>
                    </div>

                    <div class="detail-row">
                        <span class="detail-label">Ban növü</span>
                        <span class="detail-value">{{ $carAd->body_type ?? '-' }}</span>
                    </div>

                    <div class="detail-row">
                        <span class="detail-label">Yürüş</span>
                        <span class="detail-value">
                            {{ $carAd->mileage ? number_format($carAd->mileage, 0, '.', ' ') . ' km' : '-' }}
                        </span>
                    </div>

                    <div class="detail-row">
                        <span class="detail-label">Rəng</span>
                        <span class="detail-value">{{ $carAd->color ?? '-' }}</span>
                    </div>

                    <div class="detail-row">
                        <span class="detail-label">Bazar</span>
                        <span class="detail-value">{{ $carAd->market ?? '-' }}</span>
                    </div>

                    <div class="detail-row">
                        <span class="detail-label">Vəziyyəti</span>
                        <span class="detail-value">{{ $carAd->condition ?? '-' }}</span>
                    </div>
                </div>

                @if($carAd->description)
                    <div class="description">
                        {{ $carAd->description }}
                    </div>
                @endif
            </div>
        </div>

        <div class="side">
            <div class="seller-price">{{ number_format($carAd->price, 0, '.', ' ') }} AZN</div>

            <a href="tel:{{ $carAd->phone }}" class="phone">
                {{ $carAd->phone }}
            </a>

            <div class="side-info">
                <div>{{ $carAd->city }}</div>
                <div>Elan tarixi: {{ $carAd->created_at->format('d.m.Y') }}</div>
                <div>Elan nömrəsi: {{ $carAd->id }}</div>
            </div>

            <form action="{{ route('car-ads.destroy', $carAd->id) }}" method="POST" class="delete-form">
                @csrf
                @method('DELETE')

                <button type="submit" class="delete-ad-btn" onclick="return confirm('Bu elanı silmək istədiyinizə əminsiniz?')">
                    Elanı sil
                </button>
            </form>
        </div>
    </div>
</div>

<div class="fullscreen-viewer" id="fullscreenViewer" onclick="closeFullscreen()">
    <button type="button" class="fullscreen-close" onclick="closeFullscreen()">×</button>

    <button type="button" class="fullscreen-arrow prev" onclick="prevImage(event)">‹</button>

    <img id="fullscreenImage" src="" alt="Tam ekran şəkil" onclick="event.stopPropagation()">

    <button type="button" class="fullscreen-arrow next" onclick="nextImage(event)">›</button>
</div>


<script>
    const images = [
        @if(!empty($carAd->images) && count($carAd->images))
            @foreach($carAd->images as $image)
                "{{ asset('storage/' . $image) }}",
            @endforeach
        @elseif($carAd->image)
            "{{ asset('storage/' . $carAd->image) }}",
        @endif
    ];

    let currentImageIndex = 0;

    function setImage(index) {
        if (!images.length) {
            return;
        }

        currentImageIndex = index;

        if (currentImageIndex < 0) {
            currentImageIndex = images.length - 1;
        }

        if (currentImageIndex >= images.length) {
            currentImageIndex = 0;
        }

        const mainImage = document.getElementById('mainImage');

        if (!mainImage) {
            return;
        }

        mainImage.classList.add('changing');

        setTimeout(function () {
            mainImage.src = images[currentImageIndex];
            mainImage.classList.remove('changing');

            document.querySelectorAll('.thumb').forEach(function (thumb, thumbIndex) {
                thumb.classList.toggle('active', thumbIndex === currentImageIndex);
            });

            const fullscreenImage = document.getElementById('fullscreenImage');

            if (fullscreenImage) {
                fullscreenImage.src = images[currentImageIndex];
            }
        }, 180);
    }

    function nextImage(event) {
        if (event) {
            event.stopPropagation();
        }

        setImage(currentImageIndex + 1);
    }

    function prevImage(event) {
        if (event) {
            event.stopPropagation();
        }

        setImage(currentImageIndex - 1);
    }

    function changeImage(src, element) {
        const index = images.indexOf(src);

        if (index !== -1) {
            setImage(index);
        }

        document.querySelectorAll('.thumb').forEach(function (thumb) {
            thumb.classList.remove('active');
        });

        element.classList.add('active');
    }

    function openFullscreen() {
        if (!images.length) {
            return;
        }

        const viewer = document.getElementById('fullscreenViewer');
        const fullscreenImage = document.getElementById('fullscreenImage');

        fullscreenImage.src = images[currentImageIndex];
        viewer.classList.add('active');
    }

    function closeFullscreen() {
        document.getElementById('fullscreenViewer').classList.remove('active');
    }

    document.addEventListener('keydown', function (event) {
        const viewer = document.getElementById('fullscreenViewer');

        if (event.key === 'ArrowRight') {
            nextImage();
        }

        if (event.key === 'ArrowLeft') {
            prevImage();
        }

        if (event.key === 'Escape' && viewer.classList.contains('active')) {
            closeFullscreen();
        }
    });
</script>


<script src="{{ asset('js/theme.js') }}"></script>

</body>
</html>
