<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <title>Yeni elan yerləşdir</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f2f3f5;
            color: #222;
        }

        * {
            box-sizing: border-box;
        }

        .topbar {
            background: #0b2f5b;
            color: white;
        }

        .container {
            width: 760px;
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

        .form-card {
            background: white;
            margin-top: 28px;
            padding: 26px;
            border-radius: 7px;
            box-shadow: 0 1px 4px rgba(0,0,0,.10);
        }

        h1 {
            margin-top: 0;
            font-size: 25px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: 700;
            font-size: 14px;
        }

        input,
        select,
        textarea {
            width: 100%;
            height: 46px;
            border: 1px solid #d7d7d7;
            border-radius: 5px;
            padding: 0 12px;
            font-size: 15px;
            margin-bottom: 16px;
            background: white;
            color: #222;
            outline: none;
        }

        textarea {
            height: 120px;
            padding-top: 12px;
            resize: vertical;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
        }

        .submit {
            width: 100%;
            height: 48px;
            border: 0;
            border-radius: 6px;
            background: #7ed321;
            color: white;
            font-size: 17px;
            font-weight: 800;
            cursor: pointer;
        }

        .submit:hover {
            background: #6fbd1d;
        }

        .errors {
            background: #ffecec;
            color: #b00000;
            padding: 14px;
            border-radius: 5px;
            margin-bottom: 18px;
        }

        @media (max-width: 650px) {
            .grid {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .header {
                height: 60px;
            }

            .logo {
                font-size: 25px;
            }
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
    <div class="form-card">
        <h1>Yeni elan yerləşdir</h1>

        @if($errors->any())
            <div class="errors">
                @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form action="{{ route('car-ads.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid">
                <div>
                    <label>Marka</label>
                    <select name="brand" id="brandSelect">
                        <option value="">Marka seç</option>
                        <option value="Abarth" {{ old('brand') == 'Abarth' ? 'selected' : '' }}>Abarth</option>
                        <option value="Alfa Romeo" {{ old('brand') == 'Alfa Romeo' ? 'selected' : '' }}>Alfa Romeo</option>
                        <option value="Aston Martin" {{ old('brand') == 'Aston Martin' ? 'selected' : '' }}>Aston Martin</option>
                        <option value="Audi" {{ old('brand') == 'Audi' ? 'selected' : '' }}>Audi</option>
                        <option value="Avatr" {{ old('brand') == 'Avatr' ? 'selected' : '' }}>Avatr</option>
                        <option value="BMW" {{ old('brand') == 'BMW' ? 'selected' : '' }}>BMW</option>
                        <option value="BYD" {{ old('brand') == 'BYD' ? 'selected' : '' }}>BYD</option>
                        <option value="Bentley" {{ old('brand') == 'Bentley' ? 'selected' : '' }}>Bentley</option>
                        <option value="Bestune" {{ old('brand') == 'Bestune' ? 'selected' : '' }}>Bestune</option>
                        <option value="Cadillac" {{ old('brand') == 'Cadillac' ? 'selected' : '' }}>Cadillac</option>
                        <option value="Changan" {{ old('brand') == 'Changan' ? 'selected' : '' }}>Changan</option>
                        <option value="Chery" {{ old('brand') == 'Chery' ? 'selected' : '' }}>Chery</option>
                        <option value="Chevrolet" {{ old('brand') == 'Chevrolet' ? 'selected' : '' }}>Chevrolet</option>
                        <option value="Daewoo" {{ old('brand') == 'Daewoo' ? 'selected' : '' }}>Daewoo</option>
                        <option value="Dodge" {{ old('brand') == 'Dodge' ? 'selected' : '' }}>Dodge</option>
                        <option value="Dong Feng" {{ old('brand') == 'Dong Feng' ? 'selected' : '' }}>Dong Feng</option>
                        <option value="Ferrari" {{ old('brand') == 'Ferrari' ? 'selected' : '' }}>Ferrari</option>
                        <option value="Fiat" {{ old('brand') == 'Fiat' ? 'selected' : '' }}>Fiat</option>
                        <option value="Ford" {{ old('brand') == 'Ford' ? 'selected' : '' }}>Ford</option>
                        <option value="GAZ" {{ old('brand') == 'GAZ' ? 'selected' : '' }}>GAZ</option>
                        <option value="Geely" {{ old('brand') == 'Geely' ? 'selected' : '' }}>Geely</option>
                        <option value="Honda" {{ old('brand') == 'Honda' ? 'selected' : '' }}>Honda</option>
                        <option value="Hummer" {{ old('brand') == 'Hummer' ? 'selected' : '' }}>Hummer</option>
                        <option value="Hyundai" {{ old('brand') == 'Hyundai' ? 'selected' : '' }}>Hyundai</option>
                        <option value="Infiniti" {{ old('brand') == 'Infiniti' ? 'selected' : '' }}>Infiniti</option>
                        <option value="Jaguar" {{ old('brand') == 'Jaguar' ? 'selected' : '' }}>Jaguar</option>
                        <option value="Jeep" {{ old('brand') == 'Jeep' ? 'selected' : '' }}>Jeep</option>
                        <option value="Khazar" {{ old('brand') == 'Khazar' ? 'selected' : '' }}>Khazar</option>
                        <option value="Kia" {{ old('brand') == 'Kia' ? 'selected' : '' }}>Kia</option>
                        <option value="Lada(Vaz)" {{ old('brand') == 'Lada(Vaz)' ? 'selected' : '' }}>Lada(Vaz)</option>
                        <option value="Lamborghini" {{ old('brand') == 'Lamborghini' ? 'selected' : '' }}>Lamborghini</option>
                        <option value="Land Rover" {{ old('brand') == 'Land Rover' ? 'selected' : '' }}>Land Rover</option>
                        <option value="Lexus" {{ old('brand') == 'Lexus' ? 'selected' : '' }}>Lexus</option>
                        <option value="Li Auto" {{ old('brand') == 'Li Auto' ? 'selected' : '' }}>Li Auto</option>
                        <option value="Lifan" {{ old('brand') == 'Lifan' ? 'selected' : '' }}>Lifan</option>
                        <option value="Lotus" {{ old('brand') == 'Lotus' ? 'selected' : '' }}>Lotus</option>
                        <option value="Maserati" {{ old('brand') == 'Maserati' ? 'selected' : '' }}>Maserati</option>
                        <option value="Mazda" {{ old('brand') == 'Mazda' ? 'selected' : '' }}>Mazda</option>
                        <option value="Mercedes" {{ old('brand') == 'Mercedes' ? 'selected' : '' }}>Mercedes</option>
                        <option value="Mercedes-Maybach" {{ old('brand') == 'Mercedes-Maybach' ? 'selected' : '' }}>Mercedes-Maybach</option>
                        <option value="Mini" {{ old('brand') == 'Mini' ? 'selected' : '' }}>Mini</option>
                        <option value="Mitsubishi" {{ old('brand') == 'Mitsubishi' ? 'selected' : '' }}>Mitsubishi</option>
                        <option value="Moskvich" {{ old('brand') == 'Moskvich' ? 'selected' : '' }}>Moskvich</option>
                        <option value="Nissan" {{ old('brand') == 'Nissan' ? 'selected' : '' }}>Nissan</option>
                        <option value="Opel" {{ old('brand') == 'Opel' ? 'selected' : '' }}>Opel</option>
                        <option value="Porsche" {{ old('brand') == 'Porsche' ? 'selected' : '' }}>Porsche</option>
                        <option value="Ravon" {{ old('brand') == 'Ravon' ? 'selected' : '' }}>Ravon</option>
                        <option value="Renault" {{ old('brand') == 'Renault' ? 'selected' : '' }}>Renault</option>
                        <option value="Rolls-Royce" {{ old('brand') == 'Rolls-Royce' ? 'selected' : '' }}>Rolls-Royce</option>
                        <option value="Seat" {{ old('brand') == 'Seat' ? 'selected' : '' }}>Seat</option>
                        <option value="Saipa" {{ old('brand') == 'Saipa' ? 'selected' : '' }}>Saipa</option>
                        <option value="Skoda" {{ old('brand') == 'Skoda' ? 'selected' : '' }}>Skoda</option>
                        <option value="Tesla" {{ old('brand') == 'Tesla' ? 'selected' : '' }}>Tesla</option>
                        <option value="Tofas" {{ old('brand') == 'Tofas' ? 'selected' : '' }}>Tofas</option>
                        <option value="Toyota" {{ old('brand') == 'Toyota' ? 'selected' : '' }}>Toyota</option>
                        <option value="Volkswagen" {{ old('brand') == 'Volkswagen' ? 'selected' : '' }}>Volkswagen</option>
                    </select>
                </div>

                <div>
                    <label>Model</label>
                    <select name="model" id="modelSelect"  data-old-model="{{ old('model') }}">
                        <option value="">Əvvəl marka seç</option>
                    </select>
                </div>
            </div>

            <div class="grid">
                <div>
                    <label>Buraxılış ili</label>
                    <input type="number" name="year" value="{{ old('year') }}" placeholder="2020">
                </div>

                <div>
                    <label>Qiymət</label>
                    <input type="number" step="0.01" name="price" value="{{ old('price') }}" placeholder="35000">
                </div>
            </div>

            <div class="grid">
                <div>
                    <label>Matorun növü</label>
                    <select name="engine_type"><option value="">Seç</option>
                        <option value="Benzin" {{ old('engine_type') == 'Benzin' ? 'selected' : '' }}>Benzin</option>
                        <option value="Dizel" {{ old('engine_type') == 'Dizel' ? 'selected' : '' }}>Dizel</option>
                        <option value="Qaz" {{ old('engine_type') == 'Qaz' ? 'selected' : '' }}>Qaz</option>
                        <option value="Hibrid" {{ old('engine_type') == 'Hibrid' ? 'selected' : '' }}>Hibrid</option>
                        <option value="Plug-in Hibrid" {{ old('engine_type') == 'Plug-in Hibrid' ? 'selected' : '' }}>Plug-in Hibrid</option>
                        <option value="Elektro" {{ old('engine_type') == 'Elektro' ? 'selected' : '' }}>Elektro</option>
                    </select>
                </div>

                <div>
                    <label>Matorun həcmi</label>
                    <input type="text" name="engine_volume" value="{{ old('engine_volume') }}" placeholder="Məsələn: 2.0 L">
                </div>
            </div>

            <div class="grid">
                <div>
                    <label>Ban növü</label>
                    <select name="body_type">
                        <option value="">Seç</option>
                        <option value="Sedan" {{ old('body_type') == 'Sedan' ? 'selected' : '' }}>Sedan</option>
                        <option value="Hetçbek" {{ old('body_type') == 'Hetçbek' ? 'selected' : '' }}>Hetçbek</option>
                        <option value="Universal" {{ old('body_type') == 'Universal' ? 'selected' : '' }}>Universal</option>
                        <option value="Kupe" {{ old('body_type') == 'Kupe' ? 'selected' : '' }}>Kupe</option>
                        <option value="Kabriolet" {{ old('body_type') == 'Kabriolet' ? 'selected' : '' }}>Kabriolet</option>
                        <option value="SUV" {{ old('body_type') == 'SUV' ? 'selected' : '' }}>SUV</option>
                        <option value="Pikap" {{ old('body_type') == 'Pikap' ? 'selected' : '' }}>Pikap</option>
                        <option value="Minivan" {{ old('body_type') == 'Minivan' ? 'selected' : '' }}>Minivan</option>
                        <option value="Furqon" {{ old('body_type') == 'Furqon' ? 'selected' : '' }}>Furqon</option>
                    </select>
                </div>

                <div>
                    <label>Yürüş</label>
                    <input type="number" name="mileage" value="{{ old('mileage') }}" placeholder="Məsələn: 125000">
                </div>
            </div>

            <div class="grid">
                <div>
                    <label>Rəng</label>
                    <select name="color">
                        <option value="">Seç</option>
                        <option value="Ağ" {{ old('color') == 'Ağ' ? 'selected' : '' }}>Ağ</option>
                        <option value="Qara" {{ old('color') == 'Qara' ? 'selected' : '' }}>Qara</option>
                        <option value="Boz" {{ old('color') == 'Boz' ? 'selected' : '' }}>Boz</option>
                        <option value="Gümüşü" {{ old('color') == 'Gümüşü' ? 'selected' : '' }}>Gümüşü</option>
                        <option value="Göy" {{ old('color') == 'Göy' ? 'selected' : '' }}>Göy</option>
                        <option value="Qırmızı" {{ old('color') == 'Qırmızı' ? 'selected' : '' }}>Qırmızı</option>
                        <option value="Yaşıl" {{ old('color') == 'Yaşıl' ? 'selected' : '' }}>Yaşıl</option>
                        <option value="Qəhvəyi" {{ old('color') == 'Qəhvəyi' ? 'selected' : '' }}>Qəhvəyi</option>
                        <option value="Bej" {{ old('color') == 'Bej' ? 'selected' : '' }}>Bej</option>
                    </select>
                </div>

                <div>
                    <label>Hansı bazar üçün yığılıb</label>
                    <select name="market">
                        <option value="">Seç</option>
                        <option value="Amerika" {{ old('market') == 'Amerika' ? 'selected' : '' }}>Amerika</option>
                        <option value="Avropa" {{ old('market') == 'Avropa' ? 'selected' : '' }}>Avropa</option>
                        <option value="Rusiya" {{ old('market') == 'Rusiya' ? 'selected' : '' }}>Rusiya</option>
                        <option value="Koreya" {{ old('market') == 'Koreya' ? 'selected' : '' }}>Koreya</option>
                        <option value="Yaponiya" {{ old('market') == 'Yaponiya' ? 'selected' : '' }}>Yaponiya</option>
                        <option value="Çin" {{ old('market') == 'Çin' ? 'selected' : '' }}>Çin</option>
                        <option value="Dubay" {{ old('market') == 'Dubay' ? 'selected' : '' }}>Dubay</option>
                        <option value="Rəsmi diler" {{ old('market') == 'Rəsmi diler' ? 'selected' : '' }}>Rəsmi diler</option>
                    </select>
                </div>
            </div>

            <div>
                <label>Avtomobilin vəziyyəti</label>
                <select name="condition">
                    <option value="">Seç</option>
                    <option value="Vuruğu yoxdur" {{ old('condition') == 'Vuruğu yoxdur' ? 'selected' : '' }}>Vuruğu yoxdur</option>
                    <option value="Rənglənməyib" {{ old('condition') == 'Rənglənməyib' ? 'selected' : '' }}>Rənglənməyib</option>
                    <option value="Vuruğu var" {{ old('condition') == 'Vuruğu var' ? 'selected' : '' }}>Vuruğu var</option>
                    <option value="Rənglənib" {{ old('condition') == 'Rənglənib' ? 'selected' : '' }}>Rənglənib</option>
                    <option value="Kreditdədir" {{ old('condition') == 'Kreditdədir' ? 'selected' : '' }}>Kreditdədir</option>
                    <option value="Barter mümkündür" {{ old('condition') == 'Barter mümkündür' ? 'selected' : '' }}>Barter mümkündür</option>
                </select>
            </div>


            <div class="grid">
                <div>
                    <div>
    <label>Şəhər</label>
    <select name="city" id="citySelect">
        <option value="">Şəhər seç</option>
        <option value="Abşeron" {{ old('city') == 'Abşeron' ? 'selected' : '' }}>Abşeron</option>
        <option value="Ağcabədi" {{ old('city') == 'Ağcabədi' ? 'selected' : '' }}>Ağcabədi</option>
        <option value="Ağdam" {{ old('city') == 'Ağdam' ? 'selected' : '' }}>Ağdam</option>
        <option value="Ağdaş" {{ old('city') == 'Ağdaş' ? 'selected' : '' }}>Ağdaş</option>
        <option value="Ağstafa" {{ old('city') == 'Ağstafa' ? 'selected' : '' }}>Ağstafa</option>
        <option value="Ağsu" {{ old('city') == 'Ağsu' ? 'selected' : '' }}>Ağsu</option>
        <option value="Astara" {{ old('city') == 'Astara' ? 'selected' : '' }}>Astara</option>
        <option value="Bakı" {{ old('city') == 'Bakı' ? 'selected' : '' }}>Bakı</option>
        <option value="Balakən" {{ old('city') == 'Balakən' ? 'selected' : '' }}>Balakən</option>
        <option value="Bərdə" {{ old('city') == 'Bərdə' ? 'selected' : '' }}>Bərdə</option>
        <option value="Beyləqan" {{ old('city') == 'Beyləqan' ? 'selected' : '' }}>Beyləqan</option>
        <option value="Biləsuvar" {{ old('city') == 'Biləsuvar' ? 'selected' : '' }}>Biləsuvar</option>
        <option value="Cəbrayıl" {{ old('city') == 'Cəbrayıl' ? 'selected' : '' }}>Cəbrayıl</option>
        <option value="Cəlilabad" {{ old('city') == 'Cəlilabad' ? 'selected' : '' }}>Cəlilabad</option>
        <option value="Daşkəsən" {{ old('city') == 'Daşkəsən' ? 'selected' : '' }}>Daşkəsən</option>
        <option value="Füzuli" {{ old('city') == 'Füzuli' ? 'selected' : '' }}>Füzuli</option>
        <option value="Gədəbəy" {{ old('city') == 'Gədəbəy' ? 'selected' : '' }}>Gədəbəy</option>
        <option value="Gəncə" {{ old('city') == 'Gəncə' ? 'selected' : '' }}>Gəncə</option>
        <option value="Goranboy" {{ old('city') == 'Goranboy' ? 'selected' : '' }}>Goranboy</option>
        <option value="Göyçay" {{ old('city') == 'Göyçay' ? 'selected' : '' }}>Göyçay</option>
        <option value="Göygöl" {{ old('city') == 'Göygöl' ? 'selected' : '' }}>Göygöl</option>
        <option value="Hacıqabul" {{ old('city') == 'Hacıqabul' ? 'selected' : '' }}>Hacıqabul</option>
        <option value="İmişli" {{ old('city') == 'İmişli' ? 'selected' : '' }}>İmişli</option>
        <option value="İsmayıllı" {{ old('city') == 'İsmayıllı' ? 'selected' : '' }}>İsmayıllı</option>
        <option value="Kəlbəcər" {{ old('city') == 'Kəlbəcər' ? 'selected' : '' }}>Kəlbəcər</option>
        <option value="Kürdəmir" {{ old('city') == 'Kürdəmir' ? 'selected' : '' }}>Kürdəmir</option>
        <option value="Laçın" {{ old('city') == 'Laçın' ? 'selected' : '' }}>Laçın</option>
        <option value="Lənkəran" {{ old('city') == 'Lənkəran' ? 'selected' : '' }}>Lənkəran</option>
        <option value="Lerik" {{ old('city') == 'Lerik' ? 'selected' : '' }}>Lerik</option>
        <option value="Masallı" {{ old('city') == 'Masallı' ? 'selected' : '' }}>Masallı</option>
        <option value="Mingəçevir" {{ old('city') == 'Mingəçevir' ? 'selected' : '' }}>Mingəçevir</option>
        <option value="Naftalan" {{ old('city') == 'Naftalan' ? 'selected' : '' }}>Naftalan</option>
        <option value="Naxçıvan" {{ old('city') == 'Naxçıvan' ? 'selected' : '' }}>Naxçıvan</option>
        <option value="Neftçala" {{ old('city') == 'Neftçala' ? 'selected' : '' }}>Neftçala</option>
        <option value="Oğuz" {{ old('city') == 'Oğuz' ? 'selected' : '' }}>Oğuz</option>
        <option value="Qax" {{ old('city') == 'Qax' ? 'selected' : '' }}>Qax</option>
        <option value="Qazax" {{ old('city') == 'Qazax' ? 'selected' : '' }}>Qazax</option>
        <option value="Qəbələ" {{ old('city') == 'Qəbələ' ? 'selected' : '' }}>Qəbələ</option>
        <option value="Qobustan" {{ old('city') == 'Qobustan' ? 'selected' : '' }}>Qobustan</option>
        <option value="Quba" {{ old('city') == 'Quba' ? 'selected' : '' }}>Quba</option>
        <option value="Qubadlı" {{ old('city') == 'Qubadlı' ? 'selected' : '' }}>Qubadlı</option>
        <option value="Qusar" {{ old('city') == 'Qusar' ? 'selected' : '' }}>Qusar</option>
        <option value="Saatlı" {{ old('city') == 'Saatlı' ? 'selected' : '' }}>Saatlı</option>
        <option value="Sabirabad" {{ old('city') == 'Sabirabad' ? 'selected' : '' }}>Sabirabad</option>
        <option value="Salyan" {{ old('city') == 'Salyan' ? 'selected' : '' }}>Salyan</option>
        <option value="Samux" {{ old('city') == 'Samux' ? 'selected' : '' }}>Samux</option>
        <option value="Siyəzən" {{ old('city') == 'Siyəzən' ? 'selected' : '' }}>Siyəzən</option>
        <option value="Sumqayıt" {{ old('city') == 'Sumqayıt' ? 'selected' : '' }}>Sumqayıt</option>
        <option value="Şabran" {{ old('city') == 'Şabran' ? 'selected' : '' }}>Şabran</option>
        <option value="Şahbuz" {{ old('city') == 'Şahbuz' ? 'selected' : '' }}>Şahbuz</option>
        <option value="Şamaxı" {{ old('city') == 'Şamaxı' ? 'selected' : '' }}>Şamaxı</option>
        <option value="Şəki" {{ old('city') == 'Şəki' ? 'selected' : '' }}>Şəki</option>
        <option value="Şəmkir" {{ old('city') == 'Şəmkir' ? 'selected' : '' }}>Şəmkir</option>
        <option value="Şərur" {{ old('city') == 'Şərur' ? 'selected' : '' }}>Şərur</option>
        <option value="Şirvan" {{ old('city') == 'Şirvan' ? 'selected' : '' }}>Şirvan</option>
        <option value="Şuşa" {{ old('city') == 'Şuşa' ? 'selected' : '' }}>Şuşa</option>
        <option value="Tərtər" {{ old('city') == 'Tərtər' ? 'selected' : '' }}>Tərtər</option>
        <option value="Tovuz" {{ old('city') == 'Tovuz' ? 'selected' : '' }}>Tovuz</option>
        <option value="Ucar" {{ old('city') == 'Ucar' ? 'selected' : '' }}>Ucar</option>
        <option value="Xaçmaz" {{ old('city') == 'Xaçmaz' ? 'selected' : '' }}>Xaçmaz</option>
        <option value="Xankəndi" {{ old('city') == 'Xankəndi' ? 'selected' : '' }}>Xankəndi</option>
        <option value="Xırdalan" {{ old('city') == 'Xırdalan' ? 'selected' : '' }}>Xırdalan</option>
        <option value="Xızı" {{ old('city') == 'Xızı' ? 'selected' : '' }}>Xızı</option>
        <option value="Xocalı" {{ old('city') == 'Xocalı' ? 'selected' : '' }}>Xocalı</option>
        <option value="Xocavənd" {{ old('city') == 'Xocavənd' ? 'selected' : '' }}>Xocavənd</option>
        <option value="Yardımlı" {{ old('city') == 'Yardımlı' ? 'selected' : '' }}>Yardımlı</option>
        <option value="Yevlax" {{ old('city') == 'Yevlax' ? 'selected' : '' }}>Yevlax</option>
        <option value="Zaqatala" {{ old('city') == 'Zaqatala' ? 'selected' : '' }}>Zaqatala</option>
        <option value="Zəngilan" {{ old('city') == 'Zəngilan' ? 'selected' : '' }}>Zəngilan</option>
        <option value="Zərdab" {{ old('city') == 'Zərdab' ? 'selected' : '' }}>Zərdab</option>
    </select>
</div>

                </div>

                <div>
                    <label>Telefon</label>
                    <input type="text" name="phone" value="{{ old('phone') }}" placeholder="+994...">
                </div>
            </div>

            <label>Əlavə məlumat</label>
            <textarea name="description" placeholder="Avtomobil haqqında məlumat">{{ old('description') }}</textarea>
            <label>Şəkillər</label>
            <input type="file" name="images[]" accept="image/*" multiple>
            <small>Maksimum 20 şəkil əlavə edə bilərsiniz.</small>



            <button class="submit" type="submit">Elanı yerləşdir</button>
        </form>
    </div>
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
    const oldModel = modelSelect.dataset.oldModel;

    function fillModels(brand) {
        const models = modelsByBrand[brand] || [];

        modelSelect.innerHTML = '<option value="">Model seç</option>';

        models.forEach(function (model) {
            const option = document.createElement('option');
            option.value = model;
            option.textContent = model;

            if (oldModel === model) {
                option.selected = true;
            }

            modelSelect.appendChild(option);
        });
    }

    brandSelect.addEventListener('change', function () {
        fillModels(this.value);
    });

</script>
<script src="{{ asset('js/theme.js') }}"></script>


</body>
</html>
