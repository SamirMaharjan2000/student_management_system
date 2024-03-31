

    <div class="main">
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <table>
                    <tbody>
                        <tr>
                            <th>Profile Information</th>
                        </tr>
                        <tr>
                            <td>ID</td>
                            <td>:</td>
                            <td>{{$students['id']}}</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>{{$students['full_name']}}</td>
                        </tr>
                        <tr>
                            <td>E-Mail</td>
                            <td>:</td>
                            <td>{{$students['email']}}</td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td>{{$students['gender']}}</td>
                        </tr>
                        <tr>
                            <td>Number</td>
                            <td>:</td>
                            <td>{{$students['number']}}</td>
                        </tr>
                        <tr>
                            <td>Course</td>
                            <td>:</td>
                            <td>{{$students['course']}}</td>
                        </tr>
                        <tr>
                            <td>Father Name</td>
                            <td>:</td>
                            <td>{{$students['father_name']}}</td>
                        </tr>
                        <tr>
                            <td>Mother Name</td>
                            <td>:</td>
                            <td>{{$students['mother_name']}}</td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td>:</td>
                            <td>{{$students['dob']}}</td>
                        </tr>
                        <tr>
                            <td>Academic Qualification</td>
                            <td>:</td>
                            <td>{{$students['edu']}}</td>
                        </tr>
                        <tr>
                            <td>Permanent Address</td>
                            <td>:</td>
                            <td>{{$students['perm_address']}}</td>
                        </tr>
                        <tr>
                            <td>Current Address</td>
                            <td>:</td>
                            <td>{{$students['current_address']}}</td>
                        </tr>
                        <tr>
                            <td>Country</td>
                            <td>:</td>
                            <td>{{$students['country']}}</td>
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
                            location.replace("http://127.0.0.1:8000/student");
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