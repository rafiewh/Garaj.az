<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <title>Garaj.az - Avtomobil elanları</title>
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
            font-size: 30px;
            font-weight: 700;
            color: white;
            text-decoration: none;
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .nav a {
            color: white;
            text-decoration: none;
            font-size: 15px;
            font-weight: 600;
        }

        .add-btn {
            background: #7ed321;
            color: white;
            padding: 12px 18px;
            border-radius: 7px;
            font-weight: 700;
            text-decoration: none;
        }

        .filter {
            background: white;
            padding: 22px;
            margin-top: 22px;
            border-radius: 6px;
            box-shadow: 0 1px 4px rgba(0,0,0,.08);
        }

        .filter-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
        }

        .filter input,
        .filter select {
            width: 100%;
            height: 44px;
            border: 1px solid #d7d7d7;
            border-radius: 5px;
            padding: 0 12px;
            font-size: 15px;
            background: white;
        }

        .section-title {
            margin: 28px 0 16px;
            font-size: 22px;
            font-weight: 700;
        }

        .success {
            background: #e9f8e9;
            color: #197a19;
            padding: 12px 15px;
            border-radius: 5px;
            margin-top: 18px;
        }

        .ads-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            padding-bottom: 40px;
        }
        

        .ad-card {
            display: block;
            background: white;
            border-radius: 7px;
            overflow: hidden;
            box-shadow: 0 1px 4px rgba(0,0,0,.10);
            transition: .2s;
            text-decoration: none;
            color: inherit;
        }

        .ad-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 14px rgba(0,0,0,.14);
        }

        .image-box {
            height: 170px;
            background: linear-gradient(135deg, #d9d9d9, #f5f5f5);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #777;
            font-size: 15px;
            font-weight: 600;
}
        .image-box img {
                width: 100%;
                height: 100%;
                object-fit: cover;
}

        }

        .ad-body {
            padding: 12px 14px 14px 30px;
        }

        .price {
            font-size: 21px;
            font-weight: 700;
            margin-bottom: 5px;
            color: #111;
        }

        .name {
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 5px;
            color: #222;
        }

        .specs {
            color: #333;
            font-size: 14px;
            line-height: 1.45;
            margin-top: 5px;
        }

        .city {
            margin-top: 7px;
            font-size: 13px;
            color: #777;
        }

        .actions {
            padding: 0 12px 12px;
        }

        .delete-btn {
            width: 100%;
            height: 36px;
            border: 0;
            border-radius: 5px;
            background: #efefef;
            color: #c40000;
            font-weight: 700;
            cursor: pointer;
        }

        .delete-btn:hover {
            background: #ffe5e5;
        }

        .empty {
            background: white;
            padding: 30px;
            border-radius: 7px;
            color: #666;
        }

        @media (max-width: 1000px) {
            .ads-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .filter-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 700px) {
            .header {
                height: auto;
                padding: 15px 0;
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }

            .nav {
                width: 100%;
                justify-content: space-between;
                gap: 10px;
            }

            .ads-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 12px;
            }

            .filter-grid {
                grid-template-columns: 1fr;
            }

            .image-box {
                height: 135px;
            }

            .logo {
                font-size: 26px;
            }
        }
        .ad-body {
            padding-left: 12px !important;
        }

        .actions {
            padding-left: 12px !important;
        }

        .turbo-filter {
            padding: 18px;
        }

        .filter-top,
        .filter-bottom {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
        }

        .filter-bottom {
            margin-top: 12px;
        }

        .range-pair {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
        }

        .turbo-filter input,
        .turbo-filter select {
            width: 100%;
            height: 46px;
            border: 1px solid #d8dce2;
            border-radius: 6px;
            padding: 0 12px;
            background: #fff;
            color: #222;
            font-size: 15px;
            outline: none;
        }

        .turbo-filter input:focus,
        .turbo-filter select:focus {
            border-color: #0b2f5b;
        }

        .filter-actions {
            display: grid;
            grid-template-columns: 92px 1fr;
            gap: 8px;
        }

        .search-btn,
        .reset-btn {
            height: 46px;
            border-radius: 6px;
            font-size: 15px;
            font-weight: 800;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }

        .search-btn {
            border: 0;
            background: #0b2f5b;
            color: white;
        }

        .reset-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #d8dce2;
            background: white;
            color: #555;
        }

        @media (max-width: 900px) {
            .filter-top,
            .filter-bottom {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .filter-top,
            .filter-bottom {
                grid-template-columns: 1fr;
            }
        }
        
        .more-filter-btn {
            width: 100%;
            height: 46px;
            border: 1px solid #d8dce2;
            border-radius: 6px;
            background: white;
            color: #0b2f5b;
            font-size: 15px;
            font-weight: 800;
            cursor: pointer;
        }

        .more-filter-btn:hover {
            background: #f3f6fb;
        }

        .more-filters {
            display: none;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
            margin-top: 12px;
            padding-top: 12px;
            border-top: 1px solid #edf0f3;
        }

        .more-filters.active {
            display: grid;
        }

        .filter-footer {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 14px;
        }

        .filter-footer .reset-btn {
            width: 100px;
        }

        .filter-footer .search-btn {
            width: 190px;
        }

        @media (max-width: 900px) {
            .more-filters {
                grid-template-columns: repeat(2, 1fr);
            }

            .filter-footer {
                display: grid;
                grid-template-columns: 1fr 1fr;
            }

            .filter-footer .reset-btn,
            .filter-footer .search-btn {
                width: 100%;
            }
        }

        @media (max-width: 600px) {
            .more-filters {
                grid-template-columns: 1fr;
            }
        }

    </style>
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">

</head>
<body>

<div class="topbar">
    <div class="container header">
        <a href="{{ route('car-ads.index') }}" class="logo">Garaj.az</a>

        <div class="nav">
            <button type="button" class="theme-toggle">Gecə rejimi</button>
            <a href="#">Bütün elanlar</a>
            <a href="#">Salonlar</a>
            <a href="#">Ehtiyat hissələri</a>
            <a href="{{ route('car-ads.create') }}" class="add-btn">+ Elan yerləşdir</a>
        </div>
    </div>
</div>

<div class="container">

    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <div class="filter">
        <form action="{{ route('car-ads.index') }}" method="GET" class="filter turbo-filter">
            <div class="filter-top">
                <select name="brand" id="brandSelect">
                    <option value="">Marka</option>
                    <option value="Abarth">Abarth</option>
                    <option value="Alfa Romeo">Alfa Romeo</option>
                    <option value="Aston Martin">Aston Martin</option>
                    <option value="Audi">Audi</option>
                    <option value="Avatr">Avatr</option>
                    <option value="BMW">BMW</option>
                    <option value="BYD">BYD</option>
                    <option value="Bentley">Bentley</option>
                    <option value="Bestune">Bestune</option>
                    <option value="Cadillac">Cadillac</option>
                    <option value="Changan">Changan</option>
                    <option value="Chery">Chery</option>
                    <option value="Chevrolet">Chevrolet</option>
                    <option value="Daewoo">Daewoo</option>
                    <option value="Dodge">Dodge</option>
                    <option value="Dong Feng">Dong Feng</option>
                    <option value="Ferrari">Ferrari</option>
                    <option value="Fiat">Fiat</option>
                    <option value="Ford">Ford</option>
                    <option value="GAZ">GAZ</option>
                    <option value="Geely">Geely</option>
                    <option value="Honda">Honda</option>
                    <option value="Hummer">Hummer</option>
                    <option value="Hyundai">Hyundai</option>
                    <option value="Infiniti">Infiniti</option>
                    <option value="Jaguar">Jaguar</option>
                    <option value="Jeep">Jeep</option>
                    <option value="Khazar">Khazar</option>
                    <option value="Kia">Kia</option>
                    <option value="Lada(Vaz)">Lada(Vaz)</option>
                    <option value="Lamborghini">Lamborghini</option>
                    <option value="Land Rover">Land Rover</option>
                    <option value="Lexus">Lexus</option>
                    <option value="Li Auto">Li Auto</option>
                    <option value="Lifan">Lifan</option>
                    <option value="Lotus">Lotus</option>
                    <option value="Maserati">Maserati</option>
                    <option value="Mazda">Mazda</option>
                    <option value="Mercedes">Mercedes</option>
                    <option value="Mercedes-Maybach">Mercedes-Maybach</option>
                    <option value="Mini">Mini</option>
                    <option value="Mitsubishi">Mitsubishi</option>
                    <option value="Moskvich">Moskvich</option>
                    <option value="Nissan">Nissan</option>
                    <option value="Opel">Opel</option>
                    <option value="Porche">Porche</option>
                    <option value="Ravon">Ravon</option>
                    <option value="Renault">Renault</option>
                    <option value="Rolls-Royce">Rolls-Royce</option>
                    <option value="Seat">Seat</option>
                    <option value="Saipa">Saipa</option>
                    <option value="Skoda">Skoda</option>
                    <option value="Tesla">Tesla</option>
                    <option value="Tofas">Tofas</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Volkswagen">Volkswagen</option>
                </select>

                <select name="model" id="modelSelect" data-selected-model="{{ request('model') }}">
                    <option value="">Model</option>
                </select>
                
                <div class="range-pair">
                    <input type="number" name="price_min" value="{{ request('price_min') }}" placeholder="Qiymət, min.">
                    <input type="number" name="price_max" value="{{ request('price_max') }}" placeholder="maks.">
                </div>

                <select name="city">
                    <option value="">Şəhər</option>
                    <option value="Abşeron" {{ request('city') == 'Abşeron' ? 'selected' : '' }}>Abşeron</option>
                    <option value="Ağcabədi" {{ request('city') == 'Ağcabədi' ? 'selected' : '' }}>Ağcabədi</option>
                    <option value="Ağdam" {{ request('city') == 'Ağdam' ? 'selected' : '' }}>Ağdam</option>
                    <option value="Ağdaş" {{ request('city') == 'Ağdaş' ? 'selected' : '' }}>Ağdaş</option>
                    <option value="Ağstafa" {{ request('city') == 'Ağstafa' ? 'selected' : '' }}>Ağstafa</option>
                    <option value="Ağsu" {{ request('city') == 'Ağsu' ? 'selected' : '' }}>Ağsu</option>
                    <option value="Astara" {{ request('city') == 'Astara' ? 'selected' : '' }}>Astara</option>
                    <option value="Bakı" {{ request('city') == 'Bakı' ? 'selected' : '' }}>Bakı</option>
                    <option value="Balakən" {{ request('city') == 'Balakən' ? 'selected' : '' }}>Balakən</option>
                    <option value="Bərdə" {{ request('city') == 'Bərdə' ? 'selected' : '' }}>Bərdə</option>
                    <option value="Beyləqan" {{ request('city') == 'Beyləqan' ? 'selected' : '' }}>Beyləqan</option>
                    <option value="Biləsuvar" {{ request('city') == 'Biləsuvar' ? 'selected' : '' }}>Biləsuvar</option>
                    <option value="Cəbrayıl" {{ request('city') == 'Cəbrayıl' ? 'selected' : '' }}>Cəbrayıl</option>
                    <option value="Cəlilabad" {{ request('city') == 'Cəlilabad' ? 'selected' : '' }}>Cəlilabad</option>
                    <option value="Daşkəsən" {{ request('city') == 'Daşkəsən' ? 'selected' : '' }}>Daşkəsən</option>
                    <option value="Füzuli" {{ request('city') == 'Füzuli' ? 'selected' : '' }}>Füzuli</option>
                    <option value="Gədəbəy" {{ request('city') == 'Gədəbəy' ? 'selected' : '' }}>Gədəbəy</option>
                    <option value="Gəncə" {{ request('city') == 'Gəncə' ? 'selected' : '' }}>Gəncə</option>
                    <option value="Goranboy" {{ request('city') == 'Goranboy' ? 'selected' : '' }}>Goranboy</option>
                    <option value="Göyçay" {{ request('city') == 'Göyçay' ? 'selected' : '' }}>Göyçay</option>
                    <option value="Göygöl" {{ request('city') == 'Göygöl' ? 'selected' : '' }}>Göygöl</option>
                    <option value="Hacıqabul" {{ request('city') == 'Hacıqabul' ? 'selected' : '' }}>Hacıqabul</option>
                    <option value="İmişli" {{ request('city') == 'İmişli' ? 'selected' : '' }}>İmişli</option>
                    <option value="İsmayıllı" {{ request('city') == 'İsmayıllı' ? 'selected' : '' }}>İsmayıllı</option>
                    <option value="Kəlbəcər" {{ request('city') == 'Kəlbəcər' ? 'selected' : '' }}>Kəlbəcər</option>
                    <option value="Kürdəmir" {{ request('city') == 'Kürdəmir' ? 'selected' : '' }}>Kürdəmir</option>
                    <option value="Laçın" {{ request('city') == 'Laçın' ? 'selected' : '' }}>Laçın</option>
                    <option value="Lənkəran" {{ request('city') == 'Lənkəran' ? 'selected' : '' }}>Lənkəran</option>
                    <option value="Lerik" {{ request('city') == 'Lerik' ? 'selected' : '' }}>Lerik</option>
                    <option value="Masallı" {{ request('city') == 'Masallı' ? 'selected' : '' }}>Masallı</option>
                    <option value="Mingəçevir" {{ request('city') == 'Mingəçevir' ? 'selected' : '' }}>Mingəçevir</option>
                    <option value="Naftalan" {{ request('city') == 'Naftalan' ? 'selected' : '' }}>Naftalan</option>
                    <option value="Naxçıvan" {{ request('city') == 'Naxçıvan' ? 'selected' : '' }}>Naxçıvan</option>
                    <option value="Neftçala" {{ request('city') == 'Neftçala' ? 'selected' : '' }}>Neftçala</option>
                    <option value="Oğuz" {{ request('city') == 'Oğuz' ? 'selected' : '' }}>Oğuz</option>
                    <option value="Qax" {{ request('city') == 'Qax' ? 'selected' : '' }}>Qax</option>
                    <option value="Qazax" {{ request('city') == 'Qazax' ? 'selected' : '' }}>Qazax</option>
                    <option value="Qəbələ" {{ request('city') == 'Qəbələ' ? 'selected' : '' }}>Qəbələ</option>
                    <option value="Qobustan" {{ request('city') == 'Qobustan' ? 'selected' : '' }}>Qobustan</option>
                    <option value="Quba" {{ request('city') == 'Quba' ? 'selected' : '' }}>Quba</option>
                    <option value="Qubadlı" {{ request('city') == 'Qubadlı' ? 'selected' : '' }}>Qubadlı</option>
                    <option value="Qusar" {{ request('city') == 'Qusar' ? 'selected' : '' }}>Qusar</option>
                    <option value="Saatlı" {{ request('city') == 'Saatlı' ? 'selected' : '' }}>Saatlı</option>
                    <option value="Sabirabad" {{ request('city') == 'Sabirabad' ? 'selected' : '' }}>Sabirabad</option>
                    <option value="Salyan" {{ request('city') == 'Salyan' ? 'selected' : '' }}>Salyan</option>
                    <option value="Samux" {{ request('city') == 'Samux' ? 'selected' : '' }}>Samux</option>
                    <option value="Siyəzən" {{ request('city') == 'Siyəzən' ? 'selected' : '' }}>Siyəzən</option>
                    <option value="Sumqayıt" {{ request('city') == 'Sumqayıt' ? 'selected' : '' }}>Sumqayıt</option>
                    <option value="Şabran" {{ request('city') == 'Şabran' ? 'selected' : '' }}>Şabran</option>
                    <option value="Şahbuz" {{ request('city') == 'Şahbuz' ? 'selected' : '' }}>Şahbuz</option>
                    <option value="Şamaxı" {{ request('city') == 'Şamaxı' ? 'selected' : '' }}>Şamaxı</option>
                    <option value="Şəki" {{ request('city') == 'Şəki' ? 'selected' : '' }}>Şəki</option>
                    <option value="Şəmkir" {{ request('city') == 'Şəmkir' ? 'selected' : '' }}>Şəmkir</option>
                    <option value="Şərur" {{ request('city') == 'Şərur' ? 'selected' : '' }}>Şərur</option>
                    <option value="Şirvan" {{ request('city') == 'Şirvan' ? 'selected' : '' }}>Şirvan</option>
                    <option value="Şuşa" {{ request('city') == 'Şuşa' ? 'selected' : '' }}>Şuşa</option>
                    <option value="Tərtər" {{ request('city') == 'Tərtər' ? 'selected' : '' }}>Tərtər</option>
                    <option value="Tovuz" {{ request('city') == 'Tovuz' ? 'selected' : '' }}>Tovuz</option>
                    <option value="Ucar" {{ request('city') == 'Ucar' ? 'selected' : '' }}>Ucar</option>
                    <option value="Xaçmaz" {{ request('city') == 'Xaçmaz' ? 'selected' : '' }}>Xaçmaz</option>
                    <option value="Xankəndi" {{ request('city') == 'Xankəndi' ? 'selected' : '' }}>Xankəndi</option>
                    <option value="Xırdalan" {{ request('city') == 'Xırdalan' ? 'selected' : '' }}>Xırdalan</option>
                    <option value="Xızı" {{ request('city') == 'Xızı' ? 'selected' : '' }}>Xızı</option>
                    <option value="Xocalı" {{ request('city') == 'Xocalı' ? 'selected' : '' }}>Xocalı</option>
                    <option value="Xocavənd" {{ request('city') == 'Xocavənd' ? 'selected' : '' }}>Xocavənd</option>
                    <option value="Yardımlı" {{ request('city') == 'Yardımlı' ? 'selected' : '' }}>Yardımlı</option>
                    <option value="Yevlax" {{ request('city') == 'Yevlax' ? 'selected' : '' }}>Yevlax</option>
                    <option value="Zaqatala" {{ request('city') == 'Zaqatala' ? 'selected' : '' }}>Zaqatala</option>
                    <option value="Zəngilan" {{ request('city') == 'Zəngilan' ? 'selected' : '' }}>Zəngilan</option>
                    <option value="Zərdab" {{ request('city') == 'Zərdab' ? 'selected' : '' }}>Zərdab</option>
                </select>
            </div>

            <div class="filter-bottom">
                <select name="body_type">
                        <option value="">Ban növü</option>
                        <option value="Sedan" {{request('body_type') == 'Sedan' ? 'selected' : '' }}>Sedan</option>
                        <option value="Hetçbek" {{ request('body_type') == 'Hetçbek' ? 'selected' : '' }}>Hetçbek</option>
                        <option value="Universal" {{ request('body_type') == 'Universal' ? 'selected' : '' }}>Universal</option>
                        <option value="Kupe" {{ request('body_type') == 'Kupe' ? 'selected' : '' }}>Kupe</option>
                        <option value="Kabriolet" {{ request('body_type') == 'Kabriolet' ? 'selected' : '' }}>Kabriolet</option>
                        <option value="SUV" {{ request('body_type') == 'SUV' ? 'selected' : '' }}>SUV</option>
                        <option value="Pikap" {{ request('body_type') == 'Pikap' ? 'selected' : '' }}>Pikap</option>
                        <option value="Minivan" {{ request('body_type') == 'Minivan' ? 'selected' : '' }}>Minivan</option>
                        <option value="Furqon" {{ request('body_type') == 'Furqon' ? 'selected' : '' }}>Furqon</option>
                </select>

                <div class="range-pair">
                    <input type="number" name="year_min" value="{{ request('year_min') }}" placeholder="İl, min.">
                    <input type="number" name="year_max" value="{{ request('year_max') }}" placeholder="maks.">
                </div>

                <input type="number" name="mileage_max" value="{{ request('mileage_max') }}" placeholder="Yürüş, maks.">

                <button type="button" class="more-filter-btn" id="moreFilterButton">
                    Daha çox filtr
                </button>
            </div>
                
            <div class="more-filters" id="moreFilters">
                <select name="engine_type">
                    <option value="">Yanacaq növü</option>
                    <option value="Benzin" {{ request('engine_type') == 'Benzin' ? 'selected' : '' }}>Benzin</option>
                    <option value="Dizel" {{ request('engine_type') == 'Dizel' ? 'selected' : '' }}>Dizel</option>
                    <option value="Qaz" {{ request('engine_type') == 'Qaz' ? 'selected' : '' }}>Qaz</option>
                    <option value="Hibrid" {{ request('engine_type') == 'Hibrid' ? 'selected' : '' }}>Hibrid</option>
                    <option value="Plug-in Hibrid" {{ request('engine_type') == 'Plug-in Hibrid' ? 'selected' : '' }}>Plug-in Hibrid</option>
                    <option value="Elektro" {{ request('engine_type') == 'Elektro' ? 'selected' : '' }}>Elektro</option>
                </select>

                <select name="condition">
                    <option value="">Avtomobilin vəziyyəti</option>
                    <option value="Vuruğu yoxdur" {{ request('condition') == 'Vuruğu yoxdur' ? 'selected' : '' }}>Vuruğu yoxdur</option>
                    <option value="Rənglənməyib" {{ request('condition') == 'Rənglənməyib' ? 'selected' : '' }}>Rənglənməyib</option>
                    <option value="Vuruğu var" {{ request('condition') == 'Vuruğu var' ? 'selected' : '' }}>Vuruğu var</option>
                    <option value="Rənglənib" {{ request('condition') == 'Rənglənib' ? 'selected' : '' }}>Rənglənib</option>
                    <option value="Kreditdədir" {{ request('condition') == 'Kreditdədir' ? 'selected' : '' }}>Kreditdədir</option>
                    <option value="Barter mümkündür" {{ request('condition') == 'Barter mümkündür' ? 'selected' : '' }}>Barter mümkündür</option>
                </select>

                <select name="market">
                    <option value="">Hansı bazar üçün yığılıb</option>
                    <option value="Amerika" {{ request('market') == 'Amerika' ? 'selected' : '' }}>Amerika</option>
                    <option value="Avropa" {{ request('market') == 'Avropa' ? 'selected' : '' }}>Avropa</option>
                    <option value="Rusiya" {{ request('market') == 'Rusiya' ? 'selected' : '' }}>Rusiya</option>
                    <option value="Koreya" {{ request('market') == 'Koreya' ? 'selected' : '' }}>Koreya</option>
                    <option value="Yaponiya" {{ request('market') == 'Yaponiya' ? 'selected' : '' }}>Yaponiya</option>
                    <option value="Çin" {{ request('market') == 'Çin' ? 'selected' : '' }}>Çin</option>
                    <option value="Dubay" {{ request('market') == 'Dubay' ? 'selected' : '' }}>Dubay</option>
                    <option value="Rəsmi diler" {{ request('market') == 'Rəsmi diler' ? 'selected' : '' }}>Rəsmi diler</option>
                </select>

                <select name="color">
                    <option value="">Rəng</option>
                    <option value="Ağ" {{ request('color') == 'Ağ' ? 'selected' : '' }}>Ağ</option>
                    <option value="Qara" {{ request('color') == 'Qara' ? 'selected' : '' }}>Qara</option>
                    <option value="Boz" {{ request('color') == 'Boz' ? 'selected' : '' }}>Boz</option>
                    <option value="Gümüşü" {{ request('color') == 'Gümüşü' ? 'selected' : '' }}>Gümüşü</option>
                    <option value="Göy" {{ request('color') == 'Göy' ? 'selected' : '' }}>Göy</option>
                    <option value="Qırmızı" {{ request('color') == 'Qırmızı' ? 'selected' : '' }}>Qırmızı</option>
                    <option value="Yaşıl" {{ request('color') == 'Yaşıl' ? 'selected' : '' }}>Yaşıl</option>
                    <option value="Qəhvəyi" {{ request('color') == 'Qəhvəyi' ? 'selected' : '' }}>Qəhvəyi</option>
                    <option value="Bej" {{ request('color') == 'Bej' ? 'selected' : '' }}>Bej</option>
                </select>
            </div>

            <div class="filter-footer">
                <a href="{{ route('car-ads.index') }}" class="reset-btn">Sıfırla</a>
                <button type="submit" class="search-btn">Elanları göstər</button>
            </div>
        </form>
    </div>

    <h2 class="section-title">Son elanlar</h2>

    @if($ads->count())
        <div class="ads-grid">
            @foreach($ads as $ad)
                <a href="{{ route('car-ads.show', $ad->id) }}" class="ad-card">
                    <div class="image-box">
                        @if(!empty($ad->images) && count($ad->images))
                        <img src="{{ asset('storage/' . $ad->images[0]) }}" alt="{{ $ad->brand }} {{ $ad->model }}">
                        @elseif($ad->image)
                        <img src="{{ asset('storage/' . $ad->image) }}" alt="{{ $ad->brand }} {{ $ad->model }}">
                        @else
                        Şəkil yoxdur
                        @endif
                    </div>
                    
                    <div class="ad-body">
                        <div class="price">{{ number_format($ad->price, 0, '.', ' ') }} AZN</div>
                        
                        <div class="name">
                            {{ $ad->brand }} {{ $ad->model }}
                        </div>

                        <div class="specs">
                            {{ $ad->year }},
                            {{ $ad->engine_volume ?? 'Mator qeyd olunmayıb' }},
                            {{ $ad->mileage ? number_format($ad->mileage, 0, '.', ' ') . ' km' : 'Yürüş qeyd olunmayıb' }}
                        </div>

                        <div class="city">
                            {{ $ad->city }}, {{ $ad->created_at->format('d.m.Y') }}
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    @else
        <div class="empty">
            Hələ elan yoxdur. İlk elanı yerləşdir.
        </div>
    @endif

</div>
<script>
    const modelsByBrand = {
       "Abarth": ["124 Spider", "500", "595", "695"],
        "Alfa Romeo": ["145", "146", "147", "156", "159", "166", "Giulia", "Giulietta", "Stelvio"],
        "Aston Martin": ["DB9", "DB11", "DBS", "Rapide", "Vantage", "Vanquish"],
        "Audi": ["A3", "A4", "A5", "A6", "A7", "A8", "Q3", "Q5", "Q7", "Q8", "R8", "TT"],
        "Avatr": ["07", "11", "12"],
        "BMW": ["116", "118", "120", "320", "328", "330", "520", "523", "525", "528", "530", "535", "540", "730", "740", "750", "X1", "X3", "X5", "X6", "X7", "i3", "i4", "i8"],
        "BYD": ["Atto 3", "Destroyer 05", "Dolphin", "Han", "Qin", "Seal", "Song Plus", "Tang", "Yuan Plus"],
        "Bentley": ["Bentayga", "Continental", "Flying Spur", "Mulsanne"],
        "Bestune": ["B70", "T33", "T55", "T77", "T99"],
        "Cadillac": ["ATS", "CT5", "CTS", "Escalade", "SRX", "XT4", "XT5", "XT6"],
        "Changan": ["Alsvin", "CS35", "CS55", "CS75", "Eado", "UNI-K", "UNI-T", "UNI-V"],
        "Chery": ["Arrizo 5", "Arrizo 8", "Tiggo 2", "Tiggo 4", "Tiggo 7", "Tiggo 8"],
        "Chevrolet": ["Aveo", "Camaro", "Captiva", "Cruze", "Epica", "Lacetti", "Malibu", "Niva", "Orlando", "Spark", "Tahoe", "Tracker"],
        "Daewoo": ["Espero", "Gentra", "Lanos", "Leganza", "Matiz", "Nexia", "Nubira"],
        "Dodge": ["Caliber", "Challenger", "Charger", "Durango", "Journey", "Ram"],
        "Dong Feng": ["A30", "AX7", "E70", "Fengon 500", "Fengon 580", "Rich"],
        "Ferrari": ["458", "488", "California", "F8", "Portofino", "Roma"],
        "Fiat": ["500", "Albea", "Bravo", "Doblo", "Linea", "Panda", "Punto", "Tipo"],
        "Ford": ["C-Max", "Edge", "Escape", "Explorer", "F-150", "Fiesta", "Focus", "Fusion", "Kuga", "Mondeo", "Mustang", "Transit"],
        "GAZ": ["21", "24", "2705", "3110", "3302", "Sobol"],
        "Geely": ["Atlas", "Coolray", "Emgrand", "Monjaro", "Tugella"],
        "Honda": ["Accord", "Civic", "CR-V", "Fit", "HR-V", "Insight", "Pilot"],
        "Hummer": ["H1", "H2", "H3"],
        "Hyundai": ["Accent", "Azera", "Creta", "Elantra", "Genesis", "Getz", "i10", "i20", "i30", "Santa Fe", "Sonata", "Tucson", "Venue"],
        "Infiniti": ["EX35", "FX35", "FX37", "FX50", "G35", "G37", "Q50", "Q70", "QX50", "QX56", "QX60", "QX70", "QX80"],
        "Jaguar": ["E-Pace", "F-Pace", "F-Type", "S-Type", "XE", "XF", "XJ"],
        "Jeep": ["Cherokee", "Compass", "Grand Cherokee", "Renegade", "Wrangler"],
        "Khazar": ["LX", "SD"],
        "Kia": ["Carnival", "Ceed", "Cerato", "K5", "K7", "Magentis", "Optima", "Picanto", "Rio", "Sorento", "Soul", "Sportage", "Stinger"],
        "Lada(Vaz)": ["2101", "2106", "2107", "2109", "2110", "2114", "Granta", "Kalina", "Largus", "Niva", "Priora", "Vesta", "XRAY"],
        "Lamborghini": ["Aventador", "Gallardo", "Huracan", "Urus"],
        "Land Rover": ["Defender", "Discovery", "Discovery Sport", "Range Rover", "Range Rover Evoque", "Range Rover Sport", "Range Rover Velar"],
        "Lexus": ["ES 250", "ES 300", "ES 350", "GS 300", "GX 460", "IS 250", "LX 470", "LX 570", "LX 600", "NX 200", "NX 300", "RX 300", "RX 330", "RX 350", "RX 450h"],
        "Li Auto": ["L6", "L7", "L8", "L9", "Mega"],
        "Lifan": ["320", "520", "620", "X50", "X60", "X70"],
        "Lotus": ["Elise", "Emira", "Evora", "Exige"],
        "Maserati": ["Ghibli", "GranTurismo", "Levante", "Quattroporte"],
        "Mazda": ["2", "3", "5", "6", "CX-3", "CX-5", "CX-7", "CX-9", "MX-5"],
        "Mercedes": ["A 180", "A 200", "B 180", "C 180", "C 200", "C 220", "C 250", "C 300", "E 200", "E 220", "E 250", "E 300", "E 350", "S 350", "S 400", "S 500", "S 560", "S 600", "CLA 200", "CLS 350", "GLA 200", "GLC 300", "GLE 350", "GLS 450", "G 350", "G 500", "G 63", "Vito", "Sprinter"],
        "Mercedes-Maybach": ["S 500", "S 560", "S 580", "S 600", "S 650", "GLS 600"],
        "Mini": ["Clubman", "Cooper", "Countryman", "Paceman"],
        "Mitsubishi": ["ASX", "Attrage", "Eclipse Cross", "Galant", "L200", "Lancer", "Montero", "Outlander", "Pajero", "Pajero Sport"],
        "Moskvich": ["2140", "2141", "3", "6"],
        "Nissan": ["Altima", "Juke", "Leaf", "Maxima", "Murano", "Navara", "Note", "Patrol", "Qashqai", "Rogue", "Sentra", "Sunny", "Teana", "Tiida", "X-Trail"],
        "Opel": ["Antara", "Astra", "Combo", "Corsa", "Frontera", "Insignia", "Meriva", "Mokka", "Omega", "Signum", "Vectra", "Vivaro", "Zafira"],
        "Porche": ["911", "Boxster", "Cayenne", "Cayman", "Macan", "Panamera", "Taycan"],
        "Ravon": ["Gentra", "Nexia R3", "R2", "R4"],
        "Renault": ["Arkana", "Clio", "Duster", "Fluence", "Kangoo", "Kaptur", "Laguna", "Logan", "Megane", "Sandero", "Scenic", "Symbol"],
        "Rolls-Royce": ["Cullinan", "Ghost", "Phantom", "Wraith"],
        "Seat": ["Alhambra", "Altea", "Ibiza", "Leon", "Toledo"],
        "Saipa": ["Saina", "Tiba"],
        "Skoda": ["Fabia", "Karoq", "Kodiaq", "Octavia", "Rapid", "Superb", "Yeti"],
        "Tesla": ["Cybertruck", "Model 3", "Model S", "Model X", "Model Y"],
        "Tofas": ["Dogan", "Kartal", "Sahin"],
        "Toyota": ["Auris", "Avalon", "Avensis", "C-HR", "Camry", "Corolla", "FJ Cruiser", "Fortuner", "Harrier" , "Highlander", "Hilux", "Land Cruiser", "Prado", "Prius", "RAV4", "Sequoia", "Sienna", "Vitz", "Yaris"],
        "Volkswagen": ["Amarok", "Arteon", "Beetle", "Caddy", "Golf", "Jetta", "Passat", "Polo", "Scirocco", "Sharan", "Taos", "Teramont", "Tiguan", "Touareg", "Touran", "Transporter"]
    };

    const brandSelect = document.getElementById('brandSelect');
    const modelSelect = document.getElementById('modelSelect');

    brandSelect.addEventListener('change', function () {
        const selectedBrand = this.value;
        const models = modelsByBrand[selectedBrand] || [];

        modelSelect.innerHTML = '<option value="">Model</option>';

        models.forEach(function (model) {
            const option = document.createElement('option');
            option.value = model;
            option.textContent = model;
            modelSelect.appendChild(option);
        });
    });
</script>

<script>
    const modelsByBrand = {
        "Abarth": ["124 Spider", "500", "595", "695"],
        "Alfa Romeo": ["145", "146", "147", "156", "159", "166", "Giulia", "Giulietta", "Stelvio"],
        "Aston Martin": ["DB9", "DB11", "DBS", "Rapide", "Vantage", "Vanquish"],
        "Audi": ["A3", "A4", "A5", "A6", "A7", "A8", "Q3", "Q5", "Q7", "Q8", "R8", "TT"],
        "Avatr": ["07", "11", "12"],
        "BMW": ["116", "118", "120", "320", "328", "330", "520", "523", "525", "528", "530", "535", "540", "730", "740", "750", "X1", "X3", "X5", "X6", "X7", "i3", "i4", "i8"],
        "BYD": ["Atto 3", "Dolphin", "Han", "Qin", "Seal", "Song Plus", "Tang", "Yuan Plus"],
        "Bentley": ["Bentayga", "Continental", "Flying Spur", "Mulsanne"],
        "Bestune": ["B70", "T33", "T55", "T77", "T99"],
        "Cadillac": ["ATS", "CT5", "CTS", "Escalade", "SRX", "XT4", "XT5", "XT6"],
        "Changan": ["Alsvin", "CS35", "CS55", "CS75", "Eado", "UNI-K", "UNI-T", "UNI-V"],
        "Chery": ["Arrizo 5", "Arrizo 8", "Tiggo 2", "Tiggo 4", "Tiggo 7", "Tiggo 8"],
        "Chevrolet": ["Aveo", "Camaro", "Captiva", "Cruze", "Epica", "Lacetti", "Malibu", "Niva", "Orlando", "Spark", "Tahoe", "Tracker"],
        "Daewoo": ["Espero", "Gentra", "Lanos", "Leganza", "Matiz", "Nexia", "Nubira"],
        "Dodge": ["Caliber", "Challenger", "Charger", "Durango", "Journey", "Ram"],
        "Dong Feng": ["A30", "AX7", "E70", "Fengon 500", "Fengon 580", "Rich"],
        "Ferrari": ["458", "488", "California", "F8", "Portofino", "Roma"],
        "Fiat": ["500", "Albea", "Bravo", "Doblo", "Linea", "Panda", "Punto", "Tipo"],
        "Ford": ["C-Max", "Edge", "Escape", "Explorer", "F-150", "Fiesta", "Focus", "Fusion", "Kuga", "Mondeo", "Mustang", "Transit"],
        "GAZ": ["21", "24", "2705", "3110", "3302", "Sobol"],
        "Geely": ["Atlas", "Coolray", "Emgrand", "Monjaro", "Tugella"],
        "Honda": ["Accord", "Civic", "CR-V", "Fit", "HR-V", "Insight", "Pilot"],
        "Hummer": ["H1", "H2", "H3"],
        "Hyundai": ["Accent", "Azera", "Creta", "Elantra", "Genesis", "Getz", "i10", "i20", "i30", "Santa Fe", "Sonata", "Tucson", "Venue"],
        "Infiniti": ["EX35", "FX35", "FX37", "FX50", "G35", "G37", "Q50", "Q70", "QX50", "QX56", "QX60", "QX70", "QX80"],
        "Jaguar": ["E-Pace", "F-Pace", "F-Type", "S-Type", "XE", "XF", "XJ"],
        "Jeep": ["Cherokee", "Compass", "Grand Cherokee", "Renegade", "Wrangler"],
        "Khazar": ["LX", "SD"],
        "Kia": ["Carnival", "Ceed", "Cerato", "K5", "K7", "Magentis", "Optima", "Picanto", "Rio", "Sorento", "Soul", "Sportage", "Stinger"],
        "Lada(Vaz)": ["2101", "2106", "2107", "2109", "2110", "2114", "Granta", "Kalina", "Largus", "Niva", "Priora", "Vesta", "XRAY"],
        "Lamborghini": ["Aventador", "Gallardo", "Huracan", "Urus"],
        "Land Rover": ["Defender", "Discovery", "Discovery Sport", "Range Rover", "Range Rover Evoque", "Range Rover Sport", "Range Rover Velar"],
        "Lexus": ["ES 250", "ES 300", "ES 350", "GS 300", "GX 460", "IS 250", "LX 470", "LX 570", "LX 600", "NX 200", "NX 300", "RX 300", "RX 330", "RX 350", "RX 450h"],
        "Li Auto": ["L6", "L7", "L8", "L9", "Mega"],
        "Lifan": ["320", "520", "620", "X50", "X60", "X70"],
        "Lotus": ["Elise", "Emira", "Evora", "Exige"],
        "Maserati": ["Ghibli", "GranTurismo", "Levante", "Quattroporte"],
        "Mazda": ["2", "3", "5", "6", "CX-3", "CX-5", "CX-7", "CX-9", "MX-5"],
        "Mercedes": ["A 180", "A 200", "B 180", "C 180", "C 200", "C 220", "C 250", "C 300", "E 200", "E 220", "E 250", "E 300", "E 350", "S 350", "S 400", "S 500", "S 560", "S 600", "CLA 200", "CLS 350", "GLA 200", "GLC 300", "GLE 350", "GLS 450", "G 350", "G 500", "G 63", "Vito", "Sprinter"],
        "Mercedes-Maybach": ["S 500", "S 560", "S 580", "S 600", "S 650", "GLS 600"],
        "Mini": ["Clubman", "Cooper", "Countryman", "Paceman"],
        "Mitsubishi": ["ASX", "Attrage", "Eclipse Cross", "Galant", "L200", "Lancer", "Montero", "Outlander", "Pajero", "Pajero Sport"],
        "Moskvich": ["2140", "2141", "3", "6"],
        "Nissan": ["Altima", "Juke", "Leaf", "Maxima", "Murano", "Navara", "Note", "Patrol", "Qashqai", "Rogue", "Sentra", "Sunny", "Teana", "Tiida", "X-Trail"],
        "Opel": ["Antara", "Astra", "Combo", "Corsa", "Frontera", "Insignia", "Meriva", "Mokka", "Omega", "Signum", "Vectra", "Vivaro", "Zafira"],
        "Porche": ["911", "Boxster", "Cayenne", "Cayman", "Macan", "Panamera", "Taycan"],
        "Ravon": ["Gentra", "Nexia R3", "R2", "R4"],
        "Renault": ["Arkana", "Clio", "Duster", "Fluence", "Kangoo", "Kaptur", "Laguna", "Logan", "Megane", "Sandero", "Scenic", "Symbol"],
        "Rolls-Royce": ["Cullinan", "Ghost", "Phantom", "Wraith"],
        "Seat": ["Alhambra", "Altea", "Ibiza", "Leon", "Toledo"],
        "Saipa": ["Saina", "Tiba"],
        "Skoda": ["Fabia", "Karoq", "Kodiaq", "Octavia", "Rapid", "Superb", "Yeti"],
        "Tesla": ["Cybertruck", "Model 3", "Model S", "Model X", "Model Y"],
        "Tofas": ["Dogan", "Kartal", "Sahin"],
        "Toyota": ["Auris", "Avalon", "Avensis", "C-HR", "Camry", "Corolla", "FJ Cruiser", "Fortuner", "Harrier" , "Highlander", "Hilux", "Land Cruiser", "Prado", "Prius", "RAV4", "Sequoia", "Sienna", "Vitz", "Yaris"],
        "Volkswagen": ["Amarok", "Arteon", "Beetle", "Caddy", "Golf", "Jetta", "Passat", "Polo", "Scirocco", "Sharan", "Taos", "Teramont", "Tiguan", "Touareg", "Touran", "Transporter"]
    };

    const brandSelect = document.getElementById('brandSelect');
    const modelSelect = document.getElementById('modelSelect');
    const selectedModel = modelSelect.dataset.selectedModel;

    function fillModels() {
        const models = modelsByBrand[brandSelect.value] || [];

        modelSelect.innerHTML = '<option value="">Model</option>';

        models.forEach(function (model) {
            const option = document.createElement('option');
            option.value = model;
            option.textContent = model;

            if (selectedModel === model) {
                option.selected = true;
            }

            modelSelect.appendChild(option);
        });
    }

    brandSelect.addEventListener('change', fillModels);
    fillModels();

<script>
    function toggleMoreFilters() {
        document.getElementById('moreFilters').classList.toggle('active');
    }

    @if(request('engine_type') || request('condition') || request('market') || request('color'))
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('moreFilters').classList.add('active');
        });
    @endif
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const moreFilterButton = document.getElementById('moreFilterButton');
        const moreFilters = document.getElementById('moreFilters');

        if (!moreFilterButton || !moreFilters) {
            return;
        }

        moreFilterButton.addEventListener('click', function () {
            moreFilters.classList.toggle('active');
        });
    });
</script>



</script>

<script src="{{ asset('js/theme.js') }}"></script>


</body>
</html>
