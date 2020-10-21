<template>
    <div class="main">
        <UserSide></UserSide>
        <div class="main-info flex-col">
            <UserNav></UserNav>
            <div class="containe flex-row">
                <div class="content flex-col">
                    <UserDocumentsRouter></UserDocumentsRouter>
                    <div class="content-info flex-col">
                        <div class="field-list flex-col">
                            <div class="label-item flex-row">
                                <div class="index">№</div>
                                <div class="name flex-row">
                                    Номер договора
                                    <svg style="margin: 2px 0 0 2px" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.83729 3.89645L5.89279 2.14644C5.67612 1.95119 5.32388 1.95119 5.10721 2.14644L3.16271 3.89645C2.94576 4.0917 2.94576 4.4082 3.16271 4.60345C3.37939 4.7987 3.73162 4.7987 3.94829 4.60345L4.94443 3.70695V13.5C4.94443 13.776 5.19332 14 5.5 14C5.80668 14 6.05557 13.776 6.05557 13.5V3.70695L7.05171 4.60345C7.16005 4.7012 7.30227 4.74995 7.4445 4.74995C7.58672 4.74995 7.72895 4.7012 7.83729 4.60345C8.05424 4.4082 8.05424 4.0917 7.83729 3.89645Z" fill="#788899"/>
                                        <path d="M12.8373 11.3965C12.6203 11.2013 12.2687 11.2013 12.0517 11.3965L11.0556 12.293V2.5C11.0556 2.224 10.8067 2 10.5 2C10.1933 2 9.94443 2.224 9.94443 2.5V12.293L8.94829 11.3965C8.73134 11.2013 8.37939 11.2013 8.16271 11.3965C7.94576 11.5917 7.94576 11.9083 8.16271 12.1035L10.1072 13.8535C10.2158 13.9513 10.3578 14 10.5 14C10.6422 14 10.7842 13.9513 10.8928 13.8535L12.8373 12.1035C13.0542 11.9083 13.0542 11.5917 12.8373 11.3965Z" fill="#788899"/>
                                    </svg>
                                </div>
                                <div class="date">
                                    Дата отправления
                                    <svg style="margin: 2px 0 0 2px" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.83729 3.89645L5.89279 2.14644C5.67612 1.95119 5.32388 1.95119 5.10721 2.14644L3.16271 3.89645C2.94576 4.0917 2.94576 4.4082 3.16271 4.60345C3.37939 4.7987 3.73162 4.7987 3.94829 4.60345L4.94443 3.70695V13.5C4.94443 13.776 5.19332 14 5.5 14C5.80668 14 6.05557 13.776 6.05557 13.5V3.70695L7.05171 4.60345C7.16005 4.7012 7.30227 4.74995 7.4445 4.74995C7.58672 4.74995 7.72895 4.7012 7.83729 4.60345C8.05424 4.4082 8.05424 4.0917 7.83729 3.89645Z" fill="#788899"/>
                                        <path d="M12.8373 11.3965C12.6203 11.2013 12.2687 11.2013 12.0517 11.3965L11.0556 12.293V2.5C11.0556 2.224 10.8067 2 10.5 2C10.1933 2 9.94443 2.224 9.94443 2.5V12.293L8.94829 11.3965C8.73134 11.2013 8.37939 11.2013 8.16271 11.3965C7.94576 11.5917 7.94576 11.9083 8.16271 12.1035L10.1072 13.8535C10.2158 13.9513 10.3578 14 10.5 14C10.6422 14 10.7842 13.9513 10.8928 13.8535L12.8373 12.1035C13.0542 11.9083 13.0542 11.5917 12.8373 11.3965Z" fill="#788899"/>
                                    </svg>
                                </div>
                                <div class="status">Статус</div>
                            </div>
                            <div v-if="allAgreements">
                                <div v-for="i in allAgreements" :key="i.id" class="item-list">
                                    <div class="item flex-row">
                                        <div class="index">{{ i.id }}</div>
                                        <div class="name flex-row">
                                            №ЦТС-2019/02-41
                                        </div>
                                        <div class="date flex-col">
                                            <div class="day">Июнь 1, 2020</div>
                                            <div class="time">19:23</div>
                                        </div>
                                        <div class="status">ОДОБРЕНО</div>
                                        <div class="setting">
                                            <svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 4C3.1 4 4 3.1 4 2C4 0.9 3.1 0 2 0C0.9 0 0 0.9 0 2C0 3.1 0.9 4 2 4ZM2 6C0.9 6 0 6.9 0 8C0 9.1 0.9 10 2 10C3.1 10 4 9.1 4 8C4 6.9 3.1 6 2 6ZM2 12C0.9 12 0 12.9 0 14C0 15.1 0.9 16 2 16C3.1 16 4 15.1 4 14C4 12.9 3.1 12 2 12Z" fill="#C5C5C5"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div @click="modalNewDoc = true" class="send-btn">Отправить заявку на соглашение</div>
                    </div>
                </div>
            </div>
            <div v-if="modalNewDoc" class="modal">
                <div class="modal-content">
                    <div class="title">Соглашение на подачу и <br>уборку вагонов</div>
                    <div @click="modalNewDoc = false" class="close">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.493 2.95446L9.94808 7.49984L14.493 12.045C15.169 12.7213 15.169 13.8168 14.493 14.4931C14.1552 14.8309 13.7124 14.9999 13.2697 14.9999C12.8264 14.9999 12.3835 14.8311 12.0459 14.4931L7.50003 9.9474L2.95447 14.493C2.61673 14.8308 2.17384 14.9998 1.73081 14.9998C1.28792 14.9998 0.845322 14.8311 0.507284 14.493C-0.16875 13.8171 -0.16875 12.7215 0.507284 12.045L5.05207 7.49979L0.507026 2.95446C-0.169009 2.27843 -0.169009 1.18267 0.507026 0.506637C1.18293 -0.168879 2.27805 -0.168879 2.95421 0.506637L7.49999 5.05202L12.0454 0.506637C12.7217 -0.168879 13.817 -0.168879 14.4927 0.506637C15.169 1.18267 15.169 2.27843 14.493 2.95446Z" fill="#4985FF"/>
                        </svg>
                    </div>
                    <div v-if="modalPage === 1" class="field-list flex-row">
                        <div class="item flex-col">
                            <div class="label">Предприятие</div>
                            <input v-model="company_name" type="text" placeholder="Some company." >
                        </div>
                        <div class="item flex-col">
                            <div class="label">Исполнитель</div>
                            <input v-model="performer" type="text" placeholder="Name Surname Middlename">
                        </div>
                        <div class="item flex-col">
                            <div class="label">Адрес пребывания вагонов</div>
                            <input v-model="carriage_address" type="text" placeholder="Введите адрес пребывания вагонов">
                        </div>
                        <div class="item flex-col">
                            <div class="label">Подъездной путь</div>
                            <input v-model="access_road" type="text" placeholder="Введите подъездной путь">
                        </div>
                        <div class="item flex-col">
                            <div class="label">Число вагонов при погрузке</div>
                            <input v-model="amount_of_carriage_on_loading" type="text" placeholder="Введите число вагонов при погрузке">
                        </div>
                        <div class="item flex-col">
                            <div class="label">Число вагонов при выгрузке</div>
                            <input v-model="amount_of_carriage_on_unloading" type="text" placeholder="Введите число вагонов при выгрузке">
                        </div>
                        <div class="item flex-col">
                            <div class="label">Размер одновременной подачи вагонов</div>
                            <input v-model="size_of_the_simultaneous_supply_of_wagons" type="text" placeholder="Введите размер одновременной подачи вагонов">
                        </div>
                        <div class="item flex-col">
                            <div class="label">Срок начало соглашения</div>
                            <datepicker v-model="agreement_start_date" :disabledDates="{ to: new Date(Date.now() - 8640000) }" :placeholder="'2020-01-01'" :language="ru" format="yyyy-MM-dd"></datepicker> 
                            <!-- <input v-model="agreement_dates" type="text" placeholder="YYYY-MM-DD"> -->
                        </div>
                        <div class="item flex-col">
                            <div class="label">Срок окончания соглашения</div>
                            <datepicker v-model="agreement_end_date" :disabledDates="{ to: new Date(Date.now() - 8640000) }" :placeholder="'2020-01-01'" :language="ru" format="yyyy-MM-dd"></datepicker> 
                            <!-- <input v-model="agreement_dates" type="text" placeholder="YYYY-MM-DD"> -->
                        </div>
                    </div>
                    <div v-if="modalPage === 2" class="field-list flex-row">
                        <div class="item flex-col">
                            <div class="label">Выберите регион</div>
                            <select name="selected_region" class="input-form" v-model="application_id">
                                <option :value="'Выберите'" disabled>Выберите</option>
                                <option v-for="deal in deals" :value="deal.id" :key="deal.id">
                                    {{ deal.id }}
                                </option>
                            </select>
                        </div>
                        <div class="item flex-col">
                            <div class="label">Индекс предприятия</div>
                            <input v-model="business_index" type="text" placeholder="Введите индекс предприятия" >
                        </div>
                        <div class="item flex-col">
                            <div class="label">Адрес</div>
                            <input v-model="address" type="text" placeholder="Somestreet, 1, Somecity">
                        </div>
                        <div class="item flex-col">
                            <div class="label">БИН</div>
                            <input v-model="BIN" type="text" placeholder="000 000 000 000">
                        </div>
                        <div class="item flex-col">
                            <div class="label">ИИК</div>
                            <input type="text" placeholder="0000 0000 0000 0000">
                        </div>
                        <div class="item flex-col">
                            <div class="label">БИК</div>
                            <input type="text" placeholder="987 654 321">
                        </div>
                        <div class="item flex-col">
                            <div class="label">КБЕ</div>
                            <input type="text" placeholder="Введите КБЕ">
                        </div>
                        <div class="item flex-col">
                            <div class="label">Наименование банка</div>
                            <input type="text" placeholder="Bank name">
                        </div>
                        <div class="item flex-col">
                            <!-- <div class="label">Срок соглашения</div>
                            <input type="text" placeholder="DD.MM.YYYY - DD.MM.YYYY"> -->
                        </div>
                        <div class="item check-form flex-row">
                            <input v-model="agreement_check" type="checkbox">
                            <label class="label">Согласиться с <span>правилами пользователя</span></label>
                        </div>
                    </div>
                    <div v-if="modalPage === 1" @click="modalPage = 2" class="done-btn">Вперёд</div>
                    <div v-if="modalPage === 2" @click="modalPage = 1" class="back-btn">Назад</div>
                    <div v-if="modalPage === 2" @click="postAgeement()" class="done-btn">Отправить</div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import UserSide from '../UserSide'
