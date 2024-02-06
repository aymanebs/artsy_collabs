<!DOCTYPE html>
<html lang="en">
@vite('resources/css/app.css')
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link rel="stylesheet" href="../../css/app.css"> -->
    
</head>

<body>
    <div class="flex h-screen overflow-y-hidden">
        <!-- sidebar start -->
        <div class="w-60 bg-blue p-4 text-white">
            <h2 class="text-2xl py-2 mb-5 font-bold text-center ">Project MGR</h2>
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

            <div class="grid grid-cols-1 p-4 gap-4 items-start">
                <div class="col-span-2 bg-white rounded-md overflow-hidden">
                    <div>
                        <div class="flex items-center justify-between p-4 ">
                            <div>
                                <h2 class="text-3xl font-semibold text-sec-400">
                                    Last tasks
                                </h2>
                                <p class="text-sec-300">
                                    <span class="font-semibold text-sec-400">124 total,</span> proceed to
                                    resolve them
                                </p>
                            </div>
                            <div class="flex items-center gap-10">
                                <div class="text-center">
                                    <h2 class="text-3xl font-semibold text-sec-400">45</h2>
                                    <p class="text-sec-300">Done</p>
                                </div>
                                <div class="text-center">
                                    <h2 class="text-3xl font-semibold text-sec-400">21</h2>
                                    <p class="text-sec-300">In progress</p>
                                </div>
                            </div>
                        </div>
                        <div class=" overflow-y-scroll px-4" style="height: calc(100vh - 200px);">

                        <!-- table start -->
                            <table class="w-full text-right">
                                <thead class="text-sec-400">
                                    <tr class="border-b">
                                        <th class="text-left">Name</th>
                                        <th>Admin</th>
                                        <th>Members</th>
                                        <th>Status</th>
                                        <th>Finish date</th>
                                    </tr>
                                </thead>
                                <tbody class="text-sec-300 ">
                                    <tr class="h-10 hover:bg-pri-500 hover:text-white">
                                        <td class="text-left ">State management </td>
                                        <td>
                                            Alan Das
                                            <i class="ri-message-2-line text-green"></i>
                                            </span>
                                        </td>
                                        <td>3</td>
                                        <td class="text-green">Done</td>
                                        <td>25/05/2023</td>
                                    </tr>
                                    <tr class="h-10 hover:bg-pri-500 hover:text-white">
                                        <td class="text-left">Products list page</td>
                                        <td>
                                            Sasikumar
                                            <i class="ri-message-2-line text-green"></i>
                                            </span>
                                        </td>
                                        <td>3</td>
                                        <td class="text-blue">In progress</td>
                                        <td>25/05/2023</td>
                                    </tr>
                                    <tr class="h-10 bg-pri-500 text-white">
                                        <td class="text-left">Protected routes</td>
                                        <td>
                                            John Smith
                                            <i class="ri-message-2-line text-green"></i>
                                            </span>
                                        </td>
                                        <td>2</td>
                                        <td>Todo</td>
                                        <td>29/05/2023</td>
                                    </tr>
                                    <tr class="h-10 hover:bg-pri-500 hover:text-white">
                                        <td class="text-left">Mapbox integration</td>
                                        <td>
                                            Karan sarma
                                            <i class="ri-message-2-line text-green"></i>
                                            </span>
                                        </td>
                                        <td>6</td>
                                        <td class="text-blue">In progress</td>
                                        <td>31/05/2023</td>
                                    </tr>
                                    <tr class="h-10 hover:bg-pri-500 hover:text-white">
                                        <td class="text-left">Single product integraton</td>
                                        <td>
                                            M.S.Yapa
                                            <i class="ri-message-2-line text-green"></i>
                                            </span>
                                        </td>
                                        <td>2</td>
                                        <td class="text-green">Done</td>
                                        <td>02/06/2023</td>
                                    </tr>
                                    <tr class="h-10 hover:bg-pri-500 hover:text-white">
                                        <td class="text-left">About us page design</td>
                                        <td>
                                            Mullat Rao
                                            <i class="ri-message-2-line text-green"></i>
                                            </span>
                                        </td>
                                        <td>3</td>
                                        <td class="text-blue">In progress</td>
                                        <td>04/06/2023</td>
                                    </tr>

                                    <tr class="h-10 hover:bg-pri-500 hover:text-white">
                                        <td class="text-left">Image optimization</td>
                                        <td>
                                            Kaleel Ahamed
                                            <i class="ri-message-2-line text-green"></i>
                                            </span>
                                        </td>
                                        <td>3</td>
                                        <td class="text-blue">In progress</td>
                                        <td>05/06/2023</td>
                                    </tr>
                                    <tr class="h-10 hover:bg-pri-500 hover:text-white">
                                        <td class="text-left">QA initial testing</td>
                                        <td>
                                            Mannen Kuban
                                            <i class="ri-message-2-line text-green"></i>
                                            </span>
                                        </td>
                                        <td>12</td>
                                        <td>Todo</td>
                                        <td>11/06/2023</td>
                                    </tr>
                                    <tr class="h-10 hover:bg-pri-500 hover:text-white">
                                        <td class="text-left">Address varification</td>
                                        <td>
                                            Kumst Ganapathy
                                            <i class="ri-message-2-line text-green"></i>
                                            </span>
                                        </td>
                                        <td>4</td>
                                        <td>Todo</td>
                                        <td>12/06/2023</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            <!-- table end -->
                        </div>
                    </div>
                </div>



                
            </div>
        </div>
    </div>
</body>

</html>