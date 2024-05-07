{{-- index.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    @include('header')
    <div class="home  bg-light  -">
        <div class="container pt-5 pt-5">
            <h1 class="basecolor text-center py-3   px-3 ">Registration Form</h1>
            <form method="POST"  id="form" enctype="multipart/form-data" name="my-form" action="{{ route('registerations.store') }}">
            @csrf
                    <div class="row d-flex flex-wrap justify-content-center ">
                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                                <input type="text" required class="form-control" id="fname_id" name="full_name"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Example: John doe">
                                <label for="fname_id">Full Name</label>
                            </div>
                        </div>

                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                                <input required type="text" class="form-control" id="uname_id" name="username"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Must Be Unique">
                                <label for="uname_id">username</label>
                                <div id="uname_response"></div>
                            </div>
                        </div>

                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                                <input required class="form-control" id="email_id" name="email" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Must Contain @ , .com">
                                <label for="email_id">Email</label>
                            </div>
                        </div>

                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                                <input type="password" required class="form-control" id="password_id" name="password"
                                    data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                    title="Must contain : <ul><li>Eight characters or more</li><li>Number & Special char</li><li>Upper/lower case chars</li></ul>" />
                                <label for="password_id">Password</label>
                            </div>
                        </div>


                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                                <input type="password" required  class="form-control" id="password2_id" name="repassword"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="Must Match previous password">
                                <label for="password2_id">Confirm Password</label>
                            </div>
                        </div>

                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                                <input type="text"  required class="form-control" id="phone" name="phone" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Only accept Egyptian Numbers without +20">
                                <label for="phone">Phone Number</label>
                            </div>
                        </div>

                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                                <input type="text" required class="form-control" id="address_id" name="address"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Example : 29 cairo st">
                                <label for="address_id">Address</label>
                            </div>
                        </div>

                        <div class="col-md-6 mt-3 ">

                            <div class="form-floating mb-3">
                                <input type="text" required class="form-control" id="bd_id" name="birthdate"
                                    data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                    title="Valid date between : <br> 1900-2024">
                                <label for="bd_id">birthdate</label>
                            </div>
                        </div>
                    

                        <div class="input-group my-3">
                            <input type="file" required class="form-control" name="user_image" accept="image/*" id="img_id"
                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="Only Image Extensions Available">
                        </div>

                    </div>
                    <div class="text-center">
                    <button class="mb-3" type="submit" id="submitBtn" >Submit</button>
                    </div>
                  
                </form>
        </div>
      @include('footer')
    
  
    
</body>