<template>
    <div class="main flex-col">
        <div class="nav-bar flex-row">
            <div @click="$router.push({ name: 'home' })" class="logo">DARIS</div>
            <div class="slogan">Слоган</div>
            <div class="sub-head">Мы с радостью готовы Вам помочь!</div>
            <div class="contact-us flex-row">
                <span>Связаться с нами</span>
                <div class="circle"></div>
            </div>
        </div>
        <div class="layout flex-row">
            <div class="layout-left">
                <div class="layout-text">
                    <div class="header">Онлайн договор</div>
                    <div class="header">в пару кликов</div>
                    <div class="sub">Компания Daris занимается заключением договоров, на оплату услуг передвижения и остановки грузов по всем железно дорожным путям Казахстана</div>
                    <div class="join flex-row">
                        <span>Присоединиться</span>
                        <div class="circle"></div>
                    </div>
                    <div class="login flex-row">
                        <span>У Вас уже есть аккаунт?</span>
                        <div @click="$router.push({ name: 'login' })" class="go-login">Войти в систему</div>
                    </div>
                </div>
            </div>
            <div class="layout-right">
                <img class="layout-img" src="/images/laptop.svg" alt="laptop">
                <!-- <img class="layout-img-in" src="/images/layout-train.svg" alt="laptop"> -->
            </div>
        </div>
        <div class="service">
            <div class="service-header">Наши услуги</div>
            <div class="service-sub">Lorem Ipsum - это текст-"рыба", часто используемый в</div>
            <div class="service-sub">Lorem Ipsum - это текст-"рыба",</div>
            <div class="service-list flex-row">
                <div class="service-single flex-col">
                    <div class="circle"></div>
                    <div class="head">Железнодорожные перевозки</div>
                    <div class="sub">Краткое описание на 2 строки или меньше Краткое описание на Краткое описание на 2 строки или меньше Краткое описание на Краткое описание на 2 строки или меньше Краткое описание на </div>
                    <div class="more">Узнать подробности</div>
                </div>
                <div class="service-single flex-col">
                    <div class="circle"></div>
                    <div class="head">Железнодорожные перевозки</div>
                    <div class="sub">Краткое описание на 2 строки или меньше Краткое описание на Краткое описание на 2 строки или меньше Краткое описание на Краткое описание на 2 строки или меньше Краткое описание на </div>
                    <div class="more">Узнать подробности</div>
                </div>
            </div>
        </div>
        <div class="description flex-col">
            <div class="description-one flex-row">
                <div class="desc-left">
                    <div class="head">Описние возможностей и удобство</div>
                    <div class="sub">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</div>
                    <div class="info">Передовая IT студия</div>
                </div>
                <div class="desc-right">
                    <img src="/images/description-one.svg" alt="">
                </div>
            </div>
             <div class="description-two flex-row">
                <div class="desc-left">
                    <img src="/images/description-two.svg" alt="">
                </div>
                <div class="desc-right">
                    <div class="head">Описние возможностей и удобство</div>
                    <div class="sub">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</div>
                    <div class="info">Передовая IT студия</div>
                </div>
            </div>
        </div>
        <div class="module">
            <div class="module-header">Модули в личном кабинете</div>
            <div class="module-sub">Lorem Ipsum - это текст-"рыба", часто используемый в</div>
            <div class="module-sub">Lorem Ipsum - это текст-"рыба",</div>
            <div class="module-list flex-row">
                <div class="module-single flex-col" v-for="i in 4" :key="i">
                    <div class="img"></div>
                    <div class="head">Контроль и статистика</div>
                    <div class="sub">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem</div>
                </div> 
            </div>
        </div>
        <div class="home-last">
            <div class="hl-header">Готовы принять решение?</div>
            <div class="hl-sub">Lorem Ipsum - это текст-"рыба", часто используемый в</div>
            <div class="hl-sub">Lorem Ipsum - это текст-"рыба",</div>
            <div class="start flex-row">
                <span>Начать сейчас</span>
                <div class="circle"></div>
            </div>
            <img src="/images/laptop.svg" alt="laptop">
        </div>
        <div class="footer">
            <div class="footer-body flex-row">
                <div class="info flex-col">
                    <label></label>
                    <span>Lorem Ipsum - это текст -"рыба", часто Lorem Ipsum - это текст -"рыба", часто</span>
                </div>
                <div class="menu flex-col" v-for="i in 4" :key="i">
                    <label>Основные</label>
                    <span>Главная</span>
                    <span>Наши проекты</span>
                    <span>Главная</span>
                    <span>Наши проекты</span>
                    <span>Наши</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style lang="scss" scoped>
    .nav-bar{
        position: relative;
        width: 100%;
        height: 100px;
        background: #FFFFFF;
        font-size: 16px;
        line-height: 50px;
        color: #06397D;
        font-weight: 500;
        .logo{
            cursor: pointer;
            position: absolute;
            left: 18%;
            width: 160px;
            height: 50px;
            top: 25px;
            background: #F6F6F8;            
        }
        .slogan{
            position: absolute;
            height: 50px;
            top: 25px;
            left: calc(18% + 140px);
            width: 160px;
        }
        .sub-head{
            position: absolute;
            height: 50px;
            top: 25px;
            right: calc(18% + 220px);
        }
        .contact-us{
            cursor: pointer;
            position: absolute;
            width: 200px;
            top: 30px;
            color: #4985FF;
            right: calc(18%);
            border: 1px solid #4985FF;
            box-sizing: border-box;
            height: 40px;
            border-radius: 6px;
            span{
                cursor: pointer;
                margin: -5px 6px 5px 10px;
            }
            .circle{
                cursor: pointer;
                margin-left: 6px;
                width: 16px;
                height: 16px;
                border-radius: 50%;
                background: #4985FF;
                margin-top: 12px;
            }
        }
    }
    .main{
        position: relative;
        width: 100%;
        .layout{
            position: relative;
            height: 720px;
            .layout-left{
                position: relative;
                width: 56%;
                background-image: linear-gradient( rgba(196, 196, 196, 0.4), rgba(196, 196, 196, 0.4) ), url('/images/layout.png');
                .layout-text{
                    width: 460px;
                    position: relative;
                    top: 160px;
                    left: 32%;
                    color: #06397D;
                    .header{
                        text-align: left;
                        font-weight: 800;
                        font-size: 42px;
                        line-height: 56px;
                    }
                    .sub{
                        margin-top: 30px;
                        text-align: left;
                        height: 77px;
                        font-weight: normal;
                        font-size: 16px;
                        line-height: 25px;
                    }
                    .join{
                        cursor: pointer;
                        width: 250px;
                        margin-top: 54px;
                        box-sizing: border-box;
                        height: 50px;
                        border-radius: 6px;
                        background: #4985FF;
                        box-shadow: 0px 0px 10px rgba(111, 111, 111, 0.25);
                        border-radius: 6px;
                        span{
                            color: #FFFFFF;
                            cursor: pointer;
                            margin: 14px 10px auto 30px;
                            font-weight: bold;
                            font-size: 16px;
                            line-height: 20px;
                        }
                        .circle{
                            cursor: pointer;
                            margin-left: 6px;
                            width: 20px;
                            height: 20px;
                            border-radius: 50%;
                            background: #FFFFFF;
                            margin-top: 14px;
                        }
                    }
                    .login{
                        text-align: left;
                        margin-top: 30px;
                        font-weight: 500;
                        font-size: 14px;
                        line-height: 17px;
                        .go-login{
                            cursor: pointer;
                            margin-left: 10px;
                            font-weight: 600;
                            text-decoration-line: underline;
                            color: #4985FF;
                        }
                    }
                }
            }
            .layout-right{
                .layout-img{
                    width: 720px;
                    position: absolute;
                    right: 60px;
                    top: 114px;
                }
                .layout-img-in{
                    width: 555px;
                    position: absolute;
                    right: 140px;
                    top: 138px;
                }
            }
        }
    }
    .service{
        position: relative;
        height: 700px;
        background: rgba(228, 233, 244, 0.2);
        .service-header{
            margin-top: 80px;
            font-weight: bold;
            font-size: 36px;
            line-height: 53px;
            color: #06397D;
            margin-bottom: 15px;
        }
        .service-sub{
            font-size: 16px;
            line-height: 25px;
            text-align: center;
            color: #999999;
        }
        .service-list{
            left: 15%;
            width: 70%;
            position: relative;
            margin-top: 45px;
            .service-single{
                position: relative;
                background: #FCFCFC;
                border: 1px solid #E6EAF3;
                box-sizing: border-box;
                border-radius: 10px;
                padding: 30px;
                height: 340px;
                div{
                    text-align: left;
                }
                .circle{
                    width: 30px;
                    height: 30px;
                    background: #4985FF;
                    border-radius: 50%;
                }
                .head{
                    margin-top: 25px;
                    font-weight: 600;
                    font-size: 18px;
                    line-height: 22px;
                    color: #06397D;
                }
                .sub{
                    margin-top: 10px;
                    font-weight: normal;
                    font-size: 14px;
                    line-height: 25px;
                    color: #06397D;
                }
                .more{
                    cursor: pointer;
                    position: absolute;
                    bottom: 30px;
                    left: 30px;
                    font-weight: 500;
                    font-size: 16px;
                    line-height: 20px;
                    text-decoration-line: underline;
                    color: #4985FF;
                }
            }
            .service-single:last-of-type{
                margin-left: 30px;
            }
        }
    }
    .description{
        position: relative;
        height: 1020px;
        background: rgba(214, 230, 255, 0.9);
        .description-one{
            position: relative;
            margin-top: 80px;
            left: 15%;
            width: 70%;
            .desc-left{
                width: 48%;
                color: #06397D;
                div{
                    text-align: left;
                }
                .head{
                    margin-top: 24px;
                    font-weight: bold;
                    font-size: 36px;
                    line-height: 53px;
                }
                .sub{
                    margin-top: 45px;
                    font-weight: normal;
                    font-size: 16px;
                    line-height: 25px;
                }
                .info{
                    margin-top: 30px;
                    font-weight: 500;
                    font-size: 16px;
                    line-height: 20px;
                }
            }
            .desc-right{
                margin-left: 6%;
                width: 46%;
                overflow: hidden;
                img{
                    object-fit: cover;
                    object-position: center;
                }
            }
        }
        .description-two{
            position: relative;
            margin-top: 80px;
            left: 15%;
            width: 70%;
            .desc-right{
                width: 48%;
                color: #06397D;
                div{
                    text-align: left;
                }
                .head{
                    margin-top: 24px;
                    font-weight: bold;
                    font-size: 36px;
                    line-height: 53px;
                }
                .sub{
                    margin-top: 45px;
                    font-weight: normal;
                    font-size: 16px;
                    line-height: 25px;
                }
                .info{
                    margin-top: 30px;
                    font-weight: 500;
                    font-size: 16px;
                    line-height: 20px;
                }
            }
            .desc-left{
                margin-right: 6%;
                width: 46%;
                overflow: hidden;
                img{
                    object-fit: cover;
                    object-position: center;
                }
            }
        }
    }
    .module{
        position: relative;
        height: 1200px;
        background: #FCFCFC;
        .module-header{
            margin-top: 80px;
            font-weight: bold;
            font-size: 36px;
            line-height: 53px;
            color: #323232;
            margin-bottom: 15px;
        }
        .module-sub{
            font-size: 16px;
            line-height: 25px;
            text-align: center;
            color: #999999;
        }
        .module-list{
            flex-wrap: wrap;
            position: relative;
            left: calc((100% - 820px) / 2);
            margin-top: 30px;
            width: 820px;
            .module-single{
                background: #FFFFFF;
                padding: 30px;
                margin: 15px;
                height: 430px;
                width: 380px;
                .img{
                    height: 220px;
                    width: 320px;
                    background: rgba(233, 233, 233, 0.4);
                }
                .head{
                    margin-top: 30px;
                    font-weight: 600;
                    font-size: 18px;
                    line-height: 22px;
                    color: #323232;
                }
                .sub{
                    margin-top: 15px;
                    font-weight: normal;
                    font-size: 16px;
                    line-height: 25px;
                    color: #999999;
                }
            }
        }
    }
    .home-last{
        position: relative;
        height: 700px;
        background: rgba(228, 233, 244, 0.2);
        overflow: hidden;
        .hl-header{
            margin-top: 80px;
            font-weight: bold;
            font-size: 36px;
            line-height: 53px;
            color: #06397D;
            margin-bottom: 15px;
        }
        .hl-sub{
            font-size: 16px;
            line-height: 25px;
            text-align: center;
            color: #999999;
        }
        .start{
            position: relative;
            left: calc(50% - 125px);
            cursor: pointer;
            width: 250px;
            margin-top: 60px;
            box-sizing: border-box;
            height: 50px;
            border-radius: 6px;
            background: #4985FF;
            box-shadow: 0px 0px 10px rgba(111, 111, 111, 0.25);
            border-radius: 6px;
            span{
                color: #FFFFFF;
                cursor: pointer;
                margin: 14px 10px auto 42px;
                font-weight: bold;
                font-size: 16px;
                line-height: 20px;
            }
            .circle{
                cursor: pointer;
                margin-left: 6px;
                width: 20px;
                height: 20px;
                border-radius: 50%;
                background: #FFFFFF;
                margin-top: 14px;
            }
        }
        img{
            
            margin-top: 100px;
        }
    }
    .footer{
        position: relative;
        height: 412px;
        background: #FFFFFF;
        padding-top: 60px;
        .footer-body{
            position: relative;
            width: 70%;
            left: 15%;
            .info{
                width: 24%;
                label{
                    width: 130px;
                    height: 60px;
                    background: #F6F6F8;
                }
                span{
                    text-align: left;
                    margin-top: 30px;
                    font-weight: normal;
                    font-size: 16px;
                    line-height: 25px;
                    color: #999999;
                }
            }
            .menu{
                width: 15%;
                margin: 0 2%;
                span, label{
                    text-align: left;
                }
                label{
                    font-weight: 600;
                    font-size: 18px;
                    line-height: 22px;
                    color: #000000;
                    margin-bottom: 30px;
                }
                span{
                    font-weight: 500;
                    font-size: 16px;
                    line-height: 20px;
                    color: #999999;
                    margin-bottom: 25px;
                }
            }
        }
    }
    @media only screen and (max-width: 1480px){
        .layout .layout-left .layout-text{
            max-width: 420px;
        }
    }
    @media only screen and (min-width: 1520px){
        .layout-right{
            .layout-img{
                min-width: 760px;
            }
            .layout-img-in{
                min-width: 585px;
                right: 150px;
            }
        }
    }
    @media only screen and (min-width: 1620px){
        .layout-right{
            .layout-img{
                min-width: 820px;
            }
            .layout-img-in{
                min-width: 645px;
            }
        }
    }
    @media only screen and (min-width: 1740px){
        .layout-right{
            .layout-img{
                min-width: 920px;
            }
            .layout-img-in{
                min-width: 845px;
            }
        }
    }
</style>
