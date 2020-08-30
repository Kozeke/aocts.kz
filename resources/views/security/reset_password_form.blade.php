<div id="main-prev" class="main flex-col">
    <a href="/" class="logo">DARIS</a>
    <div class="contact-modal">
        <div class="modal-body flex-col">
            <div class="head">Восстановление пароля</div>
            <div class="welcome">Здравствуйте, “ Название компании”</div>
            <div class="text-top">Чтобы обновить пароль для доступа в Личный кабинет, нажмите на кнопку
                и укажите новый пароль. Обращаем ваше внимание, что данная смена пароля 
                действительна в течение суток.
            </div>
            <div onclick="document.getElementById('main-prev').style.display = 'none';document.getElementById('main-next').style.display = 'flex'" class="reset-pwd">Восстановить пароль </div>
            <div class="text-bot">Если вы не запрашивали смену пароля, просто проигнорируйте данное сообщение или
                обратитесь в службу поддержки, если у Вас есть вопросы.
            </div>
            <div class="line"></div>
            <div class="text-foot">Если у вас не работает кнопка “Восстановить пароль”, скопируйте данную ссылку
                и откройте в браузере: ссылка ссылка ссылка
            </div>
        </div>
    </div>
</div>
<div id="main-next" class="main-next flex-row">
    <a href="/" class="logo">DARIS</a>
    <form action="{{ url('/reset_password/'.$user->email.'/'.$code)}}" method="post" class="login-left">
        {{ csrf_field() }}
        <div class="login-text">
            <div class="head">Изменение пароля</div>
            <div class="sub-head">Задайте новый пароль для вашего аккаунта.</div>
            <div class="input-form flex-col">
                <label class="label">Пароль</label>
                <input name="password" type="password" placeholder="Введите пароль">
                <!-- <div class="password" id="err-password">
                    <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                    </svg>
                </div> -->
            </div>
            <div class="input-form flex-col">
                <label class="label">Повторите пароль</label>
                <input name="password_confirmation" type="password" placeholder="Введите пароль еще раз">
                <!-- <div class="err" id="err-password_confirmation">
                    <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                    </svg>
                </div> -->
            </div>
            <button type="submit" class="login-enter">Изменить пароль </button>
            <div class="login-last flex-row">
                <a href="/register" class="left">Регистрация</a>
                <a href="/login" class="right">Авторизация</a>
            </div>
        </div>
    </form>
    <div class="login-right">

    </div>
</div>
<style>
#main-next {
    display: none;
}
*{
    font-family: Montserrat;
    font-style: normal;
    text-align: center;
    cursor: default;
    margin: 0;
}

.flex-row{
    display: flex;
    flex-direction: row;
}
.flex-col{
    display: flex;
    flex-direction: column;
}
.main {
    margin: 0;
	position: relative;
	width: 100%;
	background-image: linear-gradient(rgba(214, 230, 255, 0.3), rgba(214, 230, 255, 0.3)), url("/images/login-layout.png");
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
}

.main .logo {
	cursor: pointer;
	position: absolute;
	left: calc(20%);
    text-align: center;
    text-decoration: none;
	width: 160px;
	height: 50px;
	top: 25px;
	background: #F6F6F8;
	font-size: 16px;
	line-height: 50px;
	color: #06397D;
	font-weight: 500;
	z-index: 99;
}

.main .contact-modal {
	z-index: 998;
	width: 60%;
	position: fixed;
	height: 100%;
	padding: 100px 20%;
	background: rgba(45, 76, 100, 0.7);
}

.main .contact-modal .modal-body {
	position: relative;
	padding: 50px;
	border-radius: 12px;
	background: #FFFFFF;
}

.main .contact-modal .modal-body .head {
	text-align: left;
	font-weight: bold;
	font-size: 34px;
	line-height: 146.28%;
	color: #2D4C64;
}

.main .contact-modal .modal-body .welcome {
	margin-top: 21px;
	text-align: left;
	font-weight: normal;
	font-size: 16px;
	line-height: 150%;
	color: #2D4C64;
}

.main .contact-modal .modal-body .text-top {
	margin-top: 15px;
	text-align: left;
	font-weight: normal;
	font-size: 14px;
	line-height: 150%;
	color: #2D4C64;
}

