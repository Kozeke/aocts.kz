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
                                <div class="label">Показать с:</div>
                                <input value="DD.MM.YYYY" type="text">
                                <div class="divider"></div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.9375 1.25H12.5V0.5C12.5 0.223875 12.2762 0 12 0C11.7238 0 11.5 0.223875 11.5 0.5V1.25H4.5V0.5C4.5 0.223875 4.27616 0 4 0C3.72384 0 3.5 0.223875 3.5 0.5V1.25H2.0625C0.925219 1.25 0 2.17522 0 3.3125V13.9375C0 15.0748 0.925219 16 2.0625 16H13.9375C15.0748 16 16 15.0748 16 13.9375V3.3125C16 2.17522 15.0748 1.25 13.9375 1.25ZM2.0625 2.25H3.5V2.75C3.5 3.02612 3.72384 3.25 4 3.25C4.27616 3.25 4.5 3.02612 4.5 2.75V2.25H11.5V2.75C11.5 3.02612 11.7238 3.25 12 3.25C12.2762 3.25 12.5 3.02612 12.5 2.75V2.25H13.9375C14.5234 2.25 15 2.72662 15 3.3125V4.5H1V3.3125C1 2.72662 1.47662 2.25 2.0625 2.25ZM13.9375 15H2.0625C1.47662 15 1 14.5234 1 13.9375V5.5H15V13.9375C15 14.5234 14.5234 15 13.9375 15Z" fill="#4985FF"/>
                                </svg>
                            </div>
                            <div class="item flex-col">
                                <div class="label">До:</div>
                                <input type="text" placeholder="DD.MM.YYYY">
                                <div class="divider"></div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.9375 1.25H12.5V0.5C12.5 0.223875 12.2762 0 12 0C11.7238 0 11.5 0.223875 11.5 0.5V1.25H4.5V0.5C4.5 0.223875 4.27616 0 4 0C3.72384 0 3.5 0.223875 3.5 0.5V1.25H2.0625C0.925219 1.25 0 2.17522 0 3.3125V13.9375C0 15.0748 0.925219 16 2.0625 16H13.9375C15.0748 16 16 15.0748 16 13.9375V3.3125C16 2.17522 15.0748 1.25 13.9375 1.25ZM2.0625 2.25H3.5V2.75C3.5 3.02612 3.72384 3.25 4 3.25C4.27616 3.25 4.5 3.02612 4.5 2.75V2.25H11.5V2.75C11.5 3.02612 11.7238 3.25 12 3.25C12.2762 3.25 12.5 3.02612 12.5 2.75V2.25H13.9375C14.5234 2.25 15 2.72662 15 3.3125V4.5H1V3.3125C1 2.72662 1.47662 2.25 2.0625 2.25ZM13.9375 15H2.0625C1.47662 15 1 14.5234 1 13.9375V5.5H15V13.9375C15 14.5234 14.5234 15 13.9375 15Z" fill="#4985FF"/>
                                </svg>
                            </div>
                            <div class="show-btn">Показать</div>
                        </div>
                        <div class="field-list flex-col">
                            <div class="label-item flex-row">
                                <div class="index">№</div>
                                <div class="name flex-row">
                                    Дата оборота
                                    <svg style="margin: 2px 0 0 2px" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.83729 3.89645L5.89279 2.14644C5.67612 1.95119 5.32388 1.95119 5.10721 2.14644L3.16271 3.89645C2.94576 4.0917 2.94576 4.4082 3.16271 4.60345C3.37939 4.7987 3.73162 4.7987 3.94829 4.60345L4.94443 3.70695V13.5C4.94443 13.776 5.19332 14 5.5 14C5.80668 14 6.05557 13.776 6.05557 13.5V3.70695L7.05171 4.60345C7.16005 4.7012 7.30227 4.74995 7.4445 4.74995C7.58672 4.74995 7.72895 4.7012 7.83729 4.60345C8.05424 4.4082 8.05424 4.0917 7.83729 3.89645Z" fill="#788899"/>
                                        <path d="M12.8373 11.3965C12.6203 11.2013 12.2687 11.2013 12.0517 11.3965L11.0556 12.293V2.5C11.0556 2.224 10.8067 2 10.5 2C10.1933 2 9.94443 2.224 9.94443 2.5V12.293L8.94829 11.3965C8.73134 11.2013 8.37939 11.2013 8.16271 11.3965C7.94576 11.5917 7.94576 11.9083 8.16271 12.1035L10.1072 13.8535C10.2158 13.9513 10.3578 14 10.5 14C10.6422 14 10.7842 13.9513 10.8928 13.8535L12.8373 12.1035C13.0542 11.9083 13.0542 11.5917 12.8373 11.3965Z" fill="#788899"/>
                                    </svg>
                                </div>
                                <div class="date">
                                    Номер АВР
                                    <svg style="margin: 2px 0 0 2px" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.83729 3.89645L5.89279 2.14644C5.67612 1.95119 5.32388 1.95119 5.10721 2.14644L3.16271 3.89645C2.94576 4.0917 2.94576 4.4082 3.16271 4.60345C3.37939 4.7987 3.73162 4.7987 3.94829 4.60345L4.94443 3.70695V13.5C4.94443 13.776 5.19332 14 5.5 14C5.80668 14 6.05557 13.776 6.05557 13.5V3.70695L7.05171 4.60345C7.16005 4.7012 7.30227 4.74995 7.4445 4.74995C7.58672 4.74995 7.72895 4.7012 7.83729 4.60345C8.05424 4.4082 8.05424 4.0917 7.83729 3.89645Z" fill="#788899"/>
                                        <path d="M12.8373 11.3965C12.6203 11.2013 12.2687 11.2013 12.0517 11.3965L11.0556 12.293V2.5C11.0556 2.224 10.8067 2 10.5 2C10.1933 2 9.94443 2.224 9.94443 2.5V12.293L8.94829 11.3965C8.73134 11.2013 8.37939 11.2013 8.16271 11.3965C7.94576 11.5917 7.94576 11.9083 8.16271 12.1035L10.1072 13.8535C10.2158 13.9513 10.3578 14 10.5 14C10.6422 14 10.7842 13.9513 10.8928 13.8535L12.8373 12.1035C13.0542 11.9083 13.0542 11.5917 12.8373 11.3965Z" fill="#788899"/>
                                    </svg>
                                </div>
                                <div class="until">
                                   Сумма с НДС
                                    <svg style="margin: 2px 0 0 2px" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.83729 3.89645L5.89279 2.14644C5.67612 1.95119 5.32388 1.95119 5.10721 2.14644L3.16271 3.89645C2.94576 4.0917 2.94576 4.4082 3.16271 4.60345C3.37939 4.7987 3.73162 4.7987 3.94829 4.60345L4.94443 3.70695V13.5C4.94443 13.776 5.19332 14 5.5 14C5.80668 14 6.05557 13.776 6.05557 13.5V3.70695L7.05171 4.60345C7.16005 4.7012 7.30227 4.74995 7.4445 4.74995C7.58672 4.74995 7.72895 4.7012 7.83729 4.60345C8.05424 4.4082 8.05424 4.0917 7.83729 3.89645Z" fill="#788899"/>
                                        <path d="M12.8373 11.3965C12.6203 11.2013 12.2687 11.2013 12.0517 11.3965L11.0556 12.293V2.5C11.0556 2.224 10.8067 2 10.5 2C10.1933 2 9.94443 2.224 9.94443 2.5V12.293L8.94829 11.3965C8.73134 11.2013 8.37939 11.2013 8.16271 11.3965C7.94576 11.5917 7.94576 11.9083 8.16271 12.1035L10.1072 13.8535C10.2158 13.9513 10.3578 14 10.5 14C10.6422 14 10.7842 13.9513 10.8928 13.8535L12.8373 12.1035C13.0542 11.9083 13.0542 11.5917 12.8373 11.3965Z" fill="#788899"/>
                                    </svg>
                                </div>
                                <div class="status">Статус платежа</div>
                            </div>
                            <div v-for="i in 5" :key="i" class="item-list">
                                <div class="item flex-row">
                                    <div class="index">{{ i }}</div>
                                    <div class="name flex-row">
                                        Май 31 , 2020
                                    </div>
                                    <div class="date flex-col">
                                        10155
                                    </div>
                                    <div class="until flex-col">
                                        1050031.6 KZT
                                    </div>
                                    <div class="status">Погашен</div>
                                    <div class="setting">
                                        <svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 4C3.1 4 4 3.1 4 2C4 0.9 3.1 0 2 0C0.9 0 0 0.9 0 2C0 3.1 0.9 4 2 4ZM2 6C0.9 6 0 6.9 0 8C0 9.1 0.9 10 2 10C3.1 10 4 9.1 4 8C4 6.9 3.1 6 2 6ZM2 12C0.9 12 0 12.9 0 14C0 15.1 0.9 16 2 16C3.1 16 4 15.1 4 14C4 12.9 3.1 12 2 12Z" fill="#C5C5C5"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
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

