<template>
    <div class="main">
        <UserSide></UserSide>
        <div class="main-info flex-col">
            <UserNav></UserNav>
            <div class="containe flex-col">
                <div class="content flex-row">
                    <div class="last flex-col">
                        <div class="head">Недавние платежи</div>
                        <div class="go-all">Смотреть все</div>
                        <div class="item-list flex-col">
                            <div v-for="i in 4" :key="i" class="item flex-col">
                                <div class="name">№10155</div>
                                <div class="date">Июнь 7, 2020</div>
                                <div class="price">1323001.6 KZT</div>
                                <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.78413 5.49505L1.25827 9.79476C0.970375 10.0684 0.503596 10.0684 0.215837 9.79476C-0.0719456 9.52135 -0.0719456 9.0779 0.215837 8.80451L4.22052 4.99993L0.215953 1.19548C-0.0718292 0.921955 -0.0718292 0.478552 0.215953 0.205141C0.503736 -0.0683805 0.970491 -0.0683805 1.25839 0.205141L5.78424 4.50492C5.92814 4.64169 6 4.82075 6 4.99991C6 5.17915 5.928 5.35835 5.78413 5.49505Z" fill="#4985FF"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="last">
                        <div class="head">Недавние договоры</div>
                        <div class="go-all">Смотреть все</div>
                        <div class="item-list flex-col">
                            <div class="item-add">
                                <div class="label">Отправить новую заявку</div>
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="9" cy="9" r="8.5" fill="white" stroke="#C5C5C5"/>
                                    <path d="M14 9.71429H9.71429V14H8.28571V9.71429H4V8.28571H8.28571V4H9.71429V8.28571H14V9.71429Z" fill="#C5C5C5"/>
                                </svg>                  
                            </div>
                            <div v-for="i in 3" :key="i" class="item flex-col">
                                <div class="name">№ЦТС-2019/02-41</div>
                                <div class="date">Июнь 7, 2020</div>
                                <div class="status">В обработке</div>
                                <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.78413 5.49505L1.25827 9.79476C0.970375 10.0684 0.503596 10.0684 0.215837 9.79476C-0.0719456 9.52135 -0.0719456 9.0779 0.215837 8.80451L4.22052 4.99993L0.215953 1.19548C-0.0718292 0.921955 -0.0718292 0.478552 0.215953 0.205141C0.503736 -0.0683805 0.970491 -0.0683805 1.25839 0.205141L5.78424 4.50492C5.92814 4.64169 6 4.82075 6 4.99991C6 5.17915 5.928 5.35835 5.78413 5.49505Z" fill="#4985FF"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="last">
                        <div class="head">Недавние соглашения</div>
                        <div class="go-all">Смотреть все</div>
                        <div class="item-list flex-col">
                            <div class="item-add">
                                <div class="label">Отправить новую заявку</div>
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="9" cy="9" r="8.5" fill="white" stroke="#C5C5C5"/>
                                    <path d="M14 9.71429H9.71429V14H8.28571V9.71429H4V8.28571H8.28571V4H9.71429V8.28571H14V9.71429Z" fill="#C5C5C5"/>
                                </svg>                  
                            </div>
                            <div v-for="i in 3" :key="i" class="item flex-col">
                                <div class="name">№10155</div>
                                <div class="date">Июнь 7, 2020</div>
                                <div class="status active">ОДОБРЕНО</div>
                                <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.78413 5.49505L1.25827 9.79476C0.970375 10.0684 0.503596 10.0684 0.215837 9.79476C-0.0719456 9.52135 -0.0719456 9.0779 0.215837 8.80451L4.22052 4.99993L0.215953 1.19548C-0.0718292 0.921955 -0.0718292 0.478552 0.215953 0.205141C0.503736 -0.0683805 0.970491 -0.0683805 1.25839 0.205141L5.78424 4.50492C5.92814 4.64169 6 4.82075 6 4.99991C6 5.17915 5.928 5.35835 5.78413 5.49505Z" fill="#4985FF"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="balance-info flex-col">
                    <div class="head">Информация о балансе</div>
                    <div class="go-transition">Произвести перевод</div>
                    <div class="item-list flex-col">
                        <div class="item-label flex-row">
                            <div class="name">Номер договора</div>
                            <div class="price">Сумма</div>
                            <div class="status">Статус</div>
                        </div>
                        <div v-for="i in 4" :key="i" class="item flex-row">
                            <div class="name">№ЦТС-2020-14</div>
                            <div class="price">500000 KZT</div>
                            <div class="status">ПРЕДОПЛАТА</div>
                        </div>
                    </div>
                    <div class="warning">
                        Примечание: если Вы хотите произвести передвижения денежных средств с одного договора на другой, <span>перейдите по ссылке</span>
                        <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.78413 5.49505L1.25827 9.79476C0.970375 10.0684 0.503596 10.0684 0.215837 9.79476C-0.0719456 9.52135 -0.0719456 9.0779 0.215837 8.80451L4.22052 4.99993L0.215953 1.19548C-0.0718292 0.921955 -0.0718292 0.478552 0.215953 0.205141C0.503736 -0.0683805 0.970491 -0.0683805 1.25839 0.205141L5.78424 4.50492C5.92814 4.64169 6 4.82075 6 4.99991C6 5.17915 5.928 5.35835 5.78413 5.49505Z" fill="#4985FF"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import UserSide from '../UserSide'
import UserNav from '../UserNav'

