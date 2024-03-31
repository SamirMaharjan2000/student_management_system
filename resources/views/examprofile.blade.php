

<div class="main">
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <table>
                    <tbody>
                        <tr>
                            <th>Profile Information(Exam Registered Students)</th>
                        </tr>
                        <tr>
                            <td>ID</td>
                            <td>:</td>
                            <td>{{$exams['id']}}</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>{{$exams['full_name']}}</td>
                        </tr>
                        <tr>
                            <td>E-Mail</td>
                            <td>:</td>
                            <td>{{$exams['email']}}</td>
                        </tr>
                        <tr>
                            <td>Number</td>
                            <td>:</td>
                            <td>{{$exams['number']}}</td>
                        </tr>
                        <tr>
                            <td>Father Name</td>
                            <td>:</td>
                            <td>{{$exams['father_name']}}</td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td>:</td>
                            <td>{{$exams['dob']}}</td>
                        </tr>
                        <tr>
                            <td>Academic Qualification</td>
                            <td>:</td>
                            <td>{{$exams['edu']}}</td>
                        </tr>
                        <tr>
                            <td>Permanent Address</td>
                            <td>:</td>
                            <td>{{$exams['perm_address']}}</td>
                        </tr>
                        <tr>
                            <td>Current Address</td>
                            <td>:</td>
                            <td>{{$exams['current_address']}}</td>
                        </tr>
                        <tr>
                            <td>National ID</td>
                            <td>:</td>
                            <td>{{$exams['nid']}}</td>
                        </tr>
                        <tr>
                            <td>Passport Number</td>
                            <td>:</td>
                            <td>{{$exams['pass']}}</td>
                        </tr>
                        
                        
                    </tbody>
                </table>
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary" value="submit" onClick="back()">
                            Go Back
                        </button>
                    </div>
                    <script>  
                        function back(){  
                            location.replace("http://127.0.0.1:8000/registeredstud"); 
                        }   
                    </script>
                </div>
        </div>
    </div>
</div>
</div>
    <!-- End -->
</body>
</html>