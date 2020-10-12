<template>
    <div class="main">
        <UserSide></UserSide>
        <div class="main-info flex-col">
            <UserNav></UserNav>
            <div class="containe flex-row">
                <UserProfileImg></UserProfileImg>
                <div class="content flex-col">
                    <UserProfileRouteMenu></UserProfileRouteMenu>
                    <div class="field-list flex-row">
                        <div class="item flex-col">
                            <div class="label">БИН/ИНН</div>
                            <input v-if="editMode" type="text" placeholder="100 000 000 000" >
                            <input v-else type="text" value="100 000 000 000" readonly>
                        </div>
                        <div class="item flex-col">
                            <div class="label">Название компании</div>
                            <input v-if="editMode" type="text" placeholder="Some company.">
                            <input v-else type="text" value="Some company." readonly>
                        </div>
                        <div class="item flex-col">
                            <div class="label">Вид деятельности</div>
                            <input v-if="editMode" type="text" placeholder="Информационные Технологии">
                            <input v-else type="text" value="Информационные Технологии" readonly>
                        </div>
                        <div class="item flex-col">
                            <div class="label">Электронная почта компании</div>
                            <input v-if="editMode" type="text" placeholder="email@company.kz">
                            <input v-else type="text" value="email@company.kz" readonly>
                        </div>
                        <div class="item flex-col">
                            <div class="label">Фактический адрес компании</div>
                            <input @click="modalActualAddress = true" v-if="editMode" type="text" placeholder="г. Караганда, ул. Шахтеров">
                            <input v-else type="text" value="г. Караганда, ул. Шахтеров" readonly>
                        </div>
                        <div class="item flex-col">
                            <div class="label">Юридический адрес компании</div>
                            <input @click="modalLegalAddress = true" v-if="editMode" type="text" placeholder="г. Нур-Султан, ул. Достык">
                            <input v-else type="text" value="г. Нур-Султан, ул. Достык" readonly>
                        </div>
                    </div>
                    <div @click="editMode = !editMode" v-if="editMode" class="cancel-btn">Отмена</div>
                    <div @click="editMode = !editMode" v-if="editMode" class="send-btn">Отправить запрос на изменение данных</div>
                    <div @click="editMode = !editMode" v-if="!editMode" class="edit-btn">Изменить настройки</div>
                </div>
            </div>
        </div>
        <div v-if="modalActualAddress" class="modal">
            <div class="modal-content">
                <div class="title">Фактический адрес компании</div>
                <div @click="modalActualAddress = false" class="close">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.493 2.95446L9.94808 7.49984L14.493 12.045C15.169 12.7213 15.169 13.8168 14.493 14.4931C14.1552 14.8309 13.7124 14.9999 13.2697 14.9999C12.8264 14.9999 12.3835 14.8311 12.0459 14.4931L7.50003 9.9474L2.95447 14.493C2.61673 14.8308 2.17384 14.9998 1.73081 14.9998C1.28792 14.9998 0.845322 14.8311 0.507284 14.493C-0.16875 13.8171 -0.16875 12.7215 0.507284 12.045L5.05207 7.49979L0.507026 2.95446C-0.169009 2.27843 -0.169009 1.18267 0.507026 0.506637C1.18293 -0.168879 2.27805 -0.168879 2.95421 0.506637L7.49999 5.05202L12.0454 0.506637C12.7217 -0.168879 13.817 -0.168879 14.4927 0.506637C15.169 1.18267 15.169 2.27843 14.493 2.95446Z" fill="#4985FF"/>
                    </svg>
                </div>
                <div class="field-list flex-row">
                    <div class="item flex-col">
                        <div class="label">Страна</div>
                        <input type="text" placeholder="Выберите страну" >
                    </div>
                    <div class="item flex-col">
                        <div class="label">Регион</div>
                        <input type="text" placeholder="Выберите регион">
                    </div>
                    <div class="item flex-col">
                        <div class="label">Город</div>
                        <input type="text" placeholder="Выберите город">
                    </div>
                    <div class="item flex-col">
                        <div class="label">Адрес</div>
                        <input type="text" placeholder="Введите адрес (офис, каб)">
                    </div>
                </div>
                <div @click="modalActualAddress = false" class="done-btn">Готово</div>
            </div>
        </div>
        <div v-if="modalLegalAddress" class="modal">
            <div class="modal-content">
                <div class="title">Юридический адрес компании</div>
                <div @click="modalLegalAddress = false" class="close">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.493 2.95446L9.94808 7.49984L14.493 12.045C15.169 12.7213 15.169 13.8168 14.493 14.4931C14.1552 14.8309 13.7124 14.9999 13.2697 14.9999C12.8264 14.9999 12.3835 14.8311 12.0459 14.4931L7.50003 9.9474L2.95447 14.493C2.61673 14.8308 2.17384 14.9998 1.73081 14.9998C1.28792 14.9998 0.845322 14.8311 0.507284 14.493C-0.16875 13.8171 -0.16875 12.7215 0.507284 12.045L5.05207 7.49979L0.507026 2.95446C-0.169009 2.27843 -0.169009 1.18267 0.507026 0.506637C1.18293 -0.168879 2.27805 -0.168879 2.95421 0.506637L7.49999 5.05202L12.0454 0.506637C12.7217 -0.168879 13.817 -0.168879 14.4927 0.506637C15.169 1.18267 15.169 2.27843 14.493 2.95446Z" fill="#4985FF"/>
                    </svg>
                </div>
                <div class="field-list flex-row">
                    <div class="item flex-col">
                        <div class="label">Страна</div>
                        <input type="text" placeholder="Выберите страну" >
                    </div>
                    <div class="item flex-col">
                        <div class="label">Регион</div>
                        <input type="text" placeholder="Выберите регион">
                    </div>
                    <div class="item flex-col">
                        <div class="label">Город</div>
                        <input type="text" placeholder="Выберите город">
                    </div>
                    <div class="item flex-col">
                        <div class="label">Адрес</div>
                        <input type="text" placeholder="Введите адрес (офис, каб)">
                    </div>
                </div>
                <div @click="modalLegalAddress = false"  class="done-btn">Готово</div>
            </div>
        </div>
    </div>
