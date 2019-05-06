<form action="{{route("signin")}}" method="post">
    {{csrf_field()}}
    <p>
        @if(session('error'))
            {{session('error')}}
        @endif
    </p>
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
    <br>
    <input type="submit" name="signin" value="sign in">
</form>