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
                            <div class="label">ФИО первого руководителя</div>
                            <input v-if="editMode" v-model="manager_name" type="text" placeholder="Somename Somesurname" >
                            <input v-else type="text" :value="manager_name" readonly>
                        </div>
                        <div class="item flex-col">
                            <div class="label">ФИО исполнителя</div>
                            <input v-if="editMode" v-model="performer_name" type="text" placeholder="Somename Somesurname">
                            <input v-else type="text" :value="performer_name" readonly>
                        </div>
                        <div class="item flex-col">
                            <div class="label">Контактный номер</div>
                            <input v-if="editMode" v-model="phone" name="phone" oninput="validity.valid||(value='');" v-mask="'+7(###)###-##-##'" placeholder="+7 700 000 00 00">
                            <input v-else type="text" :value="phone" readonly>
                        </div>
                        <div class="item flex-col">
                            <div class="label">Электронная почта</div>
                            <input v-if="editMode" v-model="email" type="text" placeholder="email@company.kz">
                            <input v-else type="text" :value="email" readonly>
                        </div>
                    </div>
                    <div @click="editMode = !editMode" v-if="editMode" class="cancel-btn">Отмена</div>
                    <div @click="postUserContact()" v-if="editMode" class="send-btn">Сохранить изменения</div>
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
import axios from "axios"

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
            manager_name: '',
            performer_name: '',
            phone: '',
            email: ''
        }
    },
    mounted(){
        const user = JSON.parse(localStorage.getItem('xyzSessionAoUser'))
        this.manager_name = user.manager_name
        this.performer_name = user.performer_name
        this.phone = user.phone
        this.email = user.email
    },
    methods:{
        postUserContact(){
            axios.post('/api/user/edit/contacts', null, {
                headers: { 
                    'Authorization' : 'Bearer ' + JSON.parse(localStorage.getItem('xyzSessionAo')).token
                },
                params: {
                    id: JSON.parse(localStorage.getItem('xyzSessionAoUser')).id,
                    manager_name: this.manager_name,
                    performer_name: this.performer_name,
                    phone: this.phone,
                    email: this.email
                }
            })
                .then(res => {
                console.log(res.data)
                alert('Ваши данные успешно сохранены')
                localStorage.removeItem('xyzSessionAoUser');
                localStorage.setItem('xyzSessionAoUser', JSON.stringify(res.data[1][0]));
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
                        right: 300px;
                    }
                }
            }
        }
    }
</style>

