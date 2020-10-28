<template>
    <div class="main">
        <UserSide></UserSide>
        <div class="main-info flex-col">
            <UserNav></UserNav>
            <div class="containe flex-row">
                <div class="content flex-col">
                    <UserDocumentsRouter></UserDocumentsRouter>
                    <div class="content-info">
                        <div class="field-list flex-col">
                            <div class="head">Выберите договор и введите количество вагонов:</div>
                            <div class="item-list flex-col">
                                <div class="item-label flex-row">
                                    <div class="name">Номер договора</div>
                                    <div class="name">Кол-во вагонов</div>
                                    <div class="date">Период сверки</div>
                                </div>
                                <div class="item-scroll">
                                    <div v-for="(i,index) in applications" :key="i" class="item flex-row">
                                        <div> <input type="radio" :value="i" v-model="app"> </div>
                                        <div style="width:32%" class="name">№ЦТС-2020-14</div>
                                        <input v-model="i.vagon_quantity" style="width: 9%;margin-left:3%;margin-right:18%" class="name" type="number">
                                        <div class="date">{{i.date}} - {{i.access_road_grant_date}}</div>
                                        <div class="setting">
                                            <svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 4C3.1 4 4 3.1 4 2C4 0.9 3.1 0 2 0C0.9 0 0 0.9 0 2C0 3.1 0.9 4 2 4ZM2 6C0.9 6 0 6.9 0 8C0 9.1 0.9 10 2 10C3.1 10 4 9.1 4 8C4 6.9 3.1 6 2 6ZM2 12C0.9 12 0 12.9 0 14C0 15.1 0.9 16 2 16C3.1 16 4 15.1 4 14C4 12.9 3.1 12 2 12Z" fill="#C5C5C5"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="send-btn" @click="paymentModal = true">Оплатить</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div v-if="paymentModal" class="modal">
            <div class="modal-content">
                <div @click="paymentModal = false" class="close">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.493 2.95446L9.94808 7.49984L14.493 12.045C15.169 12.7213 15.169 13.8168 14.493 14.4931C14.1552 14.8309 13.7124 14.9999 13.2697 14.9999C12.8264 14.9999 12.3835 14.8311 12.0459 14.4931L7.50003 9.9474L2.95447 14.493C2.61673 14.8308 2.17384 14.9998 1.73081 14.9998C1.28792 14.9998 0.845322 14.8311 0.507284 14.493C-0.16875 13.8171 -0.16875 12.7215 0.507284 12.045L5.05207 7.49979L0.507026 2.95446C-0.169009 2.27843 -0.169009 1.18267 0.507026 0.506637C1.18293 -0.168879 2.27805 -0.168879 2.95421 0.506637L7.49999 5.05202L12.0454 0.506637C12.7217 -0.168879 13.817 -0.168879 14.4927 0.506637C15.169 1.18267 15.169 2.27843 14.493 2.95446Z" fill="#4985FF"/>
                    </svg>
                </div>
                <div class="field-list flex-row">
                    <div class="select-form flex-col">
                        <label class="label">Выберите вид оплаты</label>
                        <select v-model="paymentType" name="paymentType" class="input-form">
                            <option :value="'Выберите'" disabled>Выберите</option>
                            <option v-for="option in options" :value="option" :key="option.id">
                                {{ option }}
                            </option>
                        </select>
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">Номер карты</label>
                        <input v-bind:class="{ 'error' : errors.cardNumber }" v-on:keyup="validateForm($event)" v-model="cardNumber" name="cardNumber" type="text" oninput="validity.valid||(value='');" v-mask="'#### #### #### ####'" placeholder="0000 0000 0000 0000">
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">Срок действия</label>
                        <input v-bind:class="{ 'error' : errors.cardExp }" v-on:keyup="validateForm($event)" v-model="cardExp" name="cardExp" type="text" oninput="validity.valid||(value='');" v-mask="'##/##'" placeholder="MM/YY">
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">Имя носителя</label>
                        <input v-bind:class="{ 'error' : errors.cardName }" v-on:keyup="validateForm($event)" v-model="cardName" name="cardName" type="text" placeholder="Name Surname">
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">CCV</label>
                        <input v-bind:class="{ 'error' : errors.cardCvv }" v-on:keyup="validateForm($event)" v-model="cardCvv" name="cardCvv" type="text" oninput="validity.valid||(value='');" v-mask="'###'" placeholder="•••">
                    </div>
                </div>
                <div @click="postPayment()" class="done-btn">Оплатить</div>
            </div>
        </div>
    </div>
</template>
<script>
import UserSide from '../UserSide'
import UserNav from '../UserNav'
import UserDocumentsRouter from './UserDocumentsRoute'
import axios from 'axios'