</template>
<script>
import UserSide from '../UserSide'
import UserNav from '../UserNav'
import UserProfileImg from './UserProfileImg'
import UserProfileRouteMenu from './UserProfileRouteMenu'

export default {
    components: {
        UserSide,
        UserNav,
        UserProfileImg,
        UserProfileRouteMenu
    },
    data(){
        return {
            editMode: false,
            modalActualAddress: false,
            modalLegalAddress: false
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
                    margin-left: 42px;
                    background: #FFFFFF;
                    border: 1px solid #DFE0EB;
                    border-radius: 6px;
                    height: 580px;
                    .field-list{
                        padding: 32px 32px;
                        flex-wrap: wrap;
                        .item{
                            width: 49%;
                            margin-bottom: 28px;
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
                            margin-left: 2%;
                        }
                    }
                    .cancel-btn, .send-btn, .edit-btn{
                        position: absolute;
                        bottom: 32px;
                        right: 32px;
                        max-width: 270px;
                        cursor: pointer;
                        margin: 80px 0 0 auto;
                        padding: 18px 28px;
                        font-weight: bold;
                        font-size: 16px;
                        line-height: 20px;
                        color: #FFFFFF;
                        background: #4985FF;
                        box-shadow: 0px 0px 10px rgba(111, 111, 111, 0.25);
                        border-radius: 6px;
                    }
                    .cancel-btn{
                        right: 320px;
                    }
                    .send-btn{
                        padding: 10px 28px;
                        line-height: 18px;
                        margin-left: 24px;
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
                        width: 46%;
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
                        margin-left: 8%;
                    }
                }
                .done-btn{
                    margin-top: 100px;
                    width: 134px;
                    cursor: pointer;
                    margin: 80px auto 0 auto;
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

