@extends('layouts.layout')
        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7 pt-5"><img class="img-fluid rounded mb-4 mb-lg-0" src="{{asset('imgs/artsy.webp')}}" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Artsy Collabs</h1>
                    <p>Une plateforme web dédiée à la gestion de collaborations artistiques. Cette plateforme vise à faciliter la création, la promotion et la diffusion de projets artistiques en connectant des artistes et des partenaires potentiels</p>
                    <a class="btn btn-primary" href="#!">Call to Action!</a>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p></div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                @foreach($projects as $project)
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        @if($project->hasMedia('images'))
                        <img src="{{$project->getFirstMedia('images')->getUrl()}}" class="card-img-top img-fluid" alt="{{$project->title}}">
                        @endif
                        <div class="card-body">
                            <h2 class="card-title">{{$project->title}}</h2>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="{{route('projects.show',['project'=>$project->id])}}">More Info</a></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>