.main .contact-modal .modal-body .reset-pwd {
	cursor: pointer;
	padding-top: 17px;
	height: 38px;
	width: 350px;
	margin-top: 40px;
	background: #4985FF;
	box-shadow: 0px 0px 10px rgba(111, 111, 111, 0.25);
	border-radius: 6px;
	font-weight: bold;
	font-size: 16px;
	line-height: 20px;
	text-align: center;
	color: #FFFFFF;
}

.main .contact-modal .modal-body .text-bot {
	margin-top: 40px;
	text-align: left;
	font-weight: normal;
	font-size: 12px;
	line-height: 150%;
	color: #2D4C64;
}

.main .contact-modal .modal-body .line {
	margin-top: 20px;
	margin-bottom: 20px;
	border: 1px solid #4985FF;
}

.main .contact-modal .modal-body .text-foot {
	text-align: left;
	font-weight: normal;
	font-size: 12px;
	line-height: 150%;
	color: #2D4C64;
}

@media screen and (max-width: 1020px) {
	.modal-body {
		padding: 40px !important;
	}

	.modal-body .head {
		font-size: 28px !important;
		line-height: 126.28% !important;
	}

	.modal-body .reset-pwd {
		width: 280px !important;
	}
}

@media screen and (max-width: 720px) {
	.logo {
		left: calc(12%) !important;
	}

	.contact-modal {
		padding: 100px 12% !important;
	}

	.modal-body .welcome {
		margin-top: 16px !important;
	}

	.modal-body .text-top {
		margin-top: 12px !important;
	}

	.modal-body .reset-pwd {
		width: 280px !important;
		margin-top: 25px !important;
	}

	.modal-body .text-bot {
		margin-top: 25px !important;
	}

	.modal-body .line {
		margin-top: 15px !important;
		margin-bottom: 15px !important;
	}
}

@media screen and (max-width: 520px) {
	.logo {
		left: calc(6%) !important;
	}

	.contact-modal {
		padding: 100px 6% !important;
	}

	.modal-body {
		padding: 30px !important;
	}

	.modal-body .head {
		font-size: 24px !important;
	}

	.modal-body .welcome {
		font-size: 14px !important;
	}

	.modal-body .text-top {
		font-size: 12px !important;
	}

	.modal-body .reset-pwd {
		width: 200px !important;
		font-size: 14px !important;
	}

	.modal-body .text-bot {
		line-height: 140% !important;
	}

	.modal-body .text-foot {
		line-height: 140% !important;
	}
}
.main-next {
	position: relative;
	width: 100%;
	background: #FFFFFF;
	height: 900px;
}

.main-next .logo {
	cursor: pointer;
    position: absolute;
    text-align: center;
    text-decoration: none;
	left: calc(19%);
	width: 160px;
	height: 50px;
	top: 25px;
	background: #F6F6F8;
	font-size: 16px;
	line-height: 50px;
	color: #06397D;
	font-weight: 500;
	z-index: 99;
}

.main-next .login-left {
	position: relative;
	width: 48%;
}

.main-next .login-left .login-text {
	width: 320px;
	position: relative;
	top: 200px;
	left: 40%;
	color: #06397D;
}

.main-next .login-left .login-text .head {
	text-align: left;
	font-weight: bold;
	font-size: 30px;
	line-height: 146.28%;
	margin-bottom: 10px;
}

.main-next .login-left .login-text .sub-head {
	font-weight: normal;
	font-size: 18px;
	line-height: 170%;
	text-align: left;
	color: #06397D;
}

.main-next .login-left .login-text .input-form {
	position: relative;
	margin-top: 30px;
	height: 86px;
}

.main-next .login-left .login-text .input-form .label {
	text-align: left;
	font-weight: 500;
	font-size: 16px;
	line-height: 20px;
}

.main-next .login-left .login-text .input-form input {
	cursor: initial;
	padding-left: 18px;
	text-align: left;
	margin-top: 16px;
	height: 50px;
	font-weight: normal;
	font-size: 14px;
	line-height: 22px;
	color: #000000;
	background: #FFFFFF;
	border: 1px solid #E6EAF3;
	box-sizing: border-box;
	border-radius: 6px;
}