import UserNav from '../UserNav'
import UserDocumentsRouter from './UserDocumentsRoute'
import Datepicker from 'vuejs-datepicker';
import {ru} from 'vuejs-datepicker/dist/locale'
import axios from 'axios'

export default {
    components: {
        UserSide,
        UserNav,
        UserDocumentsRouter,
        Datepicker
    },
    data(){
        return {
            modalNewDoc: false,
            modalPage: 1,
            agreement_check: false,
            allAgreements: [],
            deals: [],
            application_id: '',
            business_index: null,
            address: '',
            company_name: '',
            access_road: '',
            amount_of_carriage_on_loading: null,
            amount_of_carriage_on_unloading: null,
            size_of_the_simultaneous_supply_of_wagons: null,
            carriage_address: '',
            agreement_dates: '',
            agreement_start_date: '',
            agreement_end_date: '',
            performer: '',
            BIN: ''
        }
    },
    mounted(){
        this.BIN = JSON.parse(localStorage.getItem('xyzSessionAoUser')).BIN
        this.deals = JSON.parse(localStorage.getItem('xyzSessionAoUser')).applications
        this.deals.forEach( deal => {
            if( deal.agreements ){
                deal.agreements.forEach( item => {
                    this.allAgreements.push(item)
                })
            }
        })
    },
    methods: {
        postAgeement(){
            let now =  this.agreement_start_date
            let month  = String(Number(now.getMonth() + 1));
            let date = String(now.getDate())
            if(month.length === 1){
                month = '0' + month
            }
            if(date.length === 1){
                date = '0' + date
            }
            this.agreement_start_date = now.getFullYear() + '-' + month + '-' + date
            now =  this.agreement_end_date
            month  = String(Number(now.getMonth() + 1));
            date = String(now.getDate())
            if(month.length === 1){
                month = '0' + month
            }
            if(date.length === 1){
                date = '0' + date
            }
            this.agreement_end_date = now.getFullYear() + '-' + month + '-' + date

            axios.post('/api/create/agreement', null, {
                headers: { 
                    'Authorization' : 'Bearer ' + JSON.parse(localStorage.getItem('xyzSessionAo')).token
                },
                params: {
                    user_id: JSON.parse(localStorage.getItem('xyzSessionAoUser')).id,
                    application_id: this.application_id,
                    business_index: this.business_index,
                    address: this.address,
                    access_road: this.access_road,
                    amount_of_carriage_on_loading: this.amount_of_carriage_on_loading,
                    amount_of_carriage_on_unloading: this.amount_of_carriage_on_unloading,
                    size_of_the_simultaneous_supply_of_wagons: this.size_of_the_simultaneous_supply_of_wagons, 
                    carriage_address: this.carriage_address,
                    agreement_start_date: this.agreement_start_date, 
                    agreement_end_date: this.agreement_end_date, 
                    performer: this.performer,
                    company_name: this.company_name
                }
            })
            .then(res => {
                console.log(res.data)
                alert('Ваша заявка успешно отрпалена')
                let userSt = JSON.parse(localStorage.getItem('xyzSessionAoUser'))
                localStorage.removeItem('xyzSessionAoUser');
                userSt.applications.forEach( item => {
                    if( item.id === this.application_id ){
                        item.agreements.push( res.data[1] )
                    }
                })
                localStorage.setItem('xyzSessionAoUser', JSON.stringify(userSt));
                location.reload()
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
                    background: #FFFFFF;
                    border: 1px solid #DFE0EB;
                    border-radius: 6px;   
                    .content-info{
                        padding: 36px 28px 120px 28px;
                        .field-list{
                            padding: 0;
                            flex-wrap: wrap;
                            .label-item{
                                padding-bottom: 10px;
                                border-bottom: 1.5px solid #DFE0EB;
                                div{
                                    text-align: left;
                                    font-weight: 500;
                                    font-size: 16px;
                                    line-height: 20px;
                                    height: 20px;
                                    letter-spacing: 0.2px;
                                    color: #788899;
                                }
                                .index{
                                    width: 6%;
                                }
                                .name, .date, .status{
                                    margin-left: 2%;
                                }
                                .name{
                                    width: 30%;
                                }
                                .date{
                                    width: 36%;
                                }
                                .status{
                                    width: 22%;
                                }
                            }
                            .item-list{
                                padding: 12px 0;
                                border-bottom: 1px solid #DFE0EB;
                                .item{
                                    position: relative;
                                    height: 36px;
                                    .index, .name, .status, .setting, .date, .time, .day{
                                        text-align: left;
                                        font-weight: 500;
                                        font-size: 14px;
                                        line-height: 20px;
                                        letter-spacing: 0.2px;
                                        color: #252733;
                                    }
                                    .index, .name, .date, .status, .setting{
                                        padding: 6px 0;
                                        margin-left: 2%;
                                    }
                                    .index{
                                        margin-left: 0;
                                        width: 6%;
                                        color: #788899;
                                    }
                                    .name{
                                        width: 30%;
                                        text-overflow: ellipsis;
                                        overflow: hidden; 
                                        white-space: nowrap;
                                    }
                                    .date{
                                        padding: 0;
                                        width: 36%;
                                        .time{
                                            font-weight: normal;
                                            font-size: 12px;
                                            line-height: 16px;
                                            letter-spacing: 0.1px;
                                            color: #C5C5C5;
                                        }
                                    }
                                    .status{
                                        width: 18%;
                                        letter-spacing: 0.5px;
                                        text-transform: uppercase;
                                        color: #FFFFFF;
                                        font-size: 12px;
                                        line-height: 22px;
                                        background: #4985FF;
                                        text-align: center;
                                        border-radius: 6px;
                                        height: 34px;
                                    }
                                    .setting{
                                        cursor: pointer;
                                        text-align: right;
                                        margin-right: 2%;
                                        width: 2%;
                                    }
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
                margin: 30px auto auto auto;
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
                    .item{
                        width: 48%;
                        margin-top: 36px;
                        .label{
                            text-align: left;
                            font-weight: 500;
                            font-size: 16px;
                            line-height: 20px;
                            color: #06397D;
                        }
                        input, select{
                            margin-top: 8px;
                            text-align: left;
                            background: #FDFDFD;
                            border: 1px solid #DFE0EB;
                            box-sizing: border-box;
                            border-radius: 6px;
                            padding: 18px 22px;
                            font-weight: 500;
                            font-size: 14px;
                            line-height: 17px;
                        }
                        input:focus, select:focus{
                            box-shadow: 0px 0px 10px rgba(73, 133, 255, 0.2);
                        }
                        input:read-only{
                            padding: 18px 0px;
                            border: 1px solid #FDFDFD;
                            color: #787878;
                        }
                        ::placeholder{
                            color: #C5C5C5;
                        }
                    }
                    .item:nth-of-type(2n){
                        margin-left: 4%;
                    }
                    .check-form{
                        margin-top: 25px;
                        input{
                            cursor: pointer;
                            margin-left: 3px;
                            margin-top: 3px;
                            -ms-transform: scale(1.2) !important; /* IE */
                            -moz-transform: scale(1.2) !important; /* FF */
                            -webkit-transform: scale(1.2) !important; /* Safari and Chrome */
                            -o-transform: scale(1.2) !important; /* Opera */
                            transform: scale(1.2) !important;
                            padding: 6px;
                        }
                        .label{
                            margin-left: 8px !important;
                            text-align: left;
                            font-weight: 500;
                            font-size: 16px;
                            line-height: 20px;
                        }
                        span{
                            font-weight: bold;
                            text-decoration: underline;
                        }
                    }
                }
                .done-btn{
                    width: 144px;
                    cursor: pointer;
                    margin: 30px 0 0 auto;
                    padding: 18px 28px;
                    font-weight: bold;
                    font-size: 16px;
                    line-height: 20px;
                    color: #FFFFFF;
                    background: #4985FF;
                    box-shadow: 0px 0px 10px rgba(111, 111, 111, 0.25);
                    border-radius: 6px;
                }
                .back-btn{
                    position: absolute;
                    left: 89px;
                    bottom: 69px;
                    cursor: pointer;
                    font-weight: bold;
                    font-size: 16px;
                    line-height: 20px;
                    color: #4985FF;
                }
            }
        }
    }
</style>

