<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('cssfile/punyajer.css') }}" />
    <title>Courtify</title>
</head>

<body>
    <div class="container">
        <div class="user-info">
            <img src="images/user.png" alt="user info" />
            <h1>Hello, Jericho Luthfi Syahli</h1>
        </div>

        <div class="hero">
            <div class="hero-banner">
                <h2>You are currently in</h2>
                <h1>Tunjungan Plaza 6 Food Court</h1>
                <div class="hero-link">
                    <p>Wrong location ? <a href="#">Select location manually</a></p>
                </div>
            </div>
        </div>

        <div class="title">
            <h1>Pick a table</h1>
        </div>

        <div class="table-wrapper">
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/1" style="text-decoration: none;">
                    01
                </a>
            </div>
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/2" style="text-decoration: none;">
                    02
                </a>
            </div>
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/3" style="text-decoration: none;">
                    03
                </a>
            </div>
            <div class="table-item">
                <a href="../choose-menu/{{ $restaurant->id }}/4" style="text-decoration: none;">
                    04
                </a>
            </div>
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/5" style="text-decoration: none;">
                    05
                </a>
            </div>
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/6" style="text-decoration: none;">
                    06
                </a>
            </div>
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/7" style="text-decoration: none;">
                    07
                </a>
            </div>
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/8" style="text-decoration: none;">
                    08
                </a>
            </div>
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/9" style="text-decoration: none;">
                    09
                </a>
            </div>
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/10" style="text-decoration: none;">
                    10
                </a>
            </div>
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/11" style="text-decoration: none;">
                    11
                </a>
            </div>
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/12" style="text-decoration: none;">
                    12
                </a>
            </div>
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/13" style="text-decoration: none;">
                    13
                </a>
            </div>
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/14" style="text-decoration: none;">
                    14
                </a>
            </div>
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/15" style="text-decoration: none;">
                    15
                </a>
            </div>
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/16" style="text-decoration: none;">
                    16
                </a>
            </div>
            <div class="table-item">
                <a href="../choose-menu/{{ $restaurant->id }}/17" style="text-decoration: none;">
                    17
                </a>
            </div>
            <div class="table-item">
                <a href="../choose-menu/{{ $restaurant->id }}/18" style="text-decoration: none;">
                    18
                </a>
            </div>
            <div class="table-item">
                <a href="../choose-menu/{{ $restaurant->id }}/19" style="text-decoration: none;">
                    19
                </a>
            </div>
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/20" style="text-decoration: none;">
                    20
                </a>
            </div>
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/21" style="text-decoration: none;">
                    21
                </a>
            </div>
            <div class="table-item">
                <a href="../choose-menu/{{ $restaurant->id }}/22" style="text-decoration: none;">
                    22
                </a>
            </div>
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/23" style="text-decoration: none;">
                    23
                </a>
            </div>
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/24" style="text-decoration: none;">
                    24
                </a>
            </div>
            <div class="table-item">
                <a href="../choose-menu/{{ $restaurant->id }}/25" style="text-decoration: none;">
                    25
                </a>
            </div>
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/26" style="text-decoration: none;">
                    26
                </a>
            </div>
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/27" style="text-decoration: none;">
                    27
                </a>
            </div>
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/28" style="text-decoration: none;">
                    28
                </a>
            </div>
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/29" style="text-decoration: none;">
                    29
                </a>
            </div>
            <div class="table-item active">
                <a href="../choose-menu/{{ $restaurant->id }}/30" style="text-decoration: none;">
                    30
                </a>
            </div>
        </div>

        <div class="menu-wrapper">
            <div class="menu-slider">
                <div class="title">
                    <h1>Explore restaurants</h1>
                </div>
                <div class="slider">
                    <div class="slider-item">
                        <div class="menu">
                            <img src="images/food (4).png" alt="menu" />
                            <p>Warung Pak Haji</p>
                            <div class="rate">
                                <img src="images/Star.png" alt="" />
                                <p>4.8</p>
                            </div>
                        </div>
                        <div class="menu">
                            <img src="images/food (2).png" alt="menu" />
                            <p>Soto Ayam Bu Siti</p>
                            <div class="rate">
                                <img src="images/Star.png" alt="" />
                                <p>4.8</p>
                            </div>
                        </div>
                        <div class="menu">
                            <img src="images/food (3).png" alt="menu" />
                            <p>Sate Pak Kumis</p>
                            <div class="rate">
                                <img src="images/Star.png" alt="" />
                                <p>4.8</p>
                            </div>
                        </div>
                    </div>
                    <div class="slider-option">
                        <a href="searchrestaurants"><img src="images/Arrow.png" alt="" /></a>
                    </div>
                </div>
            </div>
            <div class="menu-slider">
                <div class="title">
                    <h1>Explore Menus</h1>
                </div>
                <div class="slider">
                    <div class="slider-item">
                        <div class="menu">
                            <img src="images/food (6).png" alt="menu" />
                            <p>Ayam Rica-Rica</p>
                        </div>
                        <div class="menu">
                            <img src="images/food (1).png" alt="menu" />
                            <p>Ayam Bakar</p>
                        </div>
                        <div class="menu">
                            <img src="images/food (5).png" alt="menu" />
                            <p>Ayam Goreng</p>
                        </div>
                    </div>
                    <div class="slider-option">
                        <img src="images/Arrow.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
