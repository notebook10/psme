<form id="frmLogin" name="frmLogin" method="post" action="login">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    Email: <input type="email" name="email" id="email"><br>
    Password: <input type="password" name="password" id="password"><br>
    <input type="submit" id="btnLogin" value="Login">
</form>
<ul class="errormessage">
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>