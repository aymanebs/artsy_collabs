@extends('layouts.layout')


    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container pt-5  ">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Create</h3></div>
                                <div class="card-body">


                                    <form action="{{url('projects/create')}}" method="POST">

                                        @csrf

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control"  type="text" placeholder="Enter your first name" name="title" />
                                                    <label >Title</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control"  type="text" placeholder="Enter your last name" name="budget" />
                                                    <label >Budget</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control"  type="text" placeholder="name@example.com" name="description" />
                                            <label >Description</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control"  type="text" placeholder="Create a password"  name="category"/>
                                                    <label >Category</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                {{-- <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control"  type="text" placeholder="Confirm password" name="state"/>
                                                    <label >state</label>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control"  type="text" placeholder="Confirm password" name="partner_id" />
                                                <label >partner_id</label>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <input class="btn btn-primary" type="submit" value="Submit">
                                        </div>
                                    </form>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
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
</body>
</html>