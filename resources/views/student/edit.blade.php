<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/dist/bootstrap-5.2.3/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Edit Student</title>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>Edit Student</h2>
                    <a href="{{ route('student_index') }}"  <button class="Btn">
      <svg class="svg" viewBox="0 0 512 512">
        <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path></svg>
    </button>All Students</a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi delectus, maxime molestiae quis vitae?</p>
                <form action="{{ url('update_student', $student->id) }}" method="post">                    @csrf

                    <!-- First Name -->
                    <div class="mb-3">
                        <label for="First Name" class="form-label" for="first_name">First Name</label>
                        <input type="text" value="{{ $student->first_name }}" class="form-control" id="first_name" name="first_name">                    </div>

                    <!-- Last Name -->
                    <div class="mb-3">
                        <label for="Last Name" class="form-label" for="last_name">Last Name</label>
                        <input type="text" value="{{ $student->last_name }}" class="form-control" id="last_name" name="last_name">                    </div>

                    <!-- Gender -->
                    <div class="mb-3">
                        <label for="Last Name" class="form-label">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="is_male" id="gender_male" value="1">
                            <label class="form-check-label" for="gender_male">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="is_male" id="gender_female" value="0">
                            <label class="form-check-label" for="gender_female">
                                Female
                            </label>
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="mb-3">
                        <button type="Submit" <button class="bookmarkBtn">
  <span class="IconContainer"> 
    <svg viewBox="0 0 384 512" height="0.9em" class="icon"><path d="M0 48V487.7C0 501.1 10.9 512 24.3 512c5 0 9.9-1.5 14-4.4L192 400 345.7 507.6c4.1 2.9 9 4.4 14 4.4c13.4 0 24.3-10.9 24.3-24.3V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48z"></path></svg>
  </span>
  <p class="text">Save</p>
</button></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
