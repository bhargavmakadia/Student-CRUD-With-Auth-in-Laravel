<h1>Student Create</h1>

<form method="post" action="{{route('student.store')}}" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>Name :</td>
            <td><input type="text" name="student_name" required></td>
        </tr>
        <tr>
            <td>Gender :</td>
            <td><input type="radio" name="student_gender" value="Male" checked> Male
                <input type="radio" name="student_gender" value="Female"> Female</td>
        </tr>
        <tr>
            <td>Mobile :</td>
            <td><input type="number" name="student_mobile" required></td>
        </tr>
        <tr>
            <td>Email :</td>
            <td><input type="email" name="student_email" required></td>
        </tr>
        <tr>
            <td>Photo :</td>
            <td><input type="file" name="student_photo" required></td>
        </tr>
        <tr>
            <td>Address :</td>
            <td><input type="text" name="student_address" required></td>
        </tr>
        <tr>
            <td>
                Language :</td><td> <input type="checkbox" name="student_language[]" value="Gujarati">Gujarati
        <input type="checkbox" name="student_language[]" value="Hindi">Hindi
        <input type="checkbox" name="student_language[]" value="English">English</td>
            </td>
        </tr>
        <tr>
            <td>
    <input type="submit"/>
            </td>
        </tr>
    </table>
</form>