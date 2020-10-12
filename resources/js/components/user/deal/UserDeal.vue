<template>
    <div class="main">
        <UserSide></UserSide>
        <div class="main-info flex-col">
            <UserNav></UserNav>
            <div class="containe flex-row">
                <div class="content flex-col">
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
                                Дата заключения
                                <svg style="margin: 2px 0 0 2px" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.83729 3.89645L5.89279 2.14644C5.67612 1.95119 5.32388 1.95119 5.10721 2.14644L3.16271 3.89645C2.94576 4.0917 2.94576 4.4082 3.16271 4.60345C3.37939 4.7987 3.73162 4.7987 3.94829 4.60345L4.94443 3.70695V13.5C4.94443 13.776 5.19332 14 5.5 14C5.80668 14 6.05557 13.776 6.05557 13.5V3.70695L7.05171 4.60345C7.16005 4.7012 7.30227 4.74995 7.4445 4.74995C7.58672 4.74995 7.72895 4.7012 7.83729 4.60345C8.05424 4.4082 8.05424 4.0917 7.83729 3.89645Z" fill="#788899"/>
                                    <path d="M12.8373 11.3965C12.6203 11.2013 12.2687 11.2013 12.0517 11.3965L11.0556 12.293V2.5C11.0556 2.224 10.8067 2 10.5 2C10.1933 2 9.94443 2.224 9.94443 2.5V12.293L8.94829 11.3965C8.73134 11.2013 8.37939 11.2013 8.16271 11.3965C7.94576 11.5917 7.94576 11.9083 8.16271 12.1035L10.1072 13.8535C10.2158 13.9513 10.3578 14 10.5 14C10.6422 14 10.7842 13.9513 10.8928 13.8535L12.8373 12.1035C13.0542 11.9083 13.0542 11.5917 12.8373 11.3965Z" fill="#788899"/>
                                </svg>
                            </div>
                            <div class="until">
                                Срок действия договора
                                <svg style="margin: 2px 0 0 2px" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.83729 3.89645L5.89279 2.14644C5.67612 1.95119 5.32388 1.95119 5.10721 2.14644L3.16271 3.89645C2.94576 4.0917 2.94576 4.4082 3.16271 4.60345C3.37939 4.7987 3.73162 4.7987 3.94829 4.60345L4.94443 3.70695V13.5C4.94443 13.776 5.19332 14 5.5 14C5.80668 14 6.05557 13.776 6.05557 13.5V3.70695L7.05171 4.60345C7.16005 4.7012 7.30227 4.74995 7.4445 4.74995C7.58672 4.74995 7.72895 4.7012 7.83729 4.60345C8.05424 4.4082 8.05424 4.0917 7.83729 3.89645Z" fill="#788899"/>
                                    <path d="M12.8373 11.3965C12.6203 11.2013 12.2687 11.2013 12.0517 11.3965L11.0556 12.293V2.5C11.0556 2.224 10.8067 2 10.5 2C10.1933 2 9.94443 2.224 9.94443 2.5V12.293L8.94829 11.3965C8.73134 11.2013 8.37939 11.2013 8.16271 11.3965C7.94576 11.5917 7.94576 11.9083 8.16271 12.1035L10.1072 13.8535C10.2158 13.9513 10.3578 14 10.5 14C10.6422 14 10.7842 13.9513 10.8928 13.8535L12.8373 12.1035C13.0542 11.9083 13.0542 11.5917 12.8373 11.3965Z" fill="#788899"/>
                                </svg>
                            </div>
                            <div class="status">Статус</div>
                        </div>
                        <div v-for="i in 5" :key="i" class="item-list">
                            <div class="item flex-row">
                                <div class="index">{{ i }}</div>
                                <div @click="showAccordian(i)" class="name flex-row">
                                    №ЦТС-2019/02-41 
                                    <svg style="margin: 6px 0 0 4px" width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.04456 0.355294L10.7742 4.65514C11.0753 4.92867 11.0753 5.37214 10.7742 5.64553C10.4735 5.91894 9.98569 5.91894 9.68497 5.64553L5.49992 1.84082L1.31502 5.64542C1.01415 5.91883 0.526408 5.91883 0.225655 5.64542C-0.0752185 5.372 -0.0752185 4.92856 0.225655 4.65503L4.95541 0.355183C5.10586 0.218478 5.30283 0.150202 5.4999 0.150202C5.69706 0.150202 5.89418 0.218611 6.04456 0.355294Z" fill="#4985FF"/>
                                    </svg>
                                </div>
                                <div class="date flex-col">
                                    <div class="day">Июнь 1, 2020</div>
                                    <div class="time">19:23</div>
                                </div>
                                <div class="until flex-col">
                                    <div class="day">Август 31 , 2020</div>
                                    <div class="time">19:23</div>
                                </div>
                                <div class="status">В обработке</div>
                                <div class="setting">
                                    <svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 4C3.1 4 4 3.1 4 2C4 0.9 3.1 0 2 0C0.9 0 0 0.9 0 2C0 3.1 0.9 4 2 4ZM2 6C0.9 6 0 6.9 0 8C0 9.1 0.9 10 2 10C3.1 10 4 9.1 4 8C4 6.9 3.1 6 2 6ZM2 12C0.9 12 0 12.9 0 14C0 15.1 0.9 16 2 16C3.1 16 4 15.1 4 14C4 12.9 3.1 12 2 12Z" fill="#C5C5C5"/>
                                    </svg>
                                </div>
                            </div>
                            <div :id="'extra-' + i" class="extra flex-col">
                                <div class="label">Дополнительные соглашения:</div>
                                <div v-for="i in 2" :key="i" class="docs">№ЦТС-2019/02-41</div>
                            </div>
                        </div>
                    </div>
                    <div @click="modalNewDeal = true" class="send-btn">Отправить заявку на договор</div>
                </div>
            </div>
        </div>
        <div v-if="modalNewDeal" class="modal">
            <div class="modal-content">
                <div class="title">Договор на оказание услуг по<br> предоставлению подъездного пути</div>
                <div @click="modalNewDeal = false" class="close">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.493 2.95446L9.94808 7.49984L14.493 12.045C15.169 12.7213 15.169 13.8168 14.493 14.4931C14.1552 14.8309 13.7124 14.9999 13.2697 14.9999C12.8264 14.9999 12.3835 14.8311 12.0459 14.4931L7.50003 9.9474L2.95447 14.493C2.61673 14.8308 2.17384 14.9998 1.73081 14.9998C1.28792 14.9998 0.845322 14.8311 0.507284 14.493C-0.16875 13.8171 -0.16875 12.7215 0.507284 12.045L5.05207 7.49979L0.507026 2.95446C-0.169009 2.27843 -0.169009 1.18267 0.507026 0.506637C1.18293 -0.168879 2.27805 -0.168879 2.95421 0.506637L7.49999 5.05202L12.0454 0.506637C12.7217 -0.168879 13.817 -0.168879 14.4927 0.506637C15.169 1.18267 15.169 2.27843 14.493 2.95446Z" fill="#4985FF"/>
                    </svg>
                </div>
                <div class="field-list flex-row">
                    <div class="item flex-col">
                        <div class="label">Полное наименование ветвепользователя</div>
                        <input type="text" placeholder="Some company." >
                    </div>
                    <div class="item flex-col">
                        <div class="label">Исполнитель</div>
                        <input type="text" placeholder="Name Surname Middlename">
                    </div>
                    <div class="item flex-col">
                        <div class="label">Станция</div>
                        <input type="text" placeholder="Введите станцию">
                    </div>
                    <div class="item flex-col">
                        <div class="label">Подъездной путь</div>
                        <input type="text" placeholder="Введите подъездной путь">
                    </div>
                    <div class="item flex-col">
                        <div class="label">Тупик</div>
                        <input type="text" placeholder="Введите место тупика">
                    </div>
                    <div class="item flex-col">
                        <div class="label">Дата предоставления подъездного пути</div>
                        <input type="text" placeholder="DD.MM.YYYY">
                    </div>
                    <div class="item flex-col">
                        <div class="label">Планируемый вагонооборот в месяц</div>
                        <input type="text" placeholder="Введите планируемый вагонооборот в месяц">
                    </div>
                    <div class="item flex-col">
                        <div class="label">Планируемый вагонооборот в год</div>
                        <input type="text" placeholder="Введите планируемый вагонооборот в год">
                    </div>
                </div>
                <div @click="modalActualAddress = false" class="done-btn">Вперёд</div>
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
            modalNewDeal: false
        }
    },
    methods: {
        showAccordian( index ){
            let el = document.getElementById('extra-' + index)
            if( el.style.display === 'flex' ){
                el.style.display = 'none'
            } else {
                el.style.display = 'flex'
            }
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
                    min-height: 580px;
                    padding-bottom: 80px;
                    .field-list{
                        padding: 32px 32px;
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
                                width: 4%;
                            }
                            .index, .name, .date, .until, .status{
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
                                    width: 4%;
                                }
                                .name{
                                    width: 20%;
                                    text-overflow: ellipsis;
                                    overflow: hidden; 
                                    white-space: nowrap;
                                }
                                .date, .until{
                                    padding: 0;
                                    width: 20%;
                                    .time{
                                        font-weight: normal;
                                        font-size: 12px;
                                        line-height: 16px;
                                        letter-spacing: 0.1px;
                                        color: #C5C5C5;
                                    }
                                }
                                .until{
                                    width: 28%;
                                }
                                .status{
                                    width: 14%;
                                    letter-spacing: 0.5px;
                                    text-transform: uppercase;
                                    color: #FFFFFF;
                                    font-size: 12px;
                                    line-height: 22px;
                                    text-align: center;
                                    background: #4985FF;
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
                            .extra{
                                display: none;
                                text-align: left;
                                margin-left: 8%;
                                // width: 20%;
                                .label{
                                    text-align: left;
                                    font-weight: 500;
                                    font-size: 12px;
                                    line-height: 14px;
                                    color: #252733; 
                                    margin-bottom: 6px;
                                }
                                .docs{
                                    text-align: left;
                                    font-weight: 500;
                                    font-size: 12px;
                                    line-height: 14px;
                                    color: #252733; 
                                    margin: 2px 0;
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
                margin: 140px auto auto auto;
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
                        input{
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
                        input:focus{
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
                }
                .done-btn{
                    width: 134px;
                    cursor: pointer;
                    margin: 40px 0 0 auto;
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
    }
</style>

