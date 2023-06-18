<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>Courtify</title>
    <link rel="stylesheet" href="{{ asset('cssfile/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('cssfile/index.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" />
</head>

<body>
    <div class="iphone-8-23">
        <h4 class="rp-22000" id="harga4">Rp. 22.000</h4>
        <a href="#" style="color: black;">
            <h4 class="ayam-rica-rica" id="menu4">Ayam Rica- Rica</h4>
        </a>
        <a href="#"><button type="submit"><img class="iphone-8-23-child" alt=""
                    src="{{ asset('images/ayamrica@2x.png') }}" /></button></a>

        <h4 class="rp-23000" id="harga3">Rp. 23.000</h4>
        <a href="#" style="color: black;">
            <h4 class="ayam-madu" id="menu3">Ayam Madu</h4>
        </a>
        <a href="#"><button type="submit"><img class="iphone-8-23-item" alt=""
                    src="{{ asset('images/ayammadu@2x.png') }}" /></button></a>

        <h4 class="rp-18000" id="harga2">Rp. 18.000</h4>
        <a href="#" style="color: black;">
            <h4 class="ayam-goreng" id="menu2">Ayam Goreng</h4>
        </a>
        <a href="#"><button type="submit"><img class="iphone-8-23-inner" alt=""
                    src="{{ asset('images/ayamgoreng@2x.png') }}" /></button></a>

        <h4 class="rp-20000" id="harga1">Rp. 20.000</h4>
        <a href="../../cart/{{ $restaurant->id }}/{{ $table->id }}" style="color: black;">
            <h4 class="ayam-bakar" id="menu1">Ayam Bakar</h4>
        </a>
        <a href="../../cart/{{ $restaurant->id }}/{{ $table->id }}"><button type="submit"><img
                    class="rectangle-icon" alt="" src="{{ asset('images/ayambakar@2x.png') }}" /></button></a>

        <img class="iphone-8-23-child1" alt="" loading="eager" src="{{ asset('images/bgAyam@2x.png') }}" />

        <img class="iphone-8-23-child2" alt="" src="{{ asset('images/rectangle-40.svg') }}" />

        <img class="star-icon" alt="" src="{{ asset('images/star-2.svg') }}" />


        <h4 class="h4">4.8</h4>
        <h2 class="warung-pak-haji" id="Warung">Warung Pak Haji</h2>
        <h4 class="k-reviews">(2k+) Reviews</h4>
        <a href="../../searchrestaurants"><img class="arrow-icon" alt=""
                src="{{ asset('images/arrow-2.svg') }}" /></a>
    </div>
</body>

</html>
