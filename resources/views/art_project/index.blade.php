
    @extends('layouts.layout')
        @section('title','Dashboard')
        @section('content')

        @section('sidebar')
        @parent
        @endsection

        @section('navbar')
        @parent
        @endsection

    {{--main--}}
     
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
                                        <th>id</th>
                                        <th>Title</th>
                                        <th>Budget</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>State</th>
                                        <th>Created_at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                
                                @foreach ($projects as $project)
                                    
                              
                                <tbody class="text-sec-300 ">
                                    <tr class="h-10 hover:bg-pri-500 hover:text-white">
                                        <td class="text-left ">{{$project->id}}</td>
                                        <td>
                                            {{$project->title}}
                                            <i class="ri-message-2-line text-green"></i>
                                            </span>
                                        </td>
                                        <td>   {{$project->budget}}</td>
                                        <td> class="text-green">{{$project->description}}</td>
                                        <td>{{$project->category}}</td>
                                        <td>{{$project->state}}</td>
                                        <td>{{$project->created_at}}</td>
                                        <td></td>
                                    </tr>      
                                </tbody>

                                @endforeach
                            </table>
                            <!-- table end -->
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>

    @endsection