export default {
    components: {
        UserSide,
        UserNav
    },
    data(){
        return {
            
        }
    },
    methods: {
        
    }
}
</script>
<style lang="scss" scoped>
    .main{
        background: #FFFFFF;
        .main-info{          
            padding: 0 58px 37px 58px;
            margin-left: 303px;
            .containe{
                position: relative;
                margin: 0;
                width: 100%;
                .content{
                    position: relative;
                    width: 100%;
                    .last{
                        position: relative;
                        padding: 24px 24px 0 24px;
                        width: 32%;
                        margin-right: 1.5%;
                        background: #FFFFFF;
                        border: 1px solid #DFE0EB;
                        border-radius: 6px;
                        .head{
                            text-align: left;
                            font-weight: 500;
                            font-size: 18px;
                            line-height: 22px;
                            color: #06397D;
                            width: 64%;
                            height: 44px;
                        }
                        .go-all{
                            cursor: pointer;
                            position: absolute;
                            right: 24px;
                            top: 24px;
                            font-weight: 600;
                            font-size: 14px;
                            line-height: 20px;
                            text-align: right;
                            letter-spacing: 0.2px;
                            color: #4985FF;
                        }
                        .item-list{
                            margin-top: 0px;
                            .item-add{
                                position: relative;
                                padding: 26px 0 20px 0;
                                border-bottom: 1px solid #DFE0EB;
                                .label{
                                    text-align: left;
                                    font-weight: 500;
                                    font-size: 14px;
                                    line-height: 20px;
                                    letter-spacing: 0.2px;
                                    color: #C5C5C5;
                                }
                                svg{
                                    position: absolute;
                                    right: 0;
                                    top: 26px;
                                }
                            }
                            .item{
                                position: relative;
                                border-bottom: 1px solid #DFE0EB;
                                padding: 12px 0;
                                .name{
                                    text-align: left;
                                    font-weight: 500;
                                    font-size: 14px;
                                    line-height: 20px;
                                    letter-spacing: 0.2px;
                                    color: #252733;
                                }
                                .date{
                                    text-align: left;
                                    margin-top: 3px;
                                    font-size: 12px;
                                    line-height: 20px;
                                    letter-spacing: 0.2px;
                                    color: #C5C5C5;
                                }
                                .price{
                                    position: absolute;
                                    right: 18px;
                                    font-weight: 500;
                                    font-size: 14px;
                                    line-height: 20px;
                                    letter-spacing: 0.2px;
                                    color: #252733;
                                }
                                .status{
                                    position: absolute;
                                    right: 18px;
                                    padding: 6px;
                                    background: #4985FF;
                                    border-radius: 6px;
                                    font-weight: 500;
                                    font-size: 10px;
                                    line-height: 12px;
                                    display: flex;
                                    align-items: center;
                                    text-align: center;
                                    letter-spacing: 0.5px;
                                    text-transform: uppercase;
                                    color: #FFFFFF;
                                }
                                .status.active{
                                    background: #29CC97;
                                }
                                svg{
                                    position: absolute;
                                    top: 18px;
                                    right: 0;
                                }
                            }
                            .item:last-of-type{
                                border-bottom: none;
                            }
                        }
                    }
                    .last:last-of-type{
                        margin-right: 0;
                    }
                }
                .balance-info{
                    margin-top: 60px;
                    width: 50%;
                    background: #FFFFFF;
                    border: 1px solid #DFE0EB;
                    border-radius: 6px;
                    padding: 24px;
                    position: relative;
                    .head{
                        text-align: left;
                        font-weight: 500;
                        font-size: 18px;
                        line-height: 22px;
                        color: #06397D;
                    }
                    .go-transition{
                        cursor: pointer;
                        position: absolute;
                        right: 24px;
                        top: 24px;
                        font-weight: 600;
                        font-size: 14px;
                        line-height: 20px;
                        text-align: right;
                        letter-spacing: 0.2px;
                        color: #4985FF;
                    }
                    .item-list{
                        margin-top: 28px;
                        .item-label{
                            padding: 10px 0;
                            border-bottom: 1px solid #DFE0EB;
                            .name, .price, .status{
                                text-align: left;
                                font-weight: 500;
                                font-size: 16px;
                                line-height: 20px;
                                color: #788899;
                            }
                            .name{
                                width: 44%;
                                margin-right: 2%;
                            }
                            .price{
                                width: 54%;
                            }
                            .status{
                                position: absolute;
                                right: 24px;;
                            }
                        }
                        .item{
                            position: relative;
                            padding: 25px 0;
                            border-bottom: 1px solid #DFE0EB;
                            .name, .price, .status{
                                text-align: left;
                                font-weight: 500;
                                font-size: 14px;
                                line-height: 17px;
                                color: #252733;
                            }
                            .name{
                                width: 44%;
                                margin-right: 2%;
                            }
                            .price{
                                width: 54%;
                            }
                            .status{
                                position: absolute;
                                right: 0;
                                font-weight: 600;
                                color: #29CC97;
                            }
                        }
                    }
                    .warning{
                        text-align: left;
                        margin-top: 25px;
                        font-weight: 500;
                        font-size: 14px;
                        line-height: 160%;
                        color: #06397D;
                        span{
                            cursor: pointer;
                            color: #4985FF;
                        }
                        svg{
                            cursor: pointer;
                            margin-left: 6px;
                        }
                    }
                }
            }
        }
    }
</style>

