@extends("layouts.master")

@section("title",  __('locale.registration') )

@section("content")

<body>
    <div class="home  bg-light  -">
        <div class="container pt-5 pt-5">
            <h1 class="basecolor text-center py-3   px-3 ">{{ __('locale.registration_form') }}</h1>
            <form method="POST" id="form" enctype="multipart/form-data" name="my-form"
                  action="{{ route('registerations.store') }}">
                @csrf
                <div class="row d-flex flex-wrap justify-content-center ">
                    <div class="col-md-6 mt-3 ">
                        <div class="form-floating mb-3">
                            <input type="text" required class="form-control" id="fname_id" name="full_name"
                                   data-bs-toggle="tooltip" data-bs-placement="bottom" title="Example: John doe">
                            <label for="fname_id">{{ __('locale.full_name') }}</label>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3 ">
                        <div class="form-floating mb-3">
                            <input required type="text" class="form-control" id="uname_id" name="username"
                                   data-bs-toggle="tooltip" data-bs-placement="bottom" title="Must Be Unique">
                            <label for="uname_id">{{ __('locale.username') }}</label>
                            <div id="uname_response"></div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3 ">
                        <div class="form-floating mb-3">
                            <input required class="form-control" id="email_id" name="email" data-bs-toggle="tooltip"
                                   data-bs-placement="bottom" title="Must Contain @ , .com">
                            <label for="email_id">{{ __('locale.email') }}</label>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3 ">
                        <div class="form-floating mb-3">
                            <input type="password" required class="form-control" id="password_id" name="password"
                                   data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                   title="Must contain : <ul><li>Eight characters or more</li><li>Number & Special char</li><li>Upper/lower case chars</li></ul>"/>
                            <label for="password_id">{{ __('locale.password') }}</label>
                        </div>
                    </div>


                    <div class="col-md-6 mt-3 ">
                        <div class="form-floating mb-3">
                            <input type="password" required class="form-control" id="password2_id" name="repassword"
                                   data-bs-toggle="tooltip" data-bs-placement="bottom"
                                   title="Must Match previous password">
                            <label for="password2_id">{{ __('locale.confirm_password') }}</label>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3 ">
                        <div class="form-floating mb-3">
                            <input type="text" required class="form-control" id="phone" name="phone"
                                   data-bs-toggle="tooltip"
                                   data-bs-placement="bottom" title="Only accept Egyptian Numbers without +20">
                            <label for="phone">{{ __('locale.phone_number') }}</label>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3 ">
                        <div class="form-floating mb-3">
                            <input type="text" required class="form-control" id="address_id" name="address"
                                   data-bs-toggle="tooltip" data-bs-placement="bottom" title="Example : 29 cairo st">
                            <label for="address_id">{{ __('locale.address') }}</label>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3 ">

                        <div class="form-floating mb-3">
                            <input type="text" required class="form-control" id="bd_id" name="birthdate"
                                   data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                   title="Valid date between : <br> 1900-2024">
                            <label for="bd_id">{{ __('locale.birthdate') }}</label>
                        </div>
                    </div>


                    <div class="input-group my-3">
                        <input type="file" required class="form-control" name="user_image" accept="image/*" id="img_id"
                               data-bs-toggle="tooltip" data-bs-placement="bottom"
                               title="Only Image Extensions Available">
                    </div>

                </div>
                <div class="text-center">
                    <button class="mb-3" type="submit" id="submitBtn">{{ __('locale.submit') }}</button>
                </div>
            </form>
        </div>
    </div>
</body>


@endsection
