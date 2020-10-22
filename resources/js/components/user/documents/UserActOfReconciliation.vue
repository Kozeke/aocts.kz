<template>
    <div class="main">
        <UserSide></UserSide>
        <div class="main-info flex-col">
            <UserNav></UserNav>
            <div class="containe flex-row">
                <div class="content flex-col">
                    <UserDocumentsRouter></UserDocumentsRouter>
                    <div class="content-info flex-col">
                        <div class="top-date flex-row">
                            <div class="item flex-col">
                                <div class="label">Выберите договор</div>
                                <input value="+ Добавить договор" type="text" readonly>
                            </div>
                            <div class="item flex-col">
                                <div class="label">Период сверки</div>
                                <datepicker :disabledDates="{ to: new Date(Date.now() - 8640000) }" :placeholder="'YYYY-MM-DD'" :language="ru" format="yyyy-MM-dd"></datepicker> 
                                <div class="divider"></div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.9375 1.25H12.5V0.5C12.5 0.223875 12.2762 0 12 0C11.7238 0 11.5 0.223875 11.5 0.5V1.25H4.5V0.5C4.5 0.223875 4.27616 0 4 0C3.72384 0 3.5 0.223875 3.5 0.5V1.25H2.0625C0.925219 1.25 0 2.17522 0 3.3125V13.9375C0 15.0748 0.925219 16 2.0625 16H13.9375C15.0748 16 16 15.0748 16 13.9375V3.3125C16 2.17522 15.0748 1.25 13.9375 1.25ZM2.0625 2.25H3.5V2.75C3.5 3.02612 3.72384 3.25 4 3.25C4.27616 3.25 4.5 3.02612 4.5 2.75V2.25H11.5V2.75C11.5 3.02612 11.7238 3.25 12 3.25C12.2762 3.25 12.5 3.02612 12.5 2.75V2.25H13.9375C14.5234 2.25 15 2.72662 15 3.3125V4.5H1V3.3125C1 2.72662 1.47662 2.25 2.0625 2.25ZM13.9375 15H2.0625C1.47662 15 1 14.5234 1 13.9375V5.5H15V13.9375C15 14.5234 14.5234 15 13.9375 15Z" fill="#4985FF"/>
                                </svg>
                            </div>
                            <div class="item flex-col">
                                <div class="label">Период сверки</div>
                                <datepicker :disabledDates="{ to: new Date(Date.now() - 8640000) }" :placeholder="'YYYY-MM-DD'" :language="ru" format="yyyy-MM-dd"></datepicker> 
                                <div class="divider"></div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.9375 1.25H12.5V0.5C12.5 0.223875 12.2762 0 12 0C11.7238 0 11.5 0.223875 11.5 0.5V1.25H4.5V0.5C4.5 0.223875 4.27616 0 4 0C3.72384 0 3.5 0.223875 3.5 0.5V1.25H2.0625C0.925219 1.25 0 2.17522 0 3.3125V13.9375C0 15.0748 0.925219 16 2.0625 16H13.9375C15.0748 16 16 15.0748 16 13.9375V3.3125C16 2.17522 15.0748 1.25 13.9375 1.25ZM2.0625 2.25H3.5V2.75C3.5 3.02612 3.72384 3.25 4 3.25C4.27616 3.25 4.5 3.02612 4.5 2.75V2.25H11.5V2.75C11.5 3.02612 11.7238 3.25 12 3.25C12.2762 3.25 12.5 3.02612 12.5 2.75V2.25H13.9375C14.5234 2.25 15 2.72662 15 3.3125V4.5H1V3.3125C1 2.72662 1.47662 2.25 2.0625 2.25ZM13.9375 15H2.0625C1.47662 15 1 14.5234 1 13.9375V5.5H15V13.9375C15 14.5234 14.5234 15 13.9375 15Z" fill="#4985FF"/>
                                </svg>
                            </div>
                        </div>
                        <div class="field-list flex-col">
                            <div class="head">История актов</div>
                            <div class="item-list flex-col">
                                <div class="item-label flex-row">
                                    <div class="name">Номер договора</div>
                                    <div class="date">Период сверки</div>
                                </div>
                                <div class="item-scroll">
                                    <div v-for="i in 5" :key="i" class="item flex-row">
                                        <div class="name">№ЦТС-2020-14</div>
                                        <div class="date">01.07.2020 - 04.08.2020</div>
                                        <div class="setting">
                                            <svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 4C3.1 4 4 3.1 4 2C4 0.9 3.1 0 2 0C0.9 0 0 0.9 0 2C0 3.1 0.9 4 2 4ZM2 6C0.9 6 0 6.9 0 8C0 9.1 0.9 10 2 10C3.1 10 4 9.1 4 8C4 6.9 3.1 6 2 6ZM2 12C0.9 12 0 12.9 0 14C0 15.1 0.9 16 2 16C3.1 16 4 15.1 4 14C4 12.9 3.1 12 2 12Z" fill="#C5C5C5"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="send-btn">Отправить запрос на формирование</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import UserSide from '../UserSide'
import UserNav from '../UserNav'
import UserDocumentsRouter from './UserDocumentsRoute'
import Datepicker from 'vuejs-datepicker'
import {ru} from 'vuejs-datepicker/dist/locale'

export default {
    components: {
        UserSide,
        UserNav,
        UserDocumentsRouter,
        Datepicker
    },
    data(){
        return {
            deals: ''
        }
    },
    mounted(){
        this.deals = JSON.parse(localStorage.getItem('xyzSessionAoUser')).applications
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
                    background: #FFFFFF;
                    border: 1px solid #DFE0EB;
                    border-radius: 6px;   
                    .content-info{
                        padding: 36px 28px 100px 28px;
                        .top-date{
                            .item{
                                width: calc(30% - 40px);
                                margin-right: 50px;
                                position: relative;
                                .label{
                                    text-align: left;
                                    font-weight: 500;
                                    font-size: 16px;
                                    line-height: 20px;
                                    color: #06397D;
                                }
                                input{
                                    margin-top: 12px;
                                    text-align: left;
                                    background: #FDFDFD;
                                    border: 1px solid #DFE0EB;
                                    border-radius: 6px;
                                    border-radius: 6px;
                                    padding: 16px 20px;
                                    font-weight: 500;
                                    font-size: 14px;
                                    line-height: 17px;
                                    color: #4985FF;
                                }
                                .divider{
                                    width: 1px;
                                    height: 30px;
                                    background: #DFE0EB;
                                    position: absolute;
                                    top: 42px;
                                    right: 46px;
                                }
                                svg{
                                    position: absolute;
                                    top: 48px;
                                    right: 16px;
                                }
                                ::placeholder{
                                    color: #C5C5C5;
                                }
                            }
                        }
                        .field-list{
                            margin-top: 40px;
                            width: 40%;
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
                            .item-list{
                                height: 242px;
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
    }
</style>

