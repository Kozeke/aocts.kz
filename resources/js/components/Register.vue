<template>
    <div class="main flex-row">
        <div @click="$router.push({ name: 'home' })" class="logo">DARIS</div>
        <div class="register">
            <div class="reg-top flex-row">
                <div class="header">Регистрация</div>
                <div class="step">Шаг</div>
                <div @click="firstPage = true" v-bind:class="{ 'current-step' : firstPage }" class="one">1</div>
                <div @click="firstPage = false" v-bind:class="{ 'current-step' : !firstPage }" class="two">2</div>
                <div class="reg-top-r flex-row">
                    <label>У Вас уже есть аккаунт?</label>
                    <span @click="$router.push({ name: 'login' })">Войти в систему</span>
                </div>
            </div>
            <div v-if="firstPage" class="top-sub-one">Пожалуйста заполните все необходимые данные,</div> 
            <div v-else class="top-sub-one">Добавьте ваши контактные данные и данные вашего менеджера</div>
            <div v-if="firstPage" class="top-sub-last">Мы ответственно подходим к работе с каждым клиентом.</div>
            <div v-else class="top-sub-last">чтобы закончить регистрацию.</div>
            <div v-if="firstPage" class="reg-form flex-col">
                <div class="flex-row">
                    <div class="input-form flex-col">
                        <label class="label">ФИО первого руководителя</label>
                        <input type="text" placeholder="Введите ФИО руководителя">
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">БИН</label>
                        <input type="text" placeholder="Введите 12 значный код">
                    </div>
                </div>
                <div class="flex-row">
                    <div class="input-form flex-col">
                        <label class="label">Пароль</label>
                        <input type="password" placeholder="Введите пароль">
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">Электронная почта</label>
                        <input type="text" placeholder="Введите email">
                    </div>
                </div>
                <div class="flex-row">
                    <div class="input-form flex-col">
                        <label class="label">Повторите пароль</label>
                        <input type="password" placeholder="Введите пароль еще раз">
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">Учредительные документы компании </label>
                        <input class="file-input" type="text" placeholder="+ Добавить PDF-файл" readonly>
                        <input class="file-hidden" type="file">
                    </div>
                </div>
                <div class="flex-row row-last">
                    <div class="input-form flex-col">
                        <span @click="firstPage = false" class="val">Продолжить регистрацию</span>
                    </div>
                    <div class="check-form flex-row">
                        <input type="checkbox">
                        <label class="label">Согласиться с условиями</label>
                    </div>
                </div>
            </div>
            <div v-else class="reg-form flex-col">
                <div class="flex-row">
                    <div class="input-form flex-col">
                        <label class="label">Адрес компании</label>
                        <input type="password" placeholder="Введите адрес компании">
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">ФИО менеджера компании</label>
                        <input type="password" placeholder="Введите ФИО менеджера">
                    </div>
                </div>
                <div class="flex-row">
                    <div class="input-form flex-col">
                        <label class="label">Ваш телефонный номер</label>
                        <input type="text" placeholder="Введите номер телефона">
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">Телефонный номер менеджера</label>
                        <input type="text" placeholder="Введите номер телефона менеджера">
                    </div>
                </div>
                <div class="flex-row">
                    <div class="input-form flex-col">
                        <label class="label">Электронная почта компании</label>
                        <input type="text" placeholder="Введите email для отправки документов">
                    </div>

                </div>
                <div class="flex-row row-last">
                    <div class="input-form flex-col">
                        <span @click="firstPage = true" class="val">Отправить на расмотрение</span>
                    </div>
                    <div class="text-form flex-col">
                        <label class="label">В течении нескольких дней мы проверим достоверность укаанных данных и напишем вам на электронную почту.</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            firstPage: true,
            user_doc: {
                file: '',
                url: ''
            }
        }
    }
}
</script>
<style lang="scss" scoped>
    .main{
        position: relative;
        width: 100%;
        background: #FFFFFF;
        height: 900px;
        background-image: linear-gradient( rgba(214, 230, 255, 0.4), rgba(214, 230, 255, 0.4) ), url('/images/register-layout.svg');
        background-repeat: no-repeat;
        background-position: left, top;
        .logo{
            cursor: pointer;
            position: absolute;
            left: calc(18%);
            width: 160px;
            height: 50px;
            top: 25px;
            background: #F6F6F8;   
            font-size: 16px;
            line-height: 50px;
            color: #06397D;
            font-weight: 500;         
        }
        .register{
            position: relative;
            top: 115px;
            width: 72%;
            margin: 0 auto;
            background: #FFFFFF;
            border-radius: 6px;
            height: 680px;
            padding:50px 60px;
            color: #06397D;
            .reg-top{
                border-bottom: 1px solid #4985FF;
                padding-bottom: 25px;
                .header{
                    font-weight: bold;
                    font-size: 34px;
                    line-height: 42px;
                }
                .step{
                    margin-left: 35px;
                    font-weight: 600;
                    font-size: 30px;
                    line-height: 46px;
                }
                .one{
                    cursor: pointer;
                    margin-left: 30px;
                    font-weight: bold;
                    font-size: 24px;
                    line-height: 46px;
                    color: #9F9F9F;
                    background: #F7F7F7;
                    height: 45px;
                    width: 45px;
                    border-radius: 50%;
                }
                .two{
                    cursor: pointer;
                    margin-left: 15px;
                    font-weight: bold;
                    font-size: 24px;
                    line-height: 46px;
                    color: #9F9F9F;
                    background: #F7F7F7;
                    height: 45px;
                    width: 45px;
                    border-radius: 50%;
                }
                .current-step{
                    color: #FFFFFF;
                    background: #4985FF;
                }
                .reg-top-r{
                    position: absolute;
                    right: 60px;
                    label{
                        line-height: 42px;
                        font-weight: 500;
                        font-size: 16px;
                        line-height: 44px;
                        color: #909090;
                    }
                    span{
                        cursor: pointer;
                        margin-left: 15px;
                        font-weight: 600;
                        font-size: 16px;
                        line-height: 46px;
                        color: #4985FF;
                    }
                }
            }
            .top-sub-one{
                margin-top: 30px;
            }
            .top-sub-one, .top-sub-last{
                text-align: left;
                font-weight: normal;
                font-size: 16px;
                line-height: 25px;
                color: #06397D;
            }
            .reg-form{
                .input-form{
                    position: relative;
                    width: 350px;
                    margin-right: 60px;
                    margin-top: 30px;
                    height: 86px;
                    .label{
                        text-align: left;
                        font-weight: 500;
                        font-size: 16px;
                        line-height: 20px;
                    }
                    input{
                        cursor: initial;
                        padding-left: 18px;
                        text-align: left;
                        margin-top: 8px;
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
                    ::placeholder{
                        font-weight: normal;
                        font-size: 14px;
                        line-height: 22px;
                        color: rgba(111, 111, 111, 0.25);
                    }
                    .val{
                        width: 350px;
                        cursor: pointer;
                        text-align: left;
                        margin-top: 8px;
                        height: 50px;
                        font-weight: bold;
                        font-size: 16px;
                        line-height: 48px;
                        text-align: center;
                        color: #FFFFFF;
                        background: #4985FF;
                        box-shadow: 0px 0px 10px rgba(111, 111, 111, 0.25);
                        border-radius: 6px;
                        box-sizing: border-box;
                    }
                }
                .check-form{
                    margin-top: 52px;
                    input{
                        cursor: pointer;
                        margin-left: 3px;
                        margin-top: 3px;
                        -ms-transform: scale(1.5); /* IE */
                        -moz-transform: scale(1.5); /* FF */
                        -webkit-transform: scale(1.5); /* Safari and Chrome */
                        -o-transform: scale(1.5); /* Opera */
                        transform: scale(1.5);
                        padding: 6px;
                    }
                    .label{
                        margin-left: 9px;
                        text-align: left;
                        font-weight: 500;
                        font-size: 16px;
                        line-height: 20px;
                    }
                }
                .text-form{
                    max-width: 520px;
                    margin-top: 40px;
                    .label{
                        text-align: left;
                        font-weight: 500;
                        font-size: 16px;
                        line-height: 20px;
                    }
                }
                .file-input::placeholder{
                    color: #4985FF;
                }
                .file-hidden{
                    opacity: 0;
                    top: 28px;
                    position: absolute;
                    width: 100%;
                    z-index: 99;
                }
            }
        }
    }
    @media only screen and (min-width: 1520px){
        .main .register{
            width: 64%;
        }
    }
</style>

