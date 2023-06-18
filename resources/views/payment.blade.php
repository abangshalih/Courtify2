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
<nav class="flex items-center justify-between flex-wrap bg-yellow-400 p-6">
    <div class="flex items-center flex-shrink-0 text-black mr-6">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
        </svg>

        <span class="font-semibold text-xl tracking-tight pl-4">Warung Pak Haji</span>
    </div>
</nav>

<body class="bg-slate-100">
    <div class="max-w-xl mx-auto bg-[#fffff9] w-full">
        <div class="flex flex-col w-full" style="padding: 20px">
            <div class="flex flex-col  justify-center items-center w-full mt-4">
                <div class="flex px-4 flex-row justify-between items-center w-full text-2xl font-bold">
                    <h1>Deliver to</h1>
                </div>
                <div class="flex px-4 flex-row justify-between items-center w-full text-2xl font-bold mt-3">
                    <h1>Table 04</h1>
                    <p class="text-ellipsis font-light text-xl">Change table</p>
                </div>
            </div>
        </div>
    </div>
</body>

<div class="bg-slate-100" style="width: 125%; height: 20px; margin-top: 10px; margin-bottom: 6px;"></div>

<body class="bg-slate-100">
    <div class="max-w-xl mx-auto w-full h-screen">
        <div class="flex flex-col w-full">
            <div class="flex flex-col  justify-center items-center w-full mt-4">
                <div class="flex px-4 flex-row justify-between items-center w-full text-gray-500 font-semibold">
                    <h1>Pembayaran via</h1>
                </div>
            </div>
            <div class="rounded-t-lg mx-auto bg-slate-300 w-full mb-3">
                <img src="{{ asset('images/mandiri.png') }}" class="px-4 mt-2 w-25" alt="" />
                <div class="flex px-4 flex-row justify-between items-center w-full text-gray-500 font-semibold">
                    <h1>Nomor Virtual Account</h1>
                </div>
                <div
                    class="container rounded w-11/12 h-10 flex flex-col justify-center item-center bg-white text-black font-bold text-xl mt-3">
                    <h1 class="text-center max-lg:">444029120949214390</h1>
                </div>

                <div class="flex px-4 flex-row justify-between items-center w-full text-gray-500 font-semibold">
                    <h1>Total yang harus dibayar</h1>
                </div>
                <div class="rounded-t-lg mx-auto bg-slate-300 mt-2 w-full  mb-3 ">
                    <div class="flex flex-col w-full">
                        <div class="flex flex-col  justify-center items-center w-full">
                            <div
                                class="flex px-4 flex-row justify-between items-center w-full text-black font-semibold text-xl">
                                <h1>Rp. 44.000,00</h1>
                            </div>
                            <div class="rounded-t-lg mx-auto bg-slate-300 mt-2 w-full  mb-3 mb-10">
                                <div class="flex flex-col w-full">
                                    <div class="flex flex-col  justify-center items-center w-full">
                                        <div
                                            class="flex px-4 flex-row justify-between items-center w-full text-gray-500 font-semibold">
                                            <p>Batas waktu pembayaran sampai
                                                :</p>
                                        </div>
                                        <div class="rounded-t-lg mx-auto bg-slate-300 mt-0.1 w-full  mb-3 mb-10">
                                            <div class="flex flex-col w-full">
                                                <div class="flex flex-col justify-center items-center w-full">
                                                    <div
                                                        class="flex px-4 flex-row justify-between items-center w-full text-gray-500 font-semibold">
                                                        <h1>2024-06-06
                                                            11:23:11</h1>
                                                    </div>
                                                    <button
                                                        class="w-11/12 h-10 items-center text-center bg-red-500 text-white font-semibold text-2xl mt-12"
                                                        id="button_submit" type="button">
                                                        Done</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#button_submit").click(function() {
                $.ajax({
                    type: "POST",
                    url: "../../make-reservation",
                    data: {
                        _token: "{{ csrf_token() }}",
                        _method: "POST",
                        restaurant_id: "{{ $restaurant->id }}",
                        table_id: "{{ $table->id }}",
                    },
                    success: function(data) {
                        window.location.href = data.url;
                    },
                });
            });
        });
    </script>
</body>

</html>