.main-next .login-left .login-text .input-form .error {
	border: 1px solid #E4002F !important;
	box-shadow: 0px 0px 10px rgba(228, 0, 47, 0.2) !important;
}

.main-next .login-left .login-text .input-form .err {
	visibility: hidden;
	position: absolute;
	top: 50px;
	right: 18px;
	width: 20px;
	height: 20px;
	border-radius: 50%;
	background: #FFFFFF;
	border: 1px solid #E4002F;
	box-sizing: border-box;
}

.main-next .login-left .login-text .input-form .err svg {
	margin-top: -8px;
}

.main-next .login-left .login-text .input-form ::placeholder {
	font-weight: normal;
	font-size: 14px;
	line-height: 22px;
	color: rgba(111, 111, 111, 0.25);
}

.main-next .login-left .login-text .login-enter {
	cursor: pointer;
	/* padding-top: 17px; */
	height: 55px;
	margin-top: 40px;
	background: #4985FF;
	box-shadow: 0px 0px 10px rgba(111, 111, 111, 0.25);
    border-radius: 6px;
    border: none;
    width: 100%;
	font-weight: bold;
	font-size: 16px;
	line-height: 20px;
	text-align: center;
	color: #FFFFFF;
}

.main-next .login-left .login-text .login-last {
	text-align: left;
	position: relative;
	margin-top: 30px;
	font-weight: 600;
	font-size: 16px;
	line-height: 20px;
}    

.main-next .login-left .login-text .login-last a {
    color: #4985FF;
    text-decoration: none;

}
.main-next .login-left .login-text .login-last .left, .main-next .login-left .login-text .login-last .right {
    cursor: pointer;
}

.main-next .login-left .login-text .login-last .right {
    margin-left: 40px;
}

.main-next .login-right {
	position: relative;
	width: 52%;
	background-image: linear-gradient(rgba(214, 230, 255, 0.3), rgba(214, 230, 255, 0.3)), url("/images/reset-pwd.png");
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
}

@media screen and (max-width: 1420px) {
	.login-left {
		width: 58% !important;
	}

	.login-left .login-text {
		left: 33% !important;
	}

	.login-right {
		width: 42% !important;
	}
}

@media screen and (max-width: 1020px) {
	.logo {
		left: calc(50% - 160px) !important;
	}

	.login-left {
		width: 100% !important;
		margin: 0 auto;
	}

	.login-left .login-text {
		margin: 0 auto;
		left: auto !important;
	}

	.login-left .login-text .head {
		font-size: 28px !important;
	}

	.login-left .login-text .sub-head {
		font-size: 16px !important;
	}

	.login-left .login-text .input-form .label {
		font-size: 15px !important;
	}

	.login-left .login-text .input-form input {
		font-size: 14px !important;
	}

	.login-left .login-text .input-form ::placeholder {
		font-size: 14px !important;
	}

	.login-left .login-text .check-form .label {
		font-size: 15px !important;
	}

	.login-left .login-text .login-enter {
		font-size: 15px !important;
	}

	.login-left .login-text .login-last {
		font-size: 15px !important;
	}

	.login-right {
		width: 0 !important;
	}
}

@media screen and (max-width: 520px) {
	.logo {
		left: calc(50% - 130px) !important;
	}

	.login-left {
		width: 100% !important;
		margin: 0 auto;
	}

	.login-left .login-text {
		top: 140px !important;
		left: auto !important;
		width: 260px !important;
	}

	.login-left .login-text .head {
		font-size: 24px !important;
	}

	.login-left .login-text .sub-head {
		font-size: 14px !important;
	}

	.login-left .login-text .input-form {
		margin-top: 20px !important;
	}

	.login-left .login-text .input-form .label {
		font-size: 14px !important;
	}

	.login-left .login-text .input-form input {
		font-size: 12px !important;
	}

	.login-left .login-text .input-form ::placeholder {
		font-size: 12px !important;
	}

	.login-left .login-text .check-form {
		margin-top: 20px !important;
	}

	.login-left .login-text .check-form .label {
		font-size: 12px !important;
	}

	.login-left .login-text .login-enter {
		margin-top: 30px !important;
		font-size: 12px !important;
	}

	.login-left .login-text .login-last {
		font-size: 12px !important;
	}
}
</style>
