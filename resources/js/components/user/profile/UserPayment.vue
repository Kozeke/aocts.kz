<template>
    <div class="main">
        <UserSide></UserSide>
        <div class="main-info flex-col">
            <UserNav></UserNav>
            <div class="containe flex-row">
                <UserProfileImg></UserProfileImg>
                <div class="content flex-col">
                    <UserProfileRouteMenu></UserProfileRouteMenu>
                    <div v-if="chosenAccordion" class="accordion">
                        <div class="accordion-title flex-row">
                            <a @click="chosenAccordion = bank_req" v-for="bank_req in allAccordion" :key="bank_req.id" :class="{ 'active' : bank_req.bank_name + bank_req.id === chosenAccordion.bank_name + chosenAccordion.id }">{{ bank_req.bank_name + ' ' + bank_req.id }}</a>
                        </div>
                        <div class="accordion-items">
                            <div class="field-list flex-row">
                                <div class="item flex-col">
                                    <div class="label">Банк оплаты</div>
                                    <input v-if="editMode" v-bind:class="{ 'error' : errors.bank_name }" v-on:keyup="validateForm($event)" v-model="chosenAccordion.bank_name" name="bank_name" type="text" placeholder="Выберите банк" >
                                    <input v-else type="text" :value="chosenAccordion.bank_name ? chosenAccordion.bank_name : 'не заполнено'" readonly>
                                    <span v-if="errors.bank_name" id="err-text-bank_name" class="err-text">{{ errors.bank_name }}</span>
                                    <div :style="{ 'display' : errors.bank_name ? 'flex' : 'none' }" class="err" id="err-bank_name">
                                        <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="item flex-col">
                                    <div class="label">БИК</div>
                                    <input v-if="editMode" v-bind:class="{ 'error' : errors.BIC }" v-on:keyup="validateForm($event)" v-model="chosenAccordion.BIC" name="BIC" style="text-transform:uppercase" type="text" placeholder="000 000 000">
                                    <input v-else type="text" :value="chosenAccordion.BIC ? chosenAccordion.BIC : 'не заполнено'" readonly>
                                    <span v-if="errors.BIC" id="err-text-BIC" class="err-text">{{ errors.BIC }}</span>
                                    <div :style="{ 'display' : errors.BIC ? 'flex' : 'none' }" class="err" id="err-BIC">
                                        <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="item flex-col">
                                    <div class="label">ИИК</div>
                                    <input v-if="addMode" v-model="chosenAccordion.IBAN" v-bind:class="{ 'error' : errors.IBAN }" v-on:keyup="validateForm($event)" name="IBAN" type="text" placeholder="KZ 1000 0000 0000 0000">
                                    <input v-if="!addMode && editMode" v-model="chosenAccordion.IBAN" type="text" placeholder="KZ 1000 0000 0000 0000" readonly>
                                    <input v-if="!addMode && !editMode" type="text" :value="chosenAccordion.IBAN ? chosenAccordion.IBAN : 'не заполнено'" readonly>
                                    <span v-if="errors.IBAN" id="err-text-IBAN" class="err-text">{{ errors.IBAN }}</span>
                                    <div :style="{ 'display' : errors.IBAN ? 'flex' : 'none' }" class="err" id="err-IBAN">
                                        <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="item flex-col">
                                    <div class="label">CB</div>
                                    <input v-if="editMode" v-bind:class="{ 'error' : errors.IBAN }" v-on:keyup="validateForm($event)" v-model="chosenAccordion.CB" name="CB" type="text" placeholder="template ?">
                                    <input v-else type="text" :value="chosenAccordion.CB  ? chosenAccordion.CB  : 'не заполнено'" readonly>
                                    <span v-if="errors.CB" id="err-text-CB" class="err-text">{{ errors.CB }}</span>
                                    <div :style="{ 'display' : errors.CB ? 'flex' : 'none' }" class="err" id="err-CB">
                                        <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <div @click="editMode = false, addMode = false" v-if="editMode" class="cancel-btn">Отмена</div>
                    <div @click="deleteRankReq()" v-if="!editMode" class="delete-btn">Удалить</div>
                    <div @click="postBankReq()" v-if="editMode" class="send-btn">Сохранить изменения</div>
                    <div @click="enterEditMode()" v-if="!editMode" class="edit-btn">Изменить настройки</div>
                    <div @click="addBankReq()" v-if="!editMode" class="new-btn">Добавить реквизиты</div>
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
            addMode: false,
            allAccordion: [],
            chosenAccordion: '',
            bank_name: '',
            BIC: '',
            IBAN: '',
            CB: '',
            errors: ''
        }
    },
    mounted(){
        this.allAccordion = JSON.parse(localStorage.getItem('xyzSessionAoUser')).bank_requisites
        this.chosenAccordion = this.allAccordion[0]
    },
    methods: {
        validateForm(e){
            if(e.target.name === 'bank_name'){
                if(this.errors.bank_name){
                    delete this.errors.bank_name
                }
                if(String(e.target.value).length === 0 ){
                    e.srcElement.classList.add('error')
                    document.getElementById('err-bank_name').style.display = 'flex'
                    document.getElementById('err-text-' + e.target.name).style.display = 'flex'
                } else {
                    e.srcElement.classList.remove('error')
                    document.getElementById('err-bank_name').style.display = 'none'
                    document.getElementById('err-text-' + e.target.name).style.display = 'none'
                }
            }
            if(e.target.name === 'BIC'){
                if(this.errors.BIC){
                    delete this.errors.BIC
                }
                if(String(e.target.value).length === 0 ){
                    e.srcElement.classList.add('error')
                    document.getElementById('err-BIC').style.display = 'flex'
                    document.getElementById('err-text-' + e.target.name).style.display = 'flex'
                } else {
                    e.srcElement.classList.remove('error')
                    document.getElementById('err-BIC').style.display = 'none'
                    document.getElementById('err-text-' + e.target.name).style.display = 'none'
                }
            }
            if(e.target.name === 'IBAN'){
                if(this.errors.IBAN){
                    delete this.errors.IBAN
                }
                if(String(e.target.value).length === 0 ){
                    e.srcElement.classList.add('error')
                    document.getElementById('err-IBAN').style.display = 'flex'
                    document.getElementById('err-text-' + e.target.name).style.display = 'flex'
                } else {
                    e.srcElement.classList.remove('error')
                    document.getElementById('err-IBAN').style.display = 'none'
                    document.getElementById('err-text-' + e.target.name).style.display = 'none'
                }
            }
            if(e.target.name === 'CB'){
                if(this.errors.CB){
                    delete this.errors.CB
                }
                if(String(e.target.value).length === 0 ){
                    e.srcElement.classList.add('error')
                    document.getElementById('err-CB').style.display = 'flex'
                    document.getElementById('err-text-' + e.target.name).style.display = 'flex'
                } else {
                    e.srcElement.classList.remove('error')
                    document.getElementById('err-CB').style.display = 'none'
                    document.getElementById('err-text-' + e.target.name).style.display = 'none'
                }
            }

        },
        enterEditMode(){
            if(this.allAccordion.length){
                this.editMode = true
            }
        },
        toggle(){
            this.contentVisible = !this.contentVisible
        },
        postBankReq(){
            
            if( this.chosenAccordion.bank_name === undefined ){
                document.getElementsByName('bank_name')[0].classList.add('error')
            }
            if( this.chosenAccordion.BIC === undefined ){
                document.getElementsByName('BIC')[0].classList.add('error')
            }
            if( this.chosenAccordion.IBAN === undefined ){
                document.getElementsByName('IBAN')[0].classList.add('error')
            }
            if( this.chosenAccordion.CB === undefined ){
                document.getElementsByName('CB')[0].classList.add('error')
            }
            
            if(document.getElementsByClassName('error').length !== 0){
                alert('Заполните все поля правильно.')
                return 
            }

            axios.post('/api/user/edit/bank/requisites?bank_name=' + this.chosenAccordion.bank_name + '&BIC=' + 
                this.chosenAccordion.BIC + '&IBAN=' + this.chosenAccordion.IBAN + '&CB=' + this.chosenAccordion.CB + '&user_id=' + JSON.parse(localStorage.getItem('xyzSessionAoUser')).id, null, {
                headers: { 
                    'Authorization' : 'Bearer ' + JSON.parse(localStorage.getItem('xyzSessionAo')).token
                },
            })
            .then(res => {
                alert('Вы успешно сменили/добавили реквизите')
                let userSt = JSON.parse(localStorage.getItem('xyzSessionAoUser'))
                localStorage.removeItem('xyzSessionAoUser')
                userSt.bank_requisites = res.data[1]
                localStorage.setItem('xyzSessionAoUser', JSON.stringify(userSt))
                location.reload()
            })
            .catch(err => {
                this.errors = Object.assign({}, err.response.data.error)
                console.log(err)
            });
        },
        addBankReq(){
            this.chosenAccordion = {}
            this.addMode = true
            this.editMode = true
        },
        deleteRankReq(){
            axios.delete('/api/user/delete/bank/requisites?id=' + this.chosenAccordion.id, {
                headers: { 
                    'Authorization' : 'Bearer ' + JSON.parse(localStorage.getItem('xyzSessionAo')).token
                },
            })
            .then(res => {
                alert('Вы успешно удалили реквизит')
                this.$router.push({ name : 'profile' })
            })
            .catch(err => {
                alert(err.response.data.error)
                console.log(err.data)
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
                    .accordion{
                        padding: 24px;
                        .accordion-title{
                            border-top-left-radius: 10px;
                            border-top-right-radius: 10px;
                            border: 1px solid #e6e6e6;
                            background: #FDFDFD;
                            overflow: hidden;
                            a{
                                // margin: 0 auto;
                                text-align: center;
                                border-right: 1px solid #e6e6e6;
                                cursor: pointer;
                                color: #06397D;
                                padding: 6px 18px;
                            }
                            a:last-of-type{
                                border-right: none;
                            }
                            a.active{
                                background: #06397D;
                                color: #FDFDFD;
                            }
                        }
                    }
                    .field-list{
                        padding: 24px;
                        flex-wrap: wrap;
                        border-bottom-left-radius: 10px;
                        border-bottom-right-radius: 10px;
                        border: 1px solid #e6e6e6;
                        border-top: none;
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
                    .cancel-btn, .send-btn, .edit-btn, .new-btn, .delete-btn{
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
                    .cancel-btn, .new-btn{
                        right: 290px;
                    }
                    .delete-btn{
                        right: 550px;
                    }
                }
            }
        }
    }
</style>

