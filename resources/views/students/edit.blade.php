<!DOCTYPE html>
<html>
<head>
    <title>Edit Studentsjdl</title>
</head>
<body>
    <h1>Edit Studentsfd</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $student->name }}" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $student->email }}" required>
        <br>
        <label>Phone:</label>
        <input type="text" name="phone" value="{{ $student->phone }}" required>
        <br>
        <label>Department:</label>
        <input type="text" name="department" value="{{ $student->department }}" required>
        <br>
        <button type="submit">Update Student</button>
    </form>
</body>
</html>
