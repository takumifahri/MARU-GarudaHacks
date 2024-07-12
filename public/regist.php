<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\
    , initial-scale=1.0">
    <title>Register With Us!</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body{
            background-color: #FCF7C4;
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
    
    <main class="w-[412px] h-[912px]">
        <div class="card w-[200px] h-[120px]  mx-auto justify-center flex items-center bg-white p-4 rounded rounded-lg shadow shadow-xl">
            <h2 class="font-bold text-2xl">"A New Experience will begin!"</h2> 
        </div>
        <form action="" method="post" class="w-[250px] h-[250px]  mx-auto justify-center items-center mt-6">
            <label for="nama" class="font-bold">Nama :</label>
            <br>
            <input type="text" id="nama" name="nama" class="w-[250px] mt-1 rounded rounded-lg mb-1 p-1 shadow shadow-lg">

            <label for="email" class="font-bold">Email :</label>
            <br>
            <input type="email" id="email" name="email" class="w-[250px] mt-1 rounded rounded-lg mb-1 p-1  shadow-lg">

            <label for="password" class="font-bold">Password :</label>
            <br>
            <input type="password" id="password" name="password" class="w-[250px] mt-1 rounded rounded-lg p-1 shadow shadow-lg">
            
            <br>
            <label for="password" class="font-bold">Confirm Password :</label>
            <br>
            <input type="password" id="password" name="password1" class="w-[250px] mt-1 rounded rounded-lg p-1 shadow shadow-lg">

            <br>
            <button type="submit" name="register" class="float-right bg-red-500 w-[100px] mt-5 text-white p-1 rounded rounded-full shadow-lg shadow">Register</button>
        </form>
        
        <div class="divider w-[300px] h-[45px] mx-auto flex items-center justify-center">
            <hr class="w-[120px] text-black ">
            <p class="text-xs mx-2">OR </p>
            <hr class="w-[120px] text-black">
        </div>
 
        <div class="buttonss w-[180px] h-[250px] mt-3 mx-auto     items-center justify-center">
            <button style="background-color: #AC6BCB;" type="submit" name="submit" class="w-[180px] text-sm mt-1 p-1 rounded rounded-full shadow shadow-lg">Continue with Google</button>
            <button type="submit" name="submit" class=" bg-white w-[180px] text-sm mt-1 p-1 rounded rounded-full shadow shadow-lg mt-4">Continue with Instagram</button>
        </div>
    </main>
   
</body>
</html>