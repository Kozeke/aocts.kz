<template>
    <div class="main flex-row">
        <div @click="$router.push({ name: 'home' })" class="logo">DARIS</div>
        <div class="login-left">
            <div class="login-text">
                <div class="head">Изменение пароля</div>
                <div class="sub-head">Задайте новый пароль для вашего аккаунта.</div>
                <div class="input-form flex-col">
                    <label class="label">Пароль</label>
                    <input v-bind:class="{ 'error' : errors.password }" v-on:keyup="validateForm($event)" v-model="password" type="text" id="password" placeholder="Введите пароль">
                    <div class="password" id="err-password">
                        <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                        </svg>
                    </div>
                </div>
                <div class="input-form flex-col">
                    <label class="label">Повторите пароль</label>
                    <input v-bind:class="{ 'error' : errors.password }" v-on:keyup="validateForm($event)" v-model="password_confirmation" type="password_confirmation" id="password" placeholder="Введите пароль еще раз">
                    <div class="err" id="err-password_confirmation">
                        <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                        </svg>
                    </div>
                </div>
                <div @click="changePwd()" class="login-enter">Изменить пароль </div>
                <div class="login-last flex-row">
                    <label @click="$router.push({ name: 'register' })" class="left">Регистрация</label>
                    <label @click="$router.push({ name: 'login' })" class="right">Авторизация</label>
                </div>
            </div>
        </div>
        <div class="login-right">

        </div>
    </div>
</template>
<script>
import axios from 'axios'

export default {
    data(){
        return{
            password_confirmation: '',
            password: '',
            errors: ''
        }
    },
    methods: {
        validateForm(e){
            const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(e.target.id === 'password'){
                if( !pattern.test(String(e.target.value).toLowerCase()) ){
                    document.getElementById('err-password').style.display = 'flex'
                    e.srcElement.classList.add('error')
                } else {
                    document.getElementById('err-password').style.display = 'none'
                    e.srcElement.classList.remove('error')
                }
            }
            if(e.target.id === 'password_confirmation'){
                 if(String(e.target.value).length === 0 ){
                    document.getElementById('err-password_confirmation').style.display = 'flex'
                    e.srcElement.classList.add('error')
                } else {
                    document.getElementById('err-password_confirmation').style.display = 'none'
                    e.srcElement.classList.remove('error')
                }
            }
        },
        changePwd(){
            if(this.password === ''){
                document.getElementById('err-password').style.display = 'flex'
                document.getElementById('password').classList.add('error')
            }
            if(this.password_confirmation === '' || this.password_confirmation !== this.password ){
                document.getElementById('err-password_confirmation').style.display = 'flex'
                document.getElementById('password_confirmation').classList.add('error')
            }
            if(document.getElementsByClassName('error').length !== 0){
                alert('Заполните все поля правильно.')
                return 
            }
            
            var data = {
                password: this.password,
                password_confirmation: this.password_confirmation,
                code: this.$route.query.code //code="val"
            }

            axios.post('/api/reset_password', data)
                .then(res => {
                    alert('Пароль успешно изменен.')
                    this.$router.push({ name: 'login' })
                })
                .catch(err => {
                    this.errors = Object.assign({}, err.response.data.error)
                    console.log(err)
            })
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
        .logo{
            cursor: pointer;
            position: absolute;
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
        .login-left{
            position: relative;
            width: 48%;
            .login-text{
                width: 320px;
                position: relative;
                top: 200px;
                left: 40%;
                color: #06397D;
                .head{
                    text-align: left;
                    font-weight: bold;
                    font-size: 30px;
                    line-height: 146.28%;
                    margin-bottom: 10px;
                }
                .sub-head{
                    font-weight: normal;
                    font-size: 18px;
                    line-height: 170%;
                    text-align: left;
                    color: #06397D;
                }
                .input-form{
                    position: relative;
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
                    .error{
                        border: 1px solid #E4002F !important;
                        box-shadow: 0px 0px 10px rgba(228, 0, 47, 0.2) !important;
                    }
                    .err{
                        display: none;
                        position: absolute;
                        top: 50px;
                        right: 18px;
                        width: 20px;
                        height: 20px;
                        border-radius: 50%;

                        background: #FFFFFF;
                        border: 1px solid #E4002F;
                        box-sizing: border-box;
                        svg{
                            margin-top: 2px;
                            margin-left: 7px
                        }
                    }
                    ::placeholder{
                        font-weight: normal;
                        font-size: 14px;
                        line-height: 22px;
                        color: rgba(111, 111, 111, 0.25);

                    }
                }
                .login-enter{
                    cursor: pointer;
                    padding-top: 17px;
                    height: 55px;
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
                .login-last{
                    text-align: left;
                    position: relative;
                    margin-top: 30px;
                    font-weight: 600;
                    font-size: 16px;
                    line-height: 20px;
                    /* identical to box height */
                    color: #4985FF;
                    .left, .right{
                        cursor: pointer;
                    }
                    .right{
                        margin-left: 40px;
                    }
                }
            }
        }
        .login-right{
            position: relative;
            width: 52%;
            background-image: linear-gradient( rgba(214, 230, 255, 0.3), rgba(214, 230, 255, 0.3) ), url('/images/reset-pwd.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
    }
    @media screen and (max-width: 1420px) {
        .login-left{
            width: 58% !important;
            .login-text{
                left: 33% !important;
            }
        }
        .login-right{
            width: 42% !important;
        }
    }
    @media screen and (max-width: 1020px) {
        .logo{
            left: calc(50% - 160px) !important;
        }
        .login-left{
            width: 100% !important;
            margin: 0 auto;
            .login-text{
                margin: 0 auto;
                left: auto !important;
                .head{
                    font-size: 28px !important;
                }
                .sub-head{
                    font-size: 16px !important;
                }
                .input-form{
                    .label{
                        font-size: 15px !important;
                    }
                    input{
                        font-size: 14px !important;
                    }
                    ::placeholder{
                        font-size: 14px !important;
                    }
                }
                .check-form{
                    .label{
                        font-size: 15px !important;
                    }
                }
                .login-enter{
                    font-size: 15px !important;
                }
                .login-last{
                    font-size: 15px !important;
                }
            }
        }
        .login-right{
            width: 0 !important;
        }
    }
     @media screen and (max-width: 520px) {
         .logo{
            left: calc(50% - 130px) !important;
        }
        .login-left{
            width: 100% !important;
            margin: 0 auto;
            .login-text{
                top: 140px !important;
                left: auto !important;
                width: 260px !important;
                .head{
                    font-size: 24px !important;
                }
                .sub-head{
                    font-size: 14px !important;
                }
                .input-form{
                    margin-top: 20px !important;
                    .label{
                        font-size: 14px !important;
                    }
                    input{
                        font-size: 12px !important;
                    }
                    ::placeholder{
                        font-size: 12px !important;
                    }
                }
                .check-form{
                    margin-top: 20px !important;
                    .label{
                        font-size: 12px !important;
                    }
                }
                .login-enter{
                    margin-top: 30px !important;
                    font-size: 12px !important;
                }
                .login-last{
                    font-size: 12px !important;
                }
            }
        }
    }
</style>

