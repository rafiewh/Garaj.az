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
            background: white;
            border-radius: 7px;
            overflow: hidden;
            box-shadow: 0 1px 4px rgba(0,0,0,.10);
            transition: .2s;
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

    </style>
</head>
<body>

<div class="topbar">
    <div class="container header">
        <a href="{{ route('car-ads.index') }}" class="logo">Garaj.az</a>

        <div class="nav">
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
        <div class="filter-grid">
            <select id="brandSelect">
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

            <select id="modelSelect">
                <option value="">Model</option>
            </select>

            <input type="number" placeholder="Qiymət, min.">
            <input type="number" placeholder="Qiymət, maks.">
        </div>
    </div>

    <h2 class="section-title">Son elanlar</h2>

    @if($ads->count())
        <div class="ads-grid">
            @foreach($ads as $ad)
                <div class="ad-card">
                    <div class="image-box">
                        @if(!empty($ad->images) && count($ad->images))
                        <img src="{{ asset('storage/' . $ad->images[0]) }}" alt="{{ $ad->brand }} {{ $ad->model }}">
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
                            {{ $ad->engine_volume ?? 'Mator qeyd olunmayıb' }},
                            {{ $ad->mileage ? number_format($ad->mileage, 0, '.', ' ') . ' km' : 'Yürüş qeyd olunmayıb' }}
                        </div>

                        <div class="city">
                            {{ $ad->city }} · {{ $ad->created_at->format('d.m.Y') }}
                        </div>
                    </div>

                    <div class="actions">
                        <form action="{{ route('car-ads.destroy', $ad->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="delete-btn" type="submit" onclick="return confirm('Bu elanı silmək istəyirsən?')">
                                Elanı sil
                            </button>
                        </form>
                    </div>
                </div>
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
        "Toyota": ["Auris", "Avalon", "Avensis", "C-HR", "Camry", "Corolla", "FJ Cruiser", "Fortuner", "Highlander", "Hilux", "Land Cruiser", "Prado", "Prius", "RAV4", "Sequoia", "Sienna", "Vitz", "Yaris"],
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

</body>
</html>
