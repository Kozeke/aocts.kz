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
                            <input v-if="editMode" type="text" placeholder="г. Караганда, ул. Шахтеров">
                            <input v-else type="text" value="г. Караганда, ул. Шахтеров" readonly>
                        </div>
                        <div class="item flex-col">
                            <div class="label">Юридический адрес компании</div>
                            <input v-if="editMode" type="text" placeholder="г. Нур-Султан, ул. Достык">
                            <input v-else type="text" value="г. Нур-Султан, ул. Достык" readonly>
                        </div>
                    </div>
                    <div @click="editMode = !editMode" v-if="editMode" class="cancel-btn">Отмена</div>
                    <div @click="editMode = !editMode" v-if="editMode" class="send-btn">Отправить запрос на изменение данных</div>
                    <div @click="editMode = !editMode" v-if="!editMode" class="edit-btn">Изменить настройки</div>
                </div>
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
            editMode: false
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
    }
</style>

