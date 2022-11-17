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
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" placeholder="(5-20 letters)" id="password" name="password" required>
                    @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>

                    @enderror
                    <br>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" placeholder="(5-20 letters)" id="password" name="password" required>
                    @error('password')
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
