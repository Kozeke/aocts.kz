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
                            <input v-if="editMode" v-bind:class="{ 'error' : errors.manager_name }" v-on:keyup="validateForm($event)" v-model="manager_name" name="manager_name" type="text" placeholder="Somename Somesurname" >
                            <input v-else type="text" :value="manager_name" readonly>
                            <span v-if="errors.manager_name" id="err-text-manager_name" class="err-text">{{ errors.manager_name }}</span>
                            <div :style="{ 'display' : errors.manager_name ? 'flex' : 'none' }" class="err" id="err-manager_name">
                                <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                                </svg>
                            </div>
                        </div>
                        <div class="item flex-col">
                            <div class="label">ФИО исполнителя</div>
                            <input v-if="editMode" v-bind:class="{ 'error' : errors.performer_name }" v-on:keyup="validateForm($event)" v-model="performer_name" name="performer_name" type="text" placeholder="Somename Somesurname">
                            <input v-else type="text" :value="performer_name" readonly>
                            <span v-if="errors.performer_name" id="err-text-performer_name" class="err-text">{{ errors.performer_name }}</span>
                            <div :style="{ 'display' : errors.performer_name ? 'flex' : 'none' }" class="err" id="err-performer_name">
                                <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                                </svg>
                            </div>
                        </div>
                        <div class="item flex-col">
                            <div class="label">Контактный номер</div>
                            <input v-if="editMode" v-bind:class="{ 'error' : errors.phone }" v-on:keyup="validateForm($event)" v-model="phone" name="phone" oninput="validity.valid||(value='');" v-mask="'+7(###)###-##-##'" placeholder="+7 700 000 00 00">
                            <input v-else type="text" :value="phone" readonly>
                            <span v-if="errors.phone" id="err-text-phone" class="err-text">{{ errors.phone }}</span>
                            <div :style="{ 'display' : errors.phone ? 'flex' : 'none' }" class="err" id="err-phone">
                                <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                                </svg>
                            </div>
                        </div>
                        <div class="item flex-col">
                            <div class="label">Электронная почта</div>
                            <input v-if="editMode" v-bind:class="{ 'error' : errors.email }" v-on:keyup="validateForm($event)" v-model="email" name="email" type="text" placeholder="email@company.kz">
                            <input v-else type="text" :value="email" readonly>
                            <span v-if="errors.email" id="err-text-email" class="err-text">{{ errors.email }}</span>
                            <div :style="{ 'display' : errors.email ? 'flex' : 'none' }" class="err" id="err-email">
                                <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                                </svg>
                            </div>
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
            email: '',
            errors: ''
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
        validateForm(e){
            const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(e.target.name === 'manager_name'){
                if(this.errors.manager_name){
                    delete this.errors.manager_name
                }
                if(String(e.target.value).length === 0 ){
                    e.srcElement.classList.add('error')
                    document.getElementById('err-manager_name').style.display = 'flex'
                    document.getElementById('err-text-' + e.target.name).style.display = 'flex'
                } else {
                    e.srcElement.classList.remove('error')
                    document.getElementById('err-manager_name').style.display = 'none'
                    document.getElementById('err-text-' + e.target.name).style.display = 'none'
                }
            }
            if(e.target.name === 'performer_name'){
                if(this.errors.performer_name){
                    delete this.errors.performer_name
                }
                if(String(e.target.value).length === 0 ){
                    e.srcElement.classList.add('error')
                    document.getElementById('err-performer_name').style.display = 'flex'
                    document.getElementById('err-text-' + e.target.name).style.display = 'flex'
                } else {
                    e.srcElement.classList.remove('error')
                    document.getElementById('err-performer_name').style.display = 'none'
                    document.getElementById('err-text-' + e.target.name).style.display = 'none'
                }
            }
            if(e.target.name === 'phone'){
                if(this.errors.phone){
                    delete this.errors.phone
                }
                if(String(e.target.value).length !== 16 ){
                    e.srcElement.classList.add('error')
                    document.getElementById('err-phone').style.display = 'flex'
                    document.getElementById('err-text-' + e.target.name).style.display = 'flex'
                } else {
                    e.srcElement.classList.remove('error')
                    document.getElementById('err-phone').style.display = 'none'
                    document.getElementById('err-text-' + e.target.name).style.display = 'none'
                }
            }
            if(e.target.name === 'email'){
                if(this.errors.email){
                    delete this.errors.email
                }
                if (!pattern.test(String(e.target.value).toLowerCase())) {
                    e.srcElement.classList.add('error')
                    document.getElementById('err-email').style.display = 'flex'
                    document.getElementById('err-text-' + e.target.name).style.display = 'flex'
                } else {
                    e.srcElement.classList.remove('error')
                    document.getElementById('err-email').style.display = 'none'
                    document.getElementById('err-text-' + e.target.name).style.display = 'none'
                }
            }
        },
        postUserContact(){
            if(document.getElementsByClassName('error').length !== 0){
                alert('Заполните все поля правильно.')
                return 
            }
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
                this.errors = Object.assign({}, err.response.data.error)
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
                            position: relative;
                            width: 49%;
                            margin-bottom: 32px;
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
                            .error{
                                border: 1px solid #E4002F !important;
                                box-shadow: 0px 0px 10px rgba(228, 0, 47, 0.2) !important;
                            }
                            .err{
                                display: none;
                                position: absolute;
                                top: 46px;
                                right: 18px;
                                width: 20px;
                                height: 20px;
                                border-radius: 50%;

                                background: #FFFFFF;
                                border: 1px solid #E4002F;
                                box-sizing: border-box;
                                svg{
                                    margin-top: 2px;
                                    margin-left: 7px
                                }
                            }
                            .err-text{
                                line-height: 1.2;
                                position: absolute;
                                bottom: -18px;
                                text-align: left;
                                color: #E4002F;
                                font-size: 12px
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

