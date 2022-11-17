@include('CustomerHeader')
<link href="{{ asset('style/EditProfile.css') }}" rel="stylesheet" href="">

<div class = "formulir">
    <div class="form">
        <div class="sign">
            <h1>Update Profile</h1>
        </div>

        <div class="formAsli">
            <form method="POST" action="/SignUp">
                @csrf
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="(5-20 letters)" id="name" name="name" value="{{old('name')}}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                    <br>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                    <br>
                </div>

                <div class="form-group">
                    <label for="phonenumber">Phone Number:</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder = "(10-13 letters)"id="phone" name="phone" value="{{old('phone')}}">
                    @error('phone')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                    <br>
                </div>

                <div class="form-group">
                    <label for="Address"><Address></Address>Address:</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" placeholder="(min 5 letters)" id="address" name="address" value="{{old('address')}}">
                    @error('address')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                    <br>
                </div>

                <div class="form-group">
                    <button style="cursor:pointer" type="submit" class="btnSubmit">Save Update</button>
                </div>

            </form>

        </div>

        <div class="back">
            <h6><a href="ViewProfile"  class="text-decoration-none text-danger">Back</a></h6>
        </div>

    </div>


</div>

