<template>
    <div class="main flex-col">
        <div @click="$router.push({ name: 'home' })" class="logo">DARIS</div>
        <div class="contact-modal">
            <div class="modal-body flex-col">
                <div class="head">Восстановление пароля</div>
                <div class="welcome">Здравствуйте, “ Название компании”</div>
                <div class="text-top">Чтобы обновить пароль для доступа в Личный кабинет, нажмите на кнопку
                    и укажите новый пароль. Обращаем ваше внимание, что данная смена пароля 
                    действительна в течение суток.
                </div>
                <div @click="$router.push({ name: 'reset-pwd' })" class="reset-pwd">Восстановить пароль </div>
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
</template>
<script>
export default {
    
}
</script>
<style lang="scss" scoped>
    .main{
        position: relative;
        width: 100%;
        background-image: linear-gradient( rgba(214, 230, 255, 0.3), rgba(214, 230, 255, 0.3) ), url('/images/login-layout.png');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        .logo{
            cursor: pointer;
            position: absolute;
            left: calc(20%);
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
        .contact-modal{
            z-index: 998;
            width: 100%;
            position: fixed;
            height: 100%;
            padding: 100px 20%;
            background: rgba(45, 76, 100, 0.7);
            .modal-body{
                position: relative;
                padding: 50px;
                border-radius: 12px;
                background: #FFFFFF;
                .head{
                    text-align: left;
                    font-weight: bold;
                    font-size: 34px;
                    line-height: 146.28%;
                    color: #2D4C64;
                }
                .welcome{
                    margin-top: 21px;
                    text-align: left;
                    font-weight: normal;
                    font-size: 16px;
                    line-height: 150%;
                    color: #2D4C64;
                }
                .text-top{
                    margin-top: 15px;
                    text-align: left;
                    font-weight: normal;
                    font-size: 14px;
                    line-height: 150%;
                    color: #2D4C64;
                }
                .reset-pwd{
                    cursor: pointer;
                    padding-top: 17px;
                    height: 55px;
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
                .text-bot{
                    margin-top: 40px;
                    text-align: left;
                    font-weight: normal;
                    font-size: 12px;
                    line-height: 150%;
                    color: #2D4C64;
                }
                .line{
                    margin-top: 20px;
                    margin-bottom: 20px;
                    border: 1px solid #4985FF;
                }
                .text-foot{
                    text-align: left;
                    font-weight: normal;
                    font-size: 12px;
                    line-height: 150%;
                    color: #2D4C64;
                }
            }
        }
    }
    @media screen and (max-width: 1020px) {
        .modal-body{
            padding: 40px !important;
            .head{
                font-size: 28px !important;
                line-height: 126.28% !important;
            }
            .reset-pwd{
                width: 280px !important;
            }
        }
    }
    @media screen and (max-width: 720px) {
        .logo{
            left: calc(12%) !important;    
        }
        .contact-modal{
            padding: 100px 12% !important;
        }
        .modal-body{
            .welcome{
                margin-top: 16px !important;
            }
            .text-top{
                margin-top: 12px !important;
            }
            .reset-pwd{
                width: 280px !important;
                margin-top: 25px !important;
            }
            .text-bot{
                margin-top: 25px !important;
            }
            .line{
                margin-top: 15px !important;
                margin-bottom: 15px !important;
            }
        }
    }
    @media screen and (max-width: 520px) {
        .logo{
            left: calc(6%) !important;    
        }
        .contact-modal{
            padding: 100px 6% !important;
        }
        .modal-body{
            padding: 30px !important;
            .head{
                font-size: 24px !important;
            }
            .welcome{
                font-size: 14px !important;
            }
            .text-top{
                font-size: 12px !important;
            }
            .reset-pwd{
                width: 200px !important;
                font-size: 14px !important;
            }
            .text-bot{
                line-height: 140% !important;
            }
            .text-foot{
                line-height: 140% !important;
            }
        }
    }
</style>


