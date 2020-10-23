<template>
    <div class="main">
        <UserSide></UserSide>
        <div class="main-info flex-col">
            <UserNav></UserNav>
            <div class="containe flex-row">
                <UserProfileImg></UserProfileImg>
                <div class="content flex-col">
                    <UserProfileRouteMenu></UserProfileRouteMenu>
                    <div class="accordion">
                        <div class="accordion-title flex-row">
                            <a @click="chosenAccordion = bank_req" v-for="bank_req in allAccordion" :key="bank_req.id" :class="{ 'active' : bank_req.bank_name + bank_req.id === chosenAccordion.bank_name + chosenAccordion.id }">{{ bank_req.bank_name + ' ' + bank_req.id }}</a>
                        </div>
                        <div class="accordion-items">
                            <div class="field-list flex-row">
                                <div class="item flex-col">
                                    <div class="label">Банк оплаты</div>
                                    <input v-if="editMode" v-model="chosenAccordion.bank_name" type="text" placeholder="Выберите банк" >
                                    <input v-else type="text" :value="chosenAccordion.bank_name ? chosenAccordion.bank_name : 'не заполнено'" readonly>
                                </div>
                                <div class="item flex-col">
                                    <div class="label">БИК</div>
                                    <input v-if="editMode" v-model="chosenAccordion.BIC" type="text" placeholder="000 000 000">
                                    <input v-else type="text" :value="chosenAccordion.BIC ? chosenAccordion.BIC : 'не заполнено'" readonly>
                                </div>
                                <div class="item flex-col">
                                    <div class="label">ИИК</div>
                                    <input v-if="addMode" v-model="chosenAccordion.IBAN" type="text" placeholder="KZ 1000 0000 0000 0000">
                                    <input v-if="!addMode && editMode" v-model="chosenAccordion.IBAN" type="text" placeholder="KZ 1000 0000 0000 0000" readonly>
                                    <input v-if="!addMode && !editMode" type="text" :value="chosenAccordion.IBAN ? chosenAccordion.IBAN : 'не заполнено'" readonly>
                                </div>
                                <div class="item flex-col">
                                    <div class="label">CB</div>
                                    <input v-if="editMode" v-model="chosenAccordion.CB " type="text" placeholder="template ?">
                                    <input v-else type="text" :value="chosenAccordion.CB  ? chosenAccordion.CB  : 'не заполнено'" readonly>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <div @click="editMode = false, addMode = false" v-if="editMode" class="cancel-btn">Отмена</div>
                    <div @click="postBankReq()" v-if="editMode" class="send-btn">Сохранить изменения</div>
                    <div @click="editMode = !editMode" v-if="!editMode" class="edit-btn">Изменить настройки</div>
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
            CB: ''
        }
    },
    mounted(){
        this.allAccordion = JSON.parse(localStorage.getItem('xyzSessionAoUser')).bank_requisites
        this.chosenAccordion = this.allAccordion[0]
    },
    methods: {
        toggle(){
            this.contentVisible = !this.contentVisible
        },
        postBankReq(){
            axios.post('/api/user/edit/bank/requisites?bank_name=' + this.chosenAccordion.bank_name + '&BIC=' + 
                this.chosenAccordion.BIC + '&IBAN=' + this.chosenAccordion.IBAN + '&CB=' + this.chosenAccordion.CB + '&user_id=' + JSON.parse(localStorage.getItem('xyzSessionAoUser')).id, null, {
                headers: { 
                    'Authorization' : 'Bearer ' + JSON.parse(localStorage.getItem('xyzSessionAo')).token
                },
            })
            .then(res => {
                alert('Вы успешно сменили/добавили реквизите')
                let userSt = JSON.parse(localStorage.getItem('xyzSessionAoUser'))
                localStorage.removeItem('xyzSessionAoUser');
                userSt.bank_requisites = res.data[1]
                localStorage.setItem('xyzSessionAoUser', JSON.stringify(userSt));
                location.reload()
            })
            .catch(err => {
                alert('Неизвестная ошибка')
                console.log(err.data)
            });
        },
        addBankReq(){
            this.chosenAccordion = {}
            this.addMode = true
            this.editMode = true
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
                        }
                        .item:nth-of-type(2n){
                            margin-left: 2%;
                        }
                    }
                    .cancel-btn, .send-btn, .edit-btn, .new-btn{
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
                        right: 300px;
                    }
                }
            }
        }
    }
</style>

