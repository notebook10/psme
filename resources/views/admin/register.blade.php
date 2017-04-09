{{ Theme::asset()->usePath()->add('scripts-js', 'js/admin.js') }}
Register
<form name="frmRegister" id="frmRegister" action="register" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token()}}">
    Fname: <input type="text" name="fname" id="fname"><br>
    Lname: <input type="text" name="lname" id="lname"><br>
    Email: <input type="email" name="email" id="email"><br>
    Contact:<input type="text" name="contact" id="contact"><br>
    Address:<textarea name="address" id="address"></textarea><br>
    Password: <input type="password" name="password" id="password"><br>
    Confirm Password: <input type="password" name="cpassword" id="cpassword"><br>
    <input type="submit" value="Register">
    @if(Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>
    @endif
</form>