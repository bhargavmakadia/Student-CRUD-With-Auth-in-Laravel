<h1>Student Show</h1>
<table border='5'>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Photo</th>
        <th>Address</th>
        <th>Language</th>
        <th>Created</th>
        <th>Updated</th>
        <tr></tr>
        <td>{{$sdata->id}}</td>
        <td>{{$sdata->student_name}}</td>
        <td>{{$sdata->student_gender}}</td>
        <td>{{$sdata->student_mobile}}</td>
        <td>{{$sdata->student_email}}</td>
        <td><img src="{{asset('uploads/'.$sdata->student_photo)}}" width="200"></td>
        <td>{{$sdata->student_address}}</td>
        <td>{{$sdata->student_language}}</td>
        <td>{{$sdata->created_at}}</td>
        <td>{{$sdata->updated_at}}</td>
    </tr>
    </table>
    <br/>
    <a href="{{route('student.index')}}">Back</a> | <a href="{{route('home')}}">Home</a>
