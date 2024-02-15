@extends('layouts.layout')

{{-- sidebar start --}}
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="index.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                                 {{-- tables navigation start --}}
                                 <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Tables
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                               
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="{{url('/projects')}}"> <i class="fas fa-project-diagram"></i>Projects</a>
                                        <a class="nav-link" href="{{url('/artists')}}"><i class="fas fa-paint-brush"></i></i>Artists</a>
                                        <a class="nav-link" href="{{url('/partners')}}"><i class="fas fa-handshake"></i>Partners</a>
                                    </nav>
                                </div>
                                  {{-- tables navigation end --}}
            
                                  {{-- archive navigation start --}}
            
                                  <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                    Archive
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="{{route('projects.archive')}}">Archive</a>
                                        <a class="nav-link" href="{{route('applications.index')}}">Applications</a>
                                    </nav>
                                </div>
                                  {{-- archive navigation end --}}
                
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="charts.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts
                    </a>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Start Bootstrap
            </div>
        </nav>
    </div>
    {{-- sidebar end--}} 


    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                
                <h1 class="mt-4">Tables</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Tables</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-body">
                        <a href="" class="btn btn-primary float-end" role="button"  data-bs-toggle="modal" data-bs-target="#add-modal" >Add</a>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        DataTable Example
                    </div>
                    
                    <div class="card-body">

                       

                        {{-- table header --}}

                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Project</th>
                                    <th>Action</th>
                                 
                                </tr>
                            </thead>

                        {{-- table body --}}    
                    
                    <tbody>
                        @foreach($partners as $partner)
                       
                        <tr>
                            
                            <td>{{$partner->id}}</td>
                            <td>{{$partner->name}}</td>
                            <td>{{$partner->description}}</td>
                            <td>
                                @foreach ($partner->art_projects as $project)
                                    {{$project->title}}
                                    <br>
                                @endforeach
                            </td>

                            <td><a  type="button" data-id="{{$partner->id}}" data-bs-toggle="modal" data-bs-target="#edit-modal-{{$partner->id}}" ><i class="fa fa-edit" ></i></a>
                                <a ><i class="fa fa-circle-info"></i></a>
                                <form action="{{route('partners.destroy',['partner' => $partner->id])}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"><i class="fa fa-trash"></i></button>
                                    
                                </form>
                                
                               
                            
                            </td>
                        </tr>
                       
                     @endforeach    
                           </tbody>
                        </table>
                    </div>
                </div>
            </div>
           

            {{-- Store  Modal --}}

            <div class="modal" id="add-modal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Modal title</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      
                        <form action="{{route('partners.store',['partner'=> $partner->id])}}" method="POST">

                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control"  type="text" placeholder="Enter your first name" name="name" />
                                        <label >Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control"  type="text" placeholder="Enter your last name" name="description" />
                                        <label>Description</label>
                                    </div>
                                </div>
                            </div>

                    
                           
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" value="Submit" >Save changes</button>
                    </div>
                </form>
                  </div>
                </div>
              </div>





                        {{-- Update  Modal --}}
              @foreach($partners as $partner)


            <div class="modal" id="edit-modal-{{$partner->id}}" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Edit</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      
                        <form action="{{route('partners.update',['partner'=> $partner->id])}}" method="POST">

                            @csrf
                            @method("PUT")
                    

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control"  type="text" placeholder="Enter your first name" name="name" value="{{$partner->name}}" />
                                        <label >Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control"  type="text" placeholder="Enter your last name" name="description" value="{{$partner->description}}" />
                                        <label >Description</label>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control"  type="text" placeholder="Enter your last name" name="password" value="{{$artist->password}}" />
                                    <label >Password</label>
                                </div>
                            </div> --}}
                           
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" value="Submit" >Save changes</button>
                        </div>
                    </form>
                      </div>
                    </div>
                  </div>

                  @endforeach
                  {{-- Modal end  --}}





        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2023</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
</body>
</html>