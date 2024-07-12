<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
           background-color: #FCF7C4;
       }
       header{
           background-color: #FCF7C4;
       }
       .logo{
           color: #D62A2A;
       }
       .logo span{
           color: black;
       }
       .main-container{
           align-items: center;
           justify-content: center;
       }
       .card-scroll{
           /* background-color: #ab9f9f; */
           background-image: linear-gradient(to right, rgba(198, 196, 196, 0.527), rgba(223, 212, 212, 0.922));
       }
       #card-promo {
           background-image: linear-gradient(to right, rgba(50, 63, 87, 0.527), rgba(72, 70, 199, 0.922), rgba(50, 63, 87, 0.527));
           background-color: #262f3e;
       }
   </style>
</head>

<body>
    <header class="header w-[412px] h-[100px] lg:w-auto mx-auto justify-center flex items-center py-4">
        <div class="container-header">
            <h1 class="logo lg:text-5xl text-3xl text-red-700 font-bold">
                MA<span class="text-black">RU</span>
            </h1>       
        </div> 
    </header>

    <main class="w-[412px] h-[100px]">
        <!-- profile picture -->
        <div class="w-[150px] h-[150px] border mx-auto rounded-full bg-white shadow-xl"></div>
        <p class="text-center mt-2 text-sm font-semibold">Edit foto atau avatarmu</p>

        <div class="mx-auto">
            <label for="nama">Nama :</label>
            <br>
            <input type="text" name="name" id="name" class="w-[250px]">
        </div>
    </main>
</body>
</html>