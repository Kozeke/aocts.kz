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
                    <div @click="dealModal = true" class="go-transition">Произвести перевод</div>
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
        <div v-if="dealModal" class="modal">
            <div class="modal-content">
                <div class="title">Перевод между договорами</div>
                <div @click="dealModal = false" class="close">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.493 2.95446L9.94808 7.49984L14.493 12.045C15.169 12.7213 15.169 13.8168 14.493 14.4931C14.1552 14.8309 13.7124 14.9999 13.2697 14.9999C12.8264 14.9999 12.3835 14.8311 12.0459 14.4931L7.50003 9.9474L2.95447 14.493C2.61673 14.8308 2.17384 14.9998 1.73081 14.9998C1.28792 14.9998 0.845322 14.8311 0.507284 14.493C-0.16875 13.8171 -0.16875 12.7215 0.507284 12.045L5.05207 7.49979L0.507026 2.95446C-0.169009 2.27843 -0.169009 1.18267 0.507026 0.506637C1.18293 -0.168879 2.27805 -0.168879 2.95421 0.506637L7.49999 5.05202L12.0454 0.506637C12.7217 -0.168879 13.817 -0.168879 14.4927 0.506637C15.169 1.18267 15.169 2.27843 14.493 2.95446Z" fill="#4985FF"/>
                    </svg>
                </div>
                <div class="field-list flex-row">
                    <div class="input-form flex-col">
                        <label class="label">Откуда</label>
                        <select class="input-form" v-model="transfer_from">
                            <option :value="'Выберите'" disabled>Выберите</option>
                            <option v-for="deal in deals" :value="deal.id" :key="deal.id">
                                {{ deal.id }}
                            </option>
                        </select>
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">Куда</label>
                        <select class="input-form" v-model="transfer_to">
                            <option :value="'Выберите'" disabled>Выберите</option>
                            <option v-for="deal in deals" :value="deal.id" :key="deal.id">
                                {{ deal.id }}
                            </option>
                        </select>
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">Сумма</label>
                        <input v-model="amount" min="0" type="number" placeholder="Введите сумму">
                    </div>
                </div>
                <div @click="postTransfer" class="done-btn">Произвести перевод</div>
            </div>
        </div>
        <div v-if="succModal" class="modal">
            <div class="modal-content">
                <div @click="succModal = false" class="close">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.493 2.95446L9.94808 7.49984L14.493 12.045C15.169 12.7213 15.169 13.8168 14.493 14.4931C14.1552 14.8309 13.7124 14.9999 13.2697 14.9999C12.8264 14.9999 12.3835 14.8311 12.0459 14.4931L7.50003 9.9474L2.95447 14.493C2.61673 14.8308 2.17384 14.9998 1.73081 14.9998C1.28792 14.9998 0.845322 14.8311 0.507284 14.493C-0.16875 13.8171 -0.16875 12.7215 0.507284 12.045L5.05207 7.49979L0.507026 2.95446C-0.169009 2.27843 -0.169009 1.18267 0.507026 0.506637C1.18293 -0.168879 2.27805 -0.168879 2.95421 0.506637L7.49999 5.05202L12.0454 0.506637C12.7217 -0.168879 13.817 -0.168879 14.4927 0.506637C15.169 1.18267 15.169 2.27843 14.493 2.95446Z" fill="#4985FF"/>
                    </svg>
                </div>
                <div class="succ-img">
                    <svg width="128" height="128" viewBox="0 0 128 128" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M92 43L52 85L36 68.2" stroke="#4985FF" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M128 64C128 99.3462 99.3462 128 64 128C28.6538 128 0 99.3462 0 64C0 28.6538 28.6538 0 64 0C99.3462 0 128 28.6538 128 64ZM6.4 64C6.4 95.8116 32.1884 121.6 64 121.6C95.8116 121.6 121.6 95.8116 121.6 64C121.6 32.1884 95.8116 6.4 64 6.4C32.1884 6.4 6.4 32.1884 6.4 64Z" fill="#4985FF"/>
                    </svg>
                </div>
                <div class="succ-sub">Запрос на перевод принят!</div>
                <div class="succ-amount">Сумма перевода: {{ amount ? amount : 0 }} KZT</div>
            </div>
        </div>
    </div>
