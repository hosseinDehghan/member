<form action="{{route("signup")}}" method="post">
    {{csrf_field()}}
    <div>
        <input type="text" name="name" placeholder="Enter Your Name">
        <p>
            @if(isset($errors))
                @if($errors->has("name"))
                    {{$errors->first("name")}}
                @endif
            @endif
        </p>
    </div>
    <div>
        <input type="email" name="email" placeholder="Enter Your Email">
        <p>
            @if(isset($errors))
                @if($errors->has("email"))
                    {{$errors->first("email")}}
                @endif
            @endif
        </p>
    </div>
    <div>
        <input type="password" name="password" placeholder="Enter Your password">
        <p>
            @if(isset($errors))
                @if($errors->has("password"))
                    {{$errors->first("password")}}
                @endif
            @endif
        </p>
    </div>
    <div>
        <input type="password" name="password_confirmation" placeholder="password_confirmation">
    </div>
    <br>
    <input type="submit" name="signup" value="sign up">
</form>