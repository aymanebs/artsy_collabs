<!DOCTYPE html>
<html lang="en">
@vite('resources/css/app.css')

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
    
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link rel="stylesheet" href="../../css/app.css">   
    
</head>

<body>
<div class="flex h-screen overflow-y-hidden">
    @section('sidebar')
            <!-- sidebar start -->
            <div class="w-60 bg-blue p-4 text-white">
            {{--logo start--}}
            <div class="  flex  justify-center  gap-3">
            <div class="relative h-10 w-10 rounded-full overflow-hidden">
                <img src="{{ asset('imgs/logo.svg') }}" class="absolute top-0 left-0 w-full h-full object-cover" />
            </div> 
            <div>
            <h2 class="text-2xl py-2 mb-5 font-bold text-center text-pri-500 ">Artsy</h2>
            </div>
            </div>
             {{--logo end--}}

            <div class="flex flex-col justify-between" style="height: calc(100vh - 100px);">
                <div>
                    <div class="flex items-center gap-2 p-2 hover:bg-pri-500 cursor-pointer rounded-md">
                        <i class="ri-dashboard-line text-lg"></i>
                        <p>Dashboard</p>
                    </div>
                    <div class="flex items-center gap-2 p-2 hover:bg-pri-500 cursor-pointer rounded-md">
                        <i class="ri-pie-chart-line text-lg"></i>
                        <p>Projects</p>
                    </div>
                    <div class="flex items-center gap-2 p-2 bg-pri-500 cursor-pointer rounded-md">
                        <i class="ri-file-list-2-line text-lg"></i>
                        <p>Task list</p>
                    </div>
                    <div class="flex items-center gap-2 p-2 hover:bg-pri-500 cursor-pointer rounded-md">
                        <i class="ri-expand-left-right-line text-lg"></i>
                        <p>Services</p>
                    </div>
                    <div class="flex items-center gap-2 p-2 hover:bg-pri-500 cursor-pointer rounded-md">
                        <i class="ri-notification-3-line text-lg"></i>
                        <p>Notifications</p>
                    </div>
                    <div class="flex items-center gap-2 p-2 hover:bg-pri-500 cursor-pointer rounded-md">
                        <i class="ri-question-line text-lg"></i>
                        <p>Help</p>
                    </div>
                </div>
                <div>
                    <div class="flex items-center gap-2 p-2 hover:bg-pri-500 cursor-pointer rounded-md">
                        <i class="ri-settings-3-line"></i>
                        <p>Settings</p>
                    </div>
                    <div class="flex items-center gap-2 p-2 hover:bg-pri-500 cursor-pointer rounded-md">
                        <i class="ri-logout-box-line text-lg"></i>
                        <p>Logout</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- sidebar end -->
        @section('navbar')
                <!-- navbar start -->

                <div class="w-full bg-sec-200">
            <div class="p-4 flex items-center justify-between bg-white">
                <div class="  flex items-center gap-3">
                    <div class="relative h-10 w-10 rounded-full overflow-hidden">
                        <img src="./avatar.png" class="absolute top-0 left-0 w-full h-full object-cover" />
                    </div>
                    <div>
                        <h3 class="text-xl text-sec-400">Balachandran sinthujan</h3>
                        <p class="text-sec-300 -mt-2">Projecct manager</p>
                    </div>
                </div>
                <div class="flex items-center gap-5">
                    <div class="bg-sec-100 py-2 px-5 rounded-md mr-24"><input class="bg-inherit outline-none w-96" placeholder="Search anything.." /> </div>
                    <div class="bg-sec-100 h-10 w-10 rounded-full flex items-center justify-center"><i class="ri-notification-line"></i></div>
                    <div class="bg-sec-100 h-10 w-10 rounded-full flex items-center justify-center"><i class="ri-message-2-line"></i></i></div>
                </div>
            </div>

            <!-- navbar end -->
    @yield('content')
</body>

</html>

