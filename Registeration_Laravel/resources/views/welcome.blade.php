@extends("layouts.master")

@section("title",  __('locale.registration') )

@section("content")

<body>
    <div class="home  bg-light  -">
        <div class="container pt-5 pt-5">
            <h1 class="basecolor text-center py-3   px-3 ">{{ __('locale.registration_form') }}</h1>
            <form method="POST" id="form" enctype="multipart/form-data" name="my-form"
                  action="{{ route('registerations.store') }}" onsubmit="validateForm()">
                @csrf
                <div class="row d-flex flex-wrap justify-content-center ">
                    <div class="col-md-6 mt-3 ">
                        <div class="form-floating mb-3">
                            <input type="text" required class="form-control" id="fname_id" name="full_name" oninput="ValidateName()"
                                   data-bs-toggle="tooltip" data-bs-placement="bottom" title="Example: John doe">
                            <label for="fname_id">{{ __('locale.full_name') }}</label>
                            <p class="errors" id="nameerror"></p>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3 ">
                        <div class="form-floating mb-3">
                            <input required type="text" class="form-control" id="uname_id" name="username" oninput="ValidateUserName()"
                                   data-bs-toggle="tooltip" data-bs-placement="bottom" title="Must Be Unique">
                            <label for="uname_id">{{ __('locale.username') }}</label>
                            <p class="errors" id="usererror"></p>
                            <div id="uname_response"></div>

                        </div>
                    </div>

                    <div class="col-md-6 mt-3 ">
                        <div class="form-floating mb-3"> 
                            <input required class="form-control" id="email_id" name="email" data-bs-toggle="tooltip"  oninput="ValidateEmail()"
                                   data-bs-placement="bottom" title="Must Contain @ , .com">
                            <label for="email_id">{{ __('locale.email') }}</label>
                            <p class="errors" id="emailerror"></p>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3 ">
                        <div class="form-floating mb-3">
                            <input type="password" required class="form-control" id="password_id" name="password"
                                   data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                   title="Must contain : <ul><li>Eight characters or more</li><li>Number & Special char</li><li>Upper/lower case chars</li></ul> " oninput="ValidatePassword()" />
                            <label for="password_id">{{ __('locale.password') }}</label>
                            <p class="errors" id="passworderror"></p>
                        </div>
                    </div>


                    <div class="col-md-6 mt-3 ">
                        <div class="form-floating mb-3">
                            <input type="password" required class="form-control" id="password2_id" name="repassword"
                                   data-bs-toggle="tooltip" data-bs-placement="bottom"
                                   title="Must Match previous password" oninput="ConfirmPassword()">
                            <label for="password2_id">{{ __('locale.confirm_password') }}</label>
                            <p class="errors" id="confirmerror"></p>
                
                        </div>
                    </div>

                    <div class="col-md-6 mt-3 ">
                        <div class="form-floating mb-3">
                            <input type="text" required class="form-control" id="phone" name="phone"
                                   data-bs-toggle="tooltip"
                                   data-bs-placement="bottom" title="Only accept Egyptian Numbers without +20" oninput="ValidatePhone()" >
                                   <p class="errors" id="PhoneError"></p>
                            <label for="phone">{{ __('locale.phone_number') }}</label>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3 ">
                        <div class="form-floating mb-3">
                            <input type="text" required class="form-control" id="address_id" name="address"
                                   data-bs-toggle="tooltip" data-bs-placement="bottom" title="Example : 29 cairo st"  oninput="ValidateAddress()">
                            <label for="address_id">{{ __('locale.address') }}</label>
                            <p class="errors" id="AddressError"></p>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3 ">

                        <div class="form-floating mb-3">
                            <input type="text" required class="form-control" id="bd_id" name="birthdate" oninput="ValidateDate()"
                                   data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                   title="Valid date between : <br> 1900-2024">
                            <label for="bd_id">{{ __('locale.birthdate') }}</label>
                            <p class="errors" id="DateError"></p>
                        </div>
                    </div>

                <div class="col-md-6 mt-3">
                     <button type="button" id="getActorBirthdaysBtn" class="mb-3">Get Actors Born on Your Birthday</button>
                </div>
                <br><br>

                <div class="birthdays">
                    <div class="Bheader" style="background-color: aliceblue;">
                       <div>Actors Born at your birthday:</div>
                    </div>

                    <br>
                    <div class="Bbody">
                        <div id="names" style="display: flex; flex-wrap: nowrap; overflow-x: auto;">
                        </div>
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


                    <script src="{{ asset('main.js') }}"></script>
                    <script src="{{ asset('main2.js') }}"></script>
                </div>
            </form>
        </div>
    </div>
</body>


@endsection
