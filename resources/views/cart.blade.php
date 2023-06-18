<html>

<head>
    <title>

    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body class="bg-slate-100">
    <div class="max-w-xl mx-auto bg-[#fffff9] w-full min-h-screen ">
        <div class="flex flex-col w-full">
            <img src="{{ asset('/images/ayam_bakar.png') }}" class="w-full" />
            <div class="flex flex-col justify-center items-center px-4 w-full mt-4 ">
                <div class="flex flex-row justify-between items-center w-full text-3xl font-bold">
                    <h1>Ayam Bakar</h1>
                    <h1>20.000</h1>
                </div>
                <p class="mt-6 text-justify">Ayam yang dibakar dengan bumbu rempah yang khas dilengkapi dengan lalapan (
                    Selada, Tomat). Lezat dan menyehatkan </p>
            </div>
            <div class="bg-slate-100 w-full h-6 my-6">

            </div>

            <div class="flex flex-col px-4">
                <h2 class="text-3xl font-bold">Menu Tambahan</h2>
                <div class="flex flex-col space-y-4 mt-6">
                    <div class="flex flex-row justify-between items-center gap-3">
                        <div class="flex flex-row items-center gap-3 text-2xl">
                            <input type="checkbox" id="1" name="1" class="w-6 h-6">
                            <label for="1">Telur Ceplok</label>
                        </div>
                        <p class="text-xl">+ 5.000</p>
                    </div>
                    <hr>
                </div>
                <div class="flex flex-col space-y-4 mt-6">
                    <div class="flex flex-row justify-between items-center gap-3">
                        <div class="flex flex-row items-center gap-3 text-2xl">
                            <input type="checkbox" id="1" name="1" class="w-6 h-6">
                            <label for="1">Telur Dadar</label>
                        </div>
                        <p class="text-xl">+ 5.000</p>
                    </div>
                    <hr>
                </div>
                <div class="flex flex-col space-y-4 mt-6">
                    <div class="flex flex-row justify-between items-center gap-3">
                        <div class="flex flex-row items-center gap-3 text-2xl">
                            <input type="checkbox" id="1" name="1" class="w-6 h-6">
                            <label for="1">Telur Ceplok</label>
                        </div>
                        <p class="text-xl">+ 5.000</p>
                    </div>
                    <hr>
                </div>
                <div class="flex flex-col space-y-4 mt-6">
                    <div class="flex flex-row justify-between items-center gap-3">
                        <div class="flex flex-row items-center gap-3 text-2xl">
                            <input type="checkbox" id="1" name="1" class="w-6 h-6">
                            <label for="1">Telur Ceplok</label>
                        </div>
                        <p class="text-xl">+ 5.000</p>
                    </div>
                    <hr>
                </div>
                <a href="/checkout/{{ $restaurant->id }}/{{ $table->id }}"
                    class="w-full h-10 items-center text-center bg-red-500 text-white font-bold text-2xl mt-12">
                    Add to Basket - 20.000
                </a>

            </div>
        </div>
    </div>
</body>

</html>
