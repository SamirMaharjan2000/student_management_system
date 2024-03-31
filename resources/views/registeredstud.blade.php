<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://kit.fontawesome.com/e577c3d19d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Sayuri International Education Ltd. Pvt.</title>
</head>
<style>
    input{
        width:300px;
        height:30px;
    }
    form{
        width:400px;
        position:absolute;
        top:16%;
        left:76%;
    }
</style>  

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
            <div class="container-fluid px-4">
            <form action="" class="search">
                <div class="form-group">
                <input type="search" name="search" id="" placeholder="Name or Email"/>
                <button class="btn btn-primary">Search</button>
                </div>
                
            </form>

            <div class="row my-5">
                    <h3 class="fs-4 mb-3">Registered Students</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Exam</th>
                                    <th scope="col">National ID</th>
                                    <th scope="col">Passport number</th>
                                    <th scope="col">Operations</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($exams as $exam)
                                <tr>
                                    <th scope="row">{{$exam['id']}}</th>
                                    <td>{{$exam['full_name']}}</td>
                                    <td>{{$exam['exam']}}</td>
                                    <td>{{$exam['nid']}}</td>
                                    <td>{{$exam['pass']}}</td>
                                    <td>
                                        <a href="{{url('/examprofile/'.$exam['id'])}}" >View</a>  | 
                                        <a href="{{url('/editexaminfo/'.$exam['id'])}}" >Edit</a>  | 
                                        <a href="{{url('/deleteexaminfo/'.$exam['id'])}}" >Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                

            </div>
        </div>
    </div>
    <!-- Page content ends here -->


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