</template>
<script>
import UserSide from '../UserSide'
import UserNav from '../UserNav'
import axios from 'axios'

export default {
    components: {
        UserSide,
        UserNav
    },
    data(){
        return {
            dealModal: false,
            succModal: false,
            deals: '',
            transfer_from: 'Выберите договор',
            transfer_to: 'Выберите договор',
            amount: ''
        }
    },
    mounted(){
        this.deals = JSON.parse(localStorage.getItem('xyzSessionAoUser')).applications
    },
    methods: {
        postTransfer(){
            axios.post('/api/transfer/money', null, {
                headers: {
                    'Authorization' : 'Bearer ' + JSON.parse(localStorage.getItem('xyzSessionAo')).token
                },
                params: {
                    // id: JSON.parse(localStorage.getItem('xyzSessionAoUser')).id,
                    transfer_from: this.transfer_from,
                    transfer_to: this.transfer_to,
                    amount: this.amount
                }
            })
            .then(res => {
                console.log(res.data)
                alert('Ваша заявка успешно от отправлена')
                this.succModal = true
            }).catch(err => {
                console.log(err.data)
            })
        }
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
        .modal {
            display: flex;
            position: fixed; /* Stay in place */
            z-index: 99; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background: rgba(45, 76, 100, 0.7);
            .modal-content {
                background-color: #fefefe;
                background: #FFFFFF;
                border-radius: 6px;
                margin: 120px auto auto auto;
                padding: 50px 89px;
                width: 952px;
                .title{
                    font-weight: 600;
                    font-size: 18px;
                    line-height: 22px;
                    text-align: center;
                    color: #2D4C64;
                }
                .close{
                    position: absolute;
                    top: 30px;
                    right: 30px;
                }
                .field-list{
                    flex-wrap: wrap;
                    .input-form{
                        width: 48%;
                        position: relative;
                        margin-top: 18px;
                        height: 98px;
                        .label{
                            text-align: left;
                            font-weight: 500;
                            font-size: 16px;
                            line-height: 20px;
                        }
                        input, select{
                            width: 100%;
                            cursor: initial;
                            padding-left: 18px;
                            text-align: left;
                            margin-top: 5px;
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
                        select{
                            padding: 18px auto;
                            -webkit-appearance: none;
                            -moz-appearance : none;
                            color: #000000;
                            option{
                                color: #000000;
                            }
                        }
                        .not-selected{
                            color: rgba(111, 111, 111, 0.25);
                        }
                        ::placeholder{
                            font-weight: normal;
                            font-size: 14px;
                            line-height: 22px;
                            color: rgba(111, 111, 111, 0.25);
                        }
                    }
                    .input-form:nth-of-type(2n){
                        margin-left: 4%;
                    }
                }
                .done-btn{
                    width: 244px;
                    cursor: pointer;
                    margin: 40px auto 0 auto;
                    padding: 18px 28px;
                    font-weight: bold;
                    font-size: 16px;
                    line-height: 20px;
                    color: #FFFFFF;
                    background: #4985FF;
                    box-shadow: 0px 0px 10px rgba(111, 111, 111, 0.25);
                    border-radius: 6px;
                }
                .succ-img{
                    margin: 30px auto;
                }
                .succ-sub{
                    margin: 0 auto;
                    font-size: 18px;
                    line-height: 20px;
                    letter-spacing: 0.2px;
                    color: #4985FF;
                }
                .succ-amount{
                    margin: 30px auto 0 auto;
                    font-weight: 500;
                    font-size: 14px;
                    line-height: 20px;
                    letter-spacing: 0.2px;
                    color: #06397D;
                }
            }
        }
    }
</style>

