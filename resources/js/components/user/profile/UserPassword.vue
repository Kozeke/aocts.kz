<template>
    <div class="main">
        <UserSide></UserSide>
        <div class="main-info flex-col">
            <UserNav></UserNav>
            <div class="containe flex-row">
                <UserProfileImg></UserProfileImg>
                <div class="content flex-col">
                    <UserProfileRouteMenu></UserProfileRouteMenu>
                    <div class="field-list flex-col">
                        <div class="item flex-col">
                            <div class="label">Текущий пароль</div>
                            <input v-bind:class="{ 'error' : errors.current_password }" v-on:keyup="validateForm($event)" v-model="current_password" name="current_password" type="password" placeholder="" >
                            <span v-if="errors.current_password" id="err-text-current_password" class="err-text">{{ errors.current_password }}</span>
                            <div :style="{ 'display' : errors.current_password ? 'flex' : 'none' }" class="err" id="err-current_password">
                                <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                                </svg>
                            </div>
                        </div>
                        <div class="item flex-col">
                            <div class="label">Новый пароль</div>
                            <input v-bind:class="{ 'error' : errors.new_password }" v-on:keyup="validateForm($event)" v-model="new_password" name="new_password" type="password" placeholder="" >
                            <span v-if="errors.new_password" id="err-text-new_password" class="err-text">{{ errors.new_password[0] }}</span>
                            <div :style="{ 'display' : errors.new_password ? 'flex' : 'none' }" class="err" id="err-new_password">
                                <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                                </svg>
                            </div>
                        </div>
                        <div class="item flex-col">
                            <div class="label">Повторите новый пароль</div>
                            <input v-bind:class="{ 'error' : errors.new_password }" v-on:keyup="validateForm($event)" v-model="new_password_re" name="new_password_re" type="password" placeholder="" >
                            <span v-if="errors.new_password_re" id="err-text-new_password_re" class="err-text">{{ errors.new_password[0] }}</span>
                            <div :style="{ 'display' : errors.new_password_re ? 'flex' : 'none' }" class="err" id="err-new_password_re">
                                <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div @click="current_password = '', new_password = '', new_password_re = ''" class="cancel-btn">Отмена</div>
                    <div @click="changePwd()" class="send-btn">Сохранить изменения</div>
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
            current_password: '',
            new_password: '',
            new_password_re: '',
            errors: ''
        }
    },
    methods:{
        validateForm(e){
            if(e.target.name === 'current_password'){
                if(this.errors.current_password){
                    delete this.errors.current_password
                }
                if(String(e.target.value).length === 0 ){
                    e.srcElement.classList.add('error')
                    document.getElementById('err-current_password').style.display = 'flex'
                    document.getElementById('err-text-' + e.target.name).style.display = 'flex'
                } else {
                    e.srcElement.classList.remove('error')
                    document.getElementById('err-current_password').style.display = 'none'
                    document.getElementById('err-text-' + e.target.name).style.display = 'none'
                }
            }
            if(e.target.name === 'new_password'){
                if(this.errors.new_password){
                    delete this.errors.new_password
                }
                if(String(e.target.value).length < 6 ){
                    e.srcElement.classList.add('error')
                    document.getElementById('err-new_password').style.display = 'flex'
                    document.getElementById('err-text-' + e.target.name).style.display = 'flex'
                } else {
                    e.srcElement.classList.remove('error')
                    document.getElementById('err-new_password').style.display = 'none'
                    document.getElementById('err-text-' + e.target.name).style.display = 'none'
                }
            }
            if(e.target.name === 'new_password_re'){
                if(this.errors.new_password){
                    delete this.errors.new_password
                }
                if(String(e.target.value) !==  this.new_password){
                    e.srcElement.classList.add('error')
                    document.getElementById('err-new_password_re').style.display = 'flex'
                    document.getElementById('err-text-' + e.target.name).style.display = 'flex'
                } else {
                    e.srcElement.classList.remove('error')
                    document.getElementById('err-new_password_re').style.display = 'none'
                    document.getElementById('err-text-' + e.target.name).style.display = 'none'
                }
            }
        },
        changePwd(){
            if( this.new_password === '' || this.new_password_re === '' || this.current_password === '' ){
                alert('Заполните все поля.')
                return
            }
            if( this.new_password !== this.new_password_re ){
                alert('Пароли не одинаковы.')
                return
            }
            axios.post('api/user/change/password?current_password=' + this.current_password + '&new_password=' + 
                this.new_password + '&id=' + JSON.parse(localStorage.getItem('xyzSessionAoUser')).id, null, {
                    headers: { 
                        'Authorization' : 'Bearer ' + JSON.parse(localStorage.getItem('xyzSessionAo')).token
                    }
                })
            .then(res => {
                alert('Вы успешно сменили пароль')
                location.reload()
                console.log(res.data)
            })
            .catch(err => {
                this.errors = Object.assign({}, err.response.data.error)
                console.log(err.response.data.error)
            });
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
                    }
                    .cancel-btn, .send-btn{
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

