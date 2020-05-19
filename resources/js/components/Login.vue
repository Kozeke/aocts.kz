<template>
    <div class="main flex-row">
        <div @click="$router.push({ name: 'home' })" class="logo">DARIS</div>
        <div class="login-left">
            <div class="login-text">
                <div class="head">С Возвращением!</div>
                <div class="input-form flex-col">
                    <label class="label">Электронная почта</label>
                    <input type="text" placeholder="Введите ваш электронный адрес">
                </div>
                <div class="input-form flex-col">
                    <label class="label">Пароль</label>
                    <input type="password" placeholder="Введите пароль">
                </div>
                <div class="check-form flex-row">
                    <input type="checkbox">
                    <label class="label">Сохранить пароль</label>
                </div>
                <div class="login-enter">Войти</div>
                <div class="login-last flex-row">
                    <label @click="$router.push({ name: 'register' })" class="left">Регистрация</label>
                    <label class="right">Вы забыли пароль?</label>
                </div>
            </div>
        </div>
        <div class="login-right">
            
        </div>
    </div>
</template>
<script>
export default {
    
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
                    font-size: 32px;
                    line-height: 146.28%;
                    margin-bottom: 10px;
                }
                .input-form{
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
                }
                .check-form{
                    margin-top: 30px;
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
            background-image: linear-gradient( rgba(214, 230, 255, 0.3), rgba(214, 230, 255, 0.3) ), url('/images/login-layout.png');
            background-repeat: no-repeat;
        }
    }
</style>

