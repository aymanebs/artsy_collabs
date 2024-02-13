@extends('layouts.layout')


<div class="container  ">
    <div class="row pt-5">
        <div class="col-lg-6 pt-5">
            <div  class="card" >
                <div class="card-inner">
                    <div class="carousel-image  ">
                        <img src="{{$project->getFirstMedia('images')->getUrl()}}" class="d-block w-100" alt="image-slider-1" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 pt-5">
            <h2 class="fw-bold">{{$project->title}}</h2>
            {{-- <p class="text-muted">Product Category</p> --}}
            <h3 class="my-4">Description</h3>
            <p class="mb-4">
                {{$project->description}}
            </p>
          
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>