export default {
    components: {
        UserSide,
        UserNav,
        UserDocumentsRouter
    },
    data(){
        return {
            paymentModal: false,
            options: [ 'Банковская карта' ],
            paymentType: 'Выберите',
            cardNumber: '',
            cardExp: '',
            cardName: '',
            cardCvv: '',
            errors: '',
            applications:"",
            app:"",
            vagon_quantity:""
        }
    },
    methods: {
        validateForm(e) {
            if (e.target.name === "cardNumber") {
                if ( String(e.target.value).length !== 19 ) {
                    e.srcElement.classList.add("error")
                    document.getElementById("err-cardNumber").style.display = "flex";
                } else {
                    e.srcElement.classList.remove("error")
                    document.getElementById("err-cardNumber").style.display = "none";
                }
            }
            if (e.target.name === "cardExp") {
                if ( String(e.target.value).length !== 5 ) {
                    e.srcElement.classList.add("error")
                    document.getElementById("err-cardExp").style.display = "flex";
                } else {
                    e.srcElement.classList.remove("error")
                    document.getElementById("err-cardExp").style.display = "none";
                }
            }
            if (e.target.name === "cardName") {
                if (String(e.target.value).length === 0) {
                    e.srcElement.classList.add("error")
                    document.getElementById("err-cardName").style.display = "display";
                } else {
                    e.srcElement.classList.remove("error");
                    document.getElementById("err-cardName").style.display = "none";
                }
            }
            if (e.target.name === "cardCvv") {
                if ( String(e.target.value).length !== 3 ) {
                    e.srcElement.classList.add("error")
                    document.getElementById("err-cardCvv").style.display = "flex";
                } else {
                    e.srcElement.classList.remove("error")
                    document.getElementById("err-cardCvv").style.display = "none";
                }
            }
        },
        postPayment(){
            // if(this.paymentType === 'Выберите'){
            //     alert('Выберите вид оплаты')
            //     return
            // }
            //
            // if(document.getElementsByClassName('error').length !== 0){
            //     alert('Заполните все поля правильно.')
            //     return
            // }
            // axios
            var _this = this;
            axios.post('/api/make/payment', null, {
                headers: {
                    'Authorization' : 'Bearer ' + JSON.parse(localStorage.getItem('xyzSessionAo')).token
                },
                params: {
                    status: 1,
                    vagon_quantity: _this.app['vagon_quantity'],
                    application_id: _this.app['id'],
                    payment: _this.payment?_this.payment:_this.app['payment']
                }
            })
                .then(res => {
                    console.log(res.data)
                    alert('Ваша заявка успешно от отправлена')

                }).catch(err => {
                    console.log(err);
            })
        }
    },
    mounted(){

        this.applications = JSON.parse(localStorage.getItem('xyzSessionAoUser')).applications
    },

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
                    background: #FFFFFF;
                    border: 1px solid #DFE0EB;
                    border-radius: 6px;
                    .content-info{
                        padding: 36px 28px 100px 28px;
                        .field-list{
                            margin-top: 0px;
                            width: 100%;
                            background: #FFFFFF;
                            position: relative;
                            .head{
                                text-align: left;
                                font-weight: 500;
                                font-size: 18px;
                                line-height: 22px;
                                color: #06397D;
                            }
                            .item-list{
                                height: 376px;
                                margin-top: 28px;
                                .item-label{
                                    padding: 10px 0;
                                    border-bottom: 1px solid #DFE0EB;
                                    .name, .date{
                                        text-align: left;
                                        font-weight: 500;
                                        font-size: 14px;
                                        line-height: 17px;
                                        color: #788899;
                                    }
                                    .name{
                                        width: 42%;
                                        margin-right: 2%;
                                    }
                                    .date{
                                        width: 56%;
                                    }
                                }
                                .item-scroll{
                                    overflow-y: scroll;
                                }
                                .item{
                                    position: relative;
                                    padding: 25px 0;
                                    border-bottom: 1px solid #DFE0EB;
                                    .name, .date{
                                        text-align: left;
                                        font-weight: 500;
                                        font-size: 14px;
                                        line-height: 17px;
                                        color: #252733;
                                    }
                                    .name{
                                        width: 42%;
                                        margin-right: 2%;
                                    }
                                    .date{
                                        width: 56%;
                                    }
                                    .setting{
                                        position: absolute;
                                        top: 21px;
                                        right: 0;
                                        cursor: pointer;
                                        text-align: right;
                                    }
                                }
                            }
                        }
                        ::-webkit-scrollbar {
                            width: 3px;
                        }
                        ::-webkit-scrollbar-track {
                            background: #f1f1f1;
                        }
                        ::-webkit-scrollbar-thumb {
                            background: #4985FF;
                        }
                        ::-webkit-scrollbar-thumb:hover {
                            background: #4985FF;
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
                width: 652px;
                .close{
                    position: absolute;
                    top: 30px;
                    right: 30px;
                }
                .field-list{
                    flex-wrap: wrap;
                    .input-form, .select-form{
                        width: 30%;
                        position: relative;
                        margin-top: 18px;
                        height: 98px;
                        .label{
                            text-align: left;
                            font-weight: 500;
                            font-size: 14px;
                            line-height: 16px;
                            letter-spacing: 0.4px;
                            color: #06397D;
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
                        .error{
                            border: 1px solid #E4002F !important;
                            box-shadow: 0px 0px 10px rgba(228, 0, 47, 0.2) !important;
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
                    .select-form{
                        width: 60%;
                        margin: 18px 20% 0 20%;
                    }
                    .input-form:nth-of-type(2n){
                        margin-right: 4%;
                        width: 66%;
                    }
                }
                .done-btn{
                    width: 144px;
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

            }
        }
        .send-btn{
            position: absolute;
            bottom: 32px;
            right: 32px;
            max-width: 270px;
            cursor: pointer;
            margin: 80px 0 0 auto;
            padding: 10px 28px;
            font-weight: bold;
            font-size: 16px;
            line-height: 18px;
            color: #FFFFFF;
            background: #4985FF;
            box-shadow: 0px 0px 10px rgba(111, 111, 111, 0.25);
            border-radius: 6px;
        }
    }
</style>

