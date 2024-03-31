<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://kit.fontawesome.com/e577c3d19d.js" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="assets/js/exam.js"></script>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/exam.css" />
    <title>Sayuri International Education Ltd. Pvt.</title>
</head>

<body>
<div class="d-flex" id="wrapper">
    
    
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- /#sidebar-wrapper -->

        <!-- Drop Down Menu -->
    <div id="page-content-wrapper">
            
        @include('layouts.menu')
        <!-- Drop Down menu end -->
        <!-- page content -->
            <!-- page content -->

        <!-- Registration -->
        <main class="my-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Student Registration Form</div>
                        <div class="card-body">
                            <form action="{{route('student')}}" method="post" id="myForm">
                            @csrf
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="full_name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="father_name" class="col-md-4 col-form-label text-md-right">Father's name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="father_name" class="form-control" name="father_name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="mother_name" class="col-md-4 col-form-label text-md-right">Mother's Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="mother_name" class="form-control" name="mother_name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="dob" class="col-md-4 col-form-label text-md-right">Date of birth</label>
                                    <div class="col-md-6 ">
                                        <input type="text" id="dob" class="form-control" name="dob">
                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="edu" class="col-md-4 col-form-label text-md-right">Academic Qualification</label>
                                    <div class="col-md-6">
                                        <input type="text" id="edu" class="form-control" name="edu">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>
                                    <div class="col-md-6">
                                        <select class="select" name="gender" required="required" id="gender" >
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Others">Rather not say</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="course" class="col-md-4 col-form-label text-md-right">Course</label>
                                    <div class="col-md-6">
                                        <select class="select" name="course" required="required" id="course" >
                                            <option value="N5">N5</option>
                                            <option value="N4">N4</option>
                                            <option value="N3">N3</option>
                                            <option value="N2">N2</option>
                                            <option value="N1">N1</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">Current Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="current_address" class="form-control" name="current_address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Permanent Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="perm_address" class="form-control" name="perm_address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="country" class="col-md-4 col-form-label text-md-right">Country</label>
                                    <div class="col-md-6">
                                        <input type="text" id="country" class="form-control" name="country">
                                    </div>
                                </div>
                              
                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="number" class="form-control" name="number">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Email Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email" class="form-control" name="email">
                                    </div>
                                </div>


                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" value="submit">
                                        Register
                                        </button>
                                        <button type="reset" class="btn btn-primary" value="reset" onClick="resetData">
                                        Reset
                                        </button>
                                        <script>  
                                        function resetData(){  
                                            document.getElementById('myForm').reset();
                                        }   
                                    </script>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>
        <!-- Registration Ends Here -->


</div>
</div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>



</body>
</html>
 
 
 
 
 
 
 
        <!-- /page content -->