export default {
    components: {
        UserSide,
        UserNav,
        UserDocumentsRouter
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
                    background: #FFFFFF;
                    border: 1px solid #DFE0EB;
                    border-radius: 6px;   
                    .content-info{
                        padding: 36px 28px;
                        .top-date{
                            .item{
                                margin-right: 60px;
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
                                    border: 1px solid #4985FF;
                                    box-shadow: 0px 0px 10px rgba(73, 133, 255, 0.15);
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
                            .show-btn{
                                cursor: pointer;
                                margin-top: 30px;
                                height: 54px;
                                padding: 15px 38px;
                                font-weight: bold;
                                font-size: 16px;
                                line-height: 20px;
                                display: flex;
                                align-items: center;
                                text-align: center;
                                color: #FFFFFF;
                                background: #4985FF;
                                box-shadow: 0px 0px 10px rgba(111, 111, 111, 0.25);
                                border-radius: 6px;
                            }
                        }
                        .field-list{
                            margin-top: 32px;
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
                                .name, .date, .until, .status{
                                    margin-left: 2%;
                                }
                                .name{
                                    width: 20%;
                                }
                                .date{
                                    width: 20%;
                                }
                                .until{
                                    width: 28%;
                                }
                                .status{
                                    width: 18%;
                                }
                            }
                            .item-list{
                                padding: 12px 0;
                                border-bottom: 1px solid #DFE0EB;
                                .item{
                                    position: relative;
                                    height: 36px;
                                    .index, .name, .status, .setting, .date, .until, .time, .day{
                                        text-align: left;
                                        font-weight: 500;
                                        font-size: 14px;
                                        line-height: 20px;
                                        letter-spacing: 0.2px;
                                        color: #252733;
                                    }
                                    .index, .name, .date, .until, .status, .setting{
                                        padding: 6px 0;
                                        margin-left: 2%;
                                    }
                                    .index{
                                        margin-left: 0;
                                        width: 6%;
                                        color: #788899;
                                    }
                                    .name{
                                        width: 20%;
                                        text-overflow: ellipsis;
                                        overflow: hidden; 
                                        white-space: nowrap;
                                    }
                                    .date, .until{
                                        width: 20%;
                                    }
                                    .until{
                                        width: 28%;
                                    }
                                    .status{
                                        width: 14%;
                                        letter-spacing: 0.5px;
                                        text-transform: uppercase;
                                        color: #29CC97;
                                        font-size: 12px;
                                        line-height: 22px;
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
                    }    
                }
            }
        }
    }
</style>

