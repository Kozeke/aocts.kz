 <h1>Hello {{$user->name}}</h1>

<p>
    Пожалуйста нажмите кнопку восстановление пароля
<a href="{{url('reset_password/'.$user->email.'/'.$code)}}">Восстановление пароля</a>
</p>
