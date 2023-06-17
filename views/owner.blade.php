<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/cormorant-2" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/inter" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Offer open space</title>
    <style>
        .font-inter {
            font-family: 'Inter', sans-serif;
        }

        body {
            width: 100%;
            height: 100vh;

        }
    </style>
</head>

<body class="font-inter">
    <section class="flex justify-center text-4xl font-semibold my-6">
        Offer Open Space to Vendor
    </section>
    <form action="">
        <section class="mx-20">
            <h1 class="text-2xl my-2 ml-2 font-semibold">Space Owner <span class="text-red-500">*</span></h1>
            <div class="flex flex-row gap-12">
                <div class="flex w-full gap-2 flex-col">
                    <input class="w-full h-10 rounded-xl pl-4 focus:outline-none ring-1 ring-black" type="text">
                    <label for="First Name">First Name</label>
                </div>
                <div class="flex w-full gap-2 flex-col">
                    <input class="w-full h-10 rounded-xl pl-4 focus:outline-none ring-1 ring-black" type="text">
                    <label for="First Name">First Name</label>
                </div>
            </div>
            <h1 class="text-2xl ml-2 my-8 font-semibold">Phone Number<span class="text-red-500">*</span></h1>
            <div class="flex flex-row gap-12">
                <div class="flex w-full gap-2 flex-col">
                    <input class="w-full h-10 rounded-xl pl-4 focus:outline-none ring-1 ring-black" type="text">
                </div>
            </div>
            <h1 class="text-2xl ml-2 my-8 font-semibold">Location<span class="text-red-500">*</span></h1>
            <div class="flex flex-row gap-12">
                <div class="flex w-full gap-2 flex-col">
                    <input class="w-full h-10 rounded-xl pl-4 focus:outline-none ring-1 ring-black" type="text">
                </div>
            </div>
            <h1 class="text-2xl ml-2 my-8 font-semibold">Amount of Space<span class="text-red-500">*</span></h1>
            <div class="flex flex-row gap-12">
                <div class="flex w-fit gap-2 flex-col">
                    <input class="w-full h-10 rounded-xl pl-4 focus:outline-none ring-1 ring-black" type="text">
                </div>
            </div>
        </section>
<section class="flex flex-row justify-center gap-24 mt-24">
    <a class="w-52 h-16 bg-[#FF6060] text-white text-2xl rounded-xl flex font-semibold justify-center items-center" href="">Back</a>
    <button class="w-52 h-16 bg-[#FF6060] text-white text-2xl rounded-xl flex font-semibold justify-center items-center" type="submit">Next</button>
</section>
    </form>
</body>

</html>