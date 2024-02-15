@extends('layouts.layout')


<div class="container " style="background-color:grey" >
    <div class="row p-5">
        <div class="col-lg-6 pt-5">
            <div  class="card" >

                <div class="card-title">
                    <h2 class="fw-bold p-3">{{$project->title}}</h2>
                </div>

                <div class="card-inner">
                    <div class="card-image  ">
                        <img src="{{$project->getFirstMedia('images')->getUrl()}}" class="d-block w-100" alt="image-slider-1" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 ">
            
            <h3 class="my-4 pt-5">Description</h3>
            <p class="mb-4">
                {{$project->description}}
            </p>
            <h3 class="my-4">Artists</h3>
            <p class="mb-4">
                @foreach ($project->users as $artist)
                {{$artist->name}}
                @endforeach
            </p>
            <h3 class="my-4">Partner</h3>
            <p class="mb-4">
                {{$project->partner->name}}
            </p>
            <h3 class="my-4">State</h3>
            <p class="mb-4">
                {{$project->state}}
            </p>
          
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>



