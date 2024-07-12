<?php 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
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
<body class="w-[412px] lg:w-auto min-h-max lg:h-auto">
    <header class="header lg:w-auto py-10 mb-3">
        <div class="container-header flex justify-between w-[412px] h-[50px] py-1">
           <h1 class="logo lg:text-5xl text-3xl mx-5 font-bold">
                MA<span>RU</span>
            </h1>   
            <div class="button-like-notif flex">
                <button type="submit" name="promosi" class="float-right w-[75px] h-[25px] text-xs mt-2  text-white rounded rounded-full" style="background-color: #D62A2A;">Pilih promosi</button>
                <svg class="w-[20px] h-[45px] mx-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>heart</title><path d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z"/></svg>
                <svg class="w-[20px] h-[45px] mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>bell</title><path d="M21,19V20H3V19L5,17V11C5,7.9 7.03,5.17 10,4.29C10,4.19 10,4.1 10,4A2,2 0 0,1 12,2A2,2 0 0,1 14,4C14,4.1 14,4.19 14,4.29C16.97,5.17 19,7.9 19,11V17L21,19M14,21A2,2 0 0,1 12,23A2,2 0 0,1 10,21" /></svg>
            </div>
            
        </div>
    </header>
    <main class="main-container w-[412px] px-8 overflow-auto">
        <div class="card-scroll w-[345px] h-[110px] lg:w-[1000px] lg:h-[150px] grid grid-cols-4 p-3 gap-5 lg:pl-14 lg:py-6 rounded rounded-xl border">
            <table class="w-[325px] p-2">
                <tr>
                    <td>
                        <div class="lg:w-[70px] h-[45px] w-[45px] ml-4 bg-white rounded items-center">
                            <img src="../images/shop.png" class="p-1" alt="">
                        </div>
                    </td>
                    <!-- <td><img src="../images/card warteg.png" class="lg:w-[70px] h-[45px] w-[45px] ml-4" alt="Cari Warung"></td> -->
                    <td>
                        <img src="" alt="">
                        <div class="lg:w-[70px] h-[45px] w-[45px] ml-4 bg-white rounded items-center">
                            <img src="../images/candies.png" class="p-1" alt="">
                        </div>
                    </td>
                    <td>
                        <div class="lg:w-[70px] h-[45px] w-[45px] ml-4 bg-white rounded items-center">
                            <img src="../images/laundry.png" class="p-1" alt="">
                        </div>
                    </td>
                    <td>
                        <div class="lg:w-[70px] h-[45px] w-[45px] ml-4 bg-white rounded items-center">
                            <img class="p-1" src="../images/apartment.png" alt="kos">
                        </div>
                    </td>
                </tr>
                <tr celpadding="3">
                    <td><h3 class="isian lg:text-xl text-center "  style="font-size: 13px;">Cari Warteg</h3></td>
                    <td><h3 class="isian lg:text-xl text-center "  style="font-size: 13px;">Cari Jajanan</h3></td>
                    <td><h3 class="isian lg:text-xl text-center "  style="font-size: 13px;">Cari Laundry</h3></td>
                    <td><h3 class="isian lg:text-xl text-center "  style="font-size: 13px;">Cari Kos</h3></td>
                </tr>
            </table>
        </div>

        <!-- card baru -->
        <section id="Card-Warteg" class="w-[345px] h-[300px] mt-10 p-2   rounded-lg shadow-lg" style="background-color: #FEFCE7;">
            <div class="tilte-1 w-[330px] h-[50px] p-4 justify-between flex">
                <h3 class="text-xs mr-2">Rekomendasi <strong>Warteg</strong> terdekatmu!</h3>
                <a href="#detail-warteg" class="text-xs lg:text-lg" style="font-size: 9px;">Lihat semua ></a>
            </div>

            <div class="main-card-warteg w-[330px] h-[110px] p-2  flex">
                <img src="../images/kharisma-ujang.jpeg" alt="kharisma" class="w-[150px] h-[90px] mr-2">
                <div class="explanation-warteg">
                    <a href="#ibu-madura-berkah" class="text-xs font-semibold">Warung Ibu Madura Berkah</a>
                    <h6 class="opacity-35 text-xs font-semibold mt-[-5px]" style="font-size: 8px;">Jalan Haji Raya 24, Surabaya, Jawa Timur</h6>
                    <br>
                    <div class="flex justify-between">
                        <div class="flex">
                            <svg class="w-[15px] h-[18px] mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>clock-time-eight-outline</title><path d="M12 20C16.4 20 20 16.4 20 12S16.4 4 12 4 4 7.6 4 12 7.6 20 12 20M12 2C17.5 2 22 6.5 22 12S17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2M12.5 12.8L7.7 15.6L7 14.2L11 11.9V7H12.5V12.8Z" /></svg>
                            <p class="text-xs font-semibold" style="font-size: 11px;">Buka 24 Jam</p>
                        </div>
                        <svg class="w-[20px] h-[20px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>heart-outline</title><path d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" /></svg>
                    </div>
                    <img src="../images/assets-rating5-removebg-preview.png" class="w-[45px] mt-[-15px]" alt="ratings">
                </div>
            </div>

            <div class="main-card-warteg w-[330px] h-[110px] p-2  flex">
                <img src="../images/kharisma-bahari.jpeg" alt="kharisma" class="w-[150px] h-[90px] mr-2">
                <div class="explanation-warteg">
                    <a href="#ibu-madura-berkah" class="text-xs font-semibold">Warung Ibu Madura Berkah</a>
                    <h6 class="opacity-35 text-xs font-semibold mt-[-5px]" style="font-size: 8px;">Jalan Haji Raya 24, Surabaya, Jawa Timur</h6>
                    <br>
                    <div class="flex justify-between">
                        <div class="flex">
                            <svg class="w-[15px] h-[18px] mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>clock-time-eight-outline</title><path d="M12 20C16.4 20 20 16.4 20 12S16.4 4 12 4 4 7.6 4 12 7.6 20 12 20M12 2C17.5 2 22 6.5 22 12S17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2M12.5 12.8L7.7 15.6L7 14.2L11 11.9V7H12.5V12.8Z" /></svg>
                            <p class="text-xs font-semibold" style="font-size: 11px;">Buka 24 Jam</p>
                        </div>
                        <svg class="w-[20px] h-[20px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>heart-outline</title><path d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" /></svg>
                    </div>
                    <img src="../images/assets-rating5-removebg-preview.png" class="w-[45px] mt-[-15px]" alt="ratings">
                </div>
            </div>
        </section>

        <!-- card baru -->
        <section id="Card-Warteg" class="w-[345px] h-[300px] mt-10 p-2   rounded-lg shadow-lg" style="background-color: #FEFCE7;">
            <div class="tilte-1 w-[330px] h-[50px] p-4 justify-between flex">
                <h3 class="text-xs mr-2">Rekomendasi <strong>Warteg</strong> terdekatmu!</h3>
                <a href="#detail-warteg" class="text-xs lg:text-lg" style="font-size: 9px;">Lihat semua ></a>
            </div>

            <div class="main-card-warteg w-[330px] h-[110px] p-2  flex">
                <img src="../images/kharisma-ujang.jpeg" alt="kharisma" class="w-[150px] h-[90px] mr-2">
                <div class="explanation-warteg">
                    <a href="#ibu-madura-berkah" class="text-xs font-semibold">Warung Ibu Madura Berkah</a>
                    <h6 class="opacity-35 text-xs font-semibold mt-[-5px]" style="font-size: 8px;">Jalan Haji Raya 24, Surabaya, Jawa Timur</h6>
                    <br>
                    <div class="flex justify-between">
                        <div class="flex">
                            <svg class="w-[15px] h-[18px] mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>clock-time-eight-outline</title><path d="M12 20C16.4 20 20 16.4 20 12S16.4 4 12 4 4 7.6 4 12 7.6 20 12 20M12 2C17.5 2 22 6.5 22 12S17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2M12.5 12.8L7.7 15.6L7 14.2L11 11.9V7H12.5V12.8Z" /></svg>
                            <p class="text-xs font-semibold" style="font-size: 11px;">Buka 24 Jam</p>
                        </div>
                        <svg class="w-[20px] h-[20px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>heart-outline</title><path d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" /></svg>
                    </div>
                    <img src="../images/assets-rating5-removebg-preview.png" class="w-[45px] mt-[-15px]" alt="ratings">
                </div>
            </div>

            <div class="main-card-warteg w-[330px] h-[110px] p-2  flex">
                <img src="../images/kharisma-bahari.jpeg" alt="kharisma" class="w-[150px] h-[90px] mr-2">
                <div class="explanation-warteg">
                    <a href="#ibu-madura-berkah" class="text-xs font-semibold">Warung Ibu Madura Berkah</a>
                    <h6 class="opacity-35 text-xs font-semibold mt-[-5px]" style="font-size: 8px;">Jalan Haji Raya 24, Surabaya, Jawa Timur</h6>
                    <br>
                    <div class="flex justify-between">
                        <div class="flex">
                            <svg class="w-[15px] h-[18px] mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>clock-time-eight-outline</title><path d="M12 20C16.4 20 20 16.4 20 12S16.4 4 12 4 4 7.6 4 12 7.6 20 12 20M12 2C17.5 2 22 6.5 22 12S17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2M12.5 12.8L7.7 15.6L7 14.2L11 11.9V7H12.5V12.8Z" /></svg>
                            <p class="text-xs font-semibold" style="font-size: 11px;">Buka 24 Jam</p>
                        </div>
                        <svg class="w-[20px] h-[20px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>heart-outline</title><path d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" /></svg>
                    </div>
                    <img src="../images/assets-rating5-removebg-preview.png" class="w-[45px] mt-[-15px]" alt="ratings">
                </div>
            </div>
        </section>
        
        <!-- card baru -->
        <section id="Card-Warteg" class="w-[345px] h-[300px] mt-10 p-2   rounded-lg shadow-lg" style="background-color: #FEFCE7;">
            <div class="tilte-1 w-[330px] h-[50px] p-4 justify-between flex">
                <h3 class="text-xs mr-2">Rekomendasi <strong>Warteg</strong> terdekatmu!</h3>
                <a href="#detail-warteg" class="text-xs lg:text-lg" style="font-size: 9px;">Lihat semua ></a>
            </div>

            <div class="main-card-warteg w-[330px] h-[110px] p-2  flex">
                <img src="../images/kharisma-ujang.jpeg" alt="kharisma" class="w-[150px] h-[90px] mr-2">
                <div class="explanation-warteg">
                    <a href="#ibu-madura-berkah" class="text-xs font-semibold">Warung Ibu Madura Berkah</a>
                    <h6 class="opacity-35 text-xs font-semibold mt-[-5px]" style="font-size: 8px;">Jalan Haji Raya 24, Surabaya, Jawa Timur</h6>
                    <br>
                    <div class="flex justify-between">
                        <div class="flex">
                            <svg class="w-[15px] h-[18px] mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>clock-time-eight-outline</title><path d="M12 20C16.4 20 20 16.4 20 12S16.4 4 12 4 4 7.6 4 12 7.6 20 12 20M12 2C17.5 2 22 6.5 22 12S17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2M12.5 12.8L7.7 15.6L7 14.2L11 11.9V7H12.5V12.8Z" /></svg>
                            <p class="text-xs font-semibold" style="font-size: 11px;">Buka 24 Jam</p>
                        </div>
                        <svg class="w-[20px] h-[20px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>heart-outline</title><path d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" /></svg>
                    </div>
                    <img src="../images/assets-rating5-removebg-preview.png" class="w-[45px] mt-[-15px]" alt="ratings">
                </div>
            </div>

            <div class="main-card-warteg w-[330px] h-[110px] p-2  flex">
                <img src="../images/kharisma-bahari.jpeg" alt="kharisma" class="w-[150px] h-[90px] mr-2">
                <div class="explanation-warteg">
                    <a href="#ibu-madura-berkah" class="text-xs font-semibold">Warung Ibu Madura Berkah</a>
                    <h6 class="opacity-35 text-xs font-semibold mt-[-5px]" style="font-size: 8px;">Jalan Haji Raya 24, Surabaya, Jawa Timur</h6>
                    <br>
                    <div class="flex justify-between">
                        <div class="flex">
                            <svg class="w-[15px] h-[18px] mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>clock-time-eight-outline</title><path d="M12 20C16.4 20 20 16.4 20 12S16.4 4 12 4 4 7.6 4 12 7.6 20 12 20M12 2C17.5 2 22 6.5 22 12S17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2M12.5 12.8L7.7 15.6L7 14.2L11 11.9V7H12.5V12.8Z" /></svg>
                            <p class="text-xs font-semibold" style="font-size: 11px;">Buka 24 Jam</p>
                        </div>
                        <svg class="w-[20px] h-[20px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>heart-outline</title><path d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" /></svg>
                    </div>
                    <img src="../images/assets-rating5-removebg-preview.png" class="w-[45px] mt-[-15px]" alt="ratings">
                </div>
            </div>
        </section>

        <!-- card baru -->
        <section id="Card-Warteg" class="w-[345px] h-[300px] mt-10 p-2   rounded-lg shadow-lg" style="background-color: #FEFCE7;">
            <div class="tilte-1 w-[330px] h-[50px] p-4 justify-between flex">
                <h3 class="text-xs mr-2">Rekomendasi <strong>Warteg</strong> terdekatmu!</h3>
                <a href="#detail-warteg" class="text-xs lg:text-lg" style="font-size: 9px;">Lihat semua ></a>
            </div>

            <div class="main-card-warteg w-[330px] h-[110px] p-2  flex">
                <img src="../images/kharisma-ujang.jpeg" alt="kharisma" class="w-[150px] h-[90px] mr-2">
                <div class="explanation-warteg">
                    <a href="#ibu-madura-berkah" class="text-xs font-semibold">Warung Ibu Madura Berkah</a>
                    <h6 class="opacity-35 text-xs font-semibold mt-[-5px]" style="font-size: 8px;">Jalan Haji Raya 24, Surabaya, Jawa Timur</h6>
                    <br>
                    <div class="flex justify-between">
                        <div class="flex">
                            <svg class="w-[15px] h-[18px] mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>clock-time-eight-outline</title><path d="M12 20C16.4 20 20 16.4 20 12S16.4 4 12 4 4 7.6 4 12 7.6 20 12 20M12 2C17.5 2 22 6.5 22 12S17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2M12.5 12.8L7.7 15.6L7 14.2L11 11.9V7H12.5V12.8Z" /></svg>
                            <p class="text-xs font-semibold" style="font-size: 11px;">Buka 24 Jam</p>
                        </div>
                        <svg class="w-[20px] h-[20px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>heart-outline</title><path d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" /></svg>
                    </div>
                    <img src="../images/assets-rating5-removebg-preview.png" class="w-[45px] mt-[-15px]" alt="ratings">
                </div>
            </div>

            <div class="main-card-warteg w-[330px] h-[110px] p-2  flex">
                <img src="../images/kharisma-bahari.jpeg" alt="kharisma" class="w-[150px] h-[90px] mr-2">
                <div class="explanation-warteg">
                    <a href="#ibu-madura-berkah" class="text-xs font-semibold">Warung Ibu Madura Berkah</a>
                    <h6 class="opacity-35 text-xs font-semibold mt-[-5px]" style="font-size: 8px;">Jalan Haji Raya 24, Surabaya, Jawa Timur</h6>
                    <br>
                    <div class="flex justify-between">
                        <div class="flex">
                            <svg class="w-[15px] h-[18px] mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>clock-time-eight-outline</title><path d="M12 20C16.4 20 20 16.4 20 12S16.4 4 12 4 4 7.6 4 12 7.6 20 12 20M12 2C17.5 2 22 6.5 22 12S17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2M12.5 12.8L7.7 15.6L7 14.2L11 11.9V7H12.5V12.8Z" /></svg>
                            <p class="text-xs font-semibold" style="font-size: 11px;">Buka 24 Jam</p>
                        </div>
                        <svg class="w-[20px] h-[20px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>heart-outline</title><path d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" /></svg>
                    </div>
                    <img src="../images/assets-rating5-removebg-preview.png" class="w-[45px] mt-[-15px]" alt="ratings">
                </div>
            </div>
        </section>

        <section id="card-promo" class="w-[345px] h-[300px] mt-10 p-2 text-white rounded-lg shadow-lg">
            <div class="tilte-1 w-[330px] h-[50px] p-4 justify-between flex">
                <h3 class="text-sm mr-2 text-white">Promo!</h3>
                <a href="#detail-warteg" class="text-xs lg:text-lg" style="font-size: 9px;">Lihat semua ></a>
            </div>
            <div class="text-white text-xs mt-[-10px] p-4">
                <h4 class="text-xs" style="font-size: 11px;">Dapatkan promo menarik dengan mengikuti tutorial yang di sediakan !</h4>
            </div>
            
            <div class="h-[150px] max-w-[350px] p-3 gap-2 flex overflow-x-auto">
                <div style="background-color: #FEFCE7;" class="min-w-[122px] mx-2 rounded-xl h-[125px]">

                </div>

                <div style="background-color: #FEFCE7;" class="min-w-[122px] mr-2 rounded-xl h-[125px]">
                    
                </div>

                <div style="background-color: #FEFCE7;" class="min-w-[122px] mr-2  rounded-xl h-[125px]">
                    
                </div>

                <div style="background-color: #FEFCE7;" class="min-w-[122px] mr-2  rounded-xl h-[125px]">
                    
                </div>
                
                <div style="background-color: #FEFCE7;" class="min-w-[122px] mr-2  rounded-xl h-[125px]">
                    
                </div>
            </div>
            
        </section>
    </main>
    <footer class="sticky bottom-10 ">
        <div class=" mx-auto p-2 rounded-xl w-[250px] h-[50px] mb-4  bg-white flex  shadow-lg justify-between">
            <svg onclick="location.href='marbot.html'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>chat-outline</title><path d="M12,3C6.5,3 2,6.58 2,11C2.05,13.15 3.06,15.17 4.75,16.5C4.75,17.1 4.33,18.67 2,21C4.37,20.89 6.64,20 8.47,18.5C9.61,18.83 10.81,19 12,19C17.5,19 22,15.42 22,11C22,6.58 17.5,3 12,3M12,17C7.58,17 4,14.31 4,11C4,7.69 7.58,5 12,5C16.42,5 20,7.69 20,11C20,14.31 16.42,17 12,17Z" /></svg>

            <svg onclick="location.href='index.html'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>home-circle-outline</title><path d="M12 20C7.6 20 4 16.4 4 12S7.6 4 12 4 20 7.6 20 12 16.4 20 12 20M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M11 14H13V17H16V12H18L12 7L6 12H8V17H11V14" /></svg>

            <svg onclick="location.href-'profile.html'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>account-circle-outline</title><path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M7.07,18.28C7.5,17.38 10.12,16.5 12,16.5C13.88,16.5 16.5,17.38 16.93,18.28C15.57,19.36 13.86,20 12,20C10.14,20 8.43,19.36 7.07,18.28M18.36,16.83C16.93,15.09 13.46,14.5 12,14.5C10.54,14.5 7.07,15.09 5.64,16.83C4.62,15.5 4,13.82 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,13.82 19.38,15.5 18.36,16.83M12,6C10.06,6 8.5,7.56 8.5,9.5C8.5,11.44 10.06,13 12,13C13.94,13 15.5,11.44 15.5,9.5C15.5,7.56 13.94,6 12,6M12,11A1.5,1.5 0 0,1 10.5,9.5A1.5,1.5 0 0,1 12,8A1.5,1.5 0 0,1 13.5,9.5A1.5,1.5 0 0,1 12,11Z" /></svg>
        </div>
    </footer>
</body>
</html>