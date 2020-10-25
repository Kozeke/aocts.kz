<template>
    <div class="main">
        <UserSide></UserSide>
        <div v-if="userData" class="main-info flex-col">
            <UserNav></UserNav>
            <div class="containe flex-row">
                <UserProfileImg :user="userData"></UserProfileImg>
                <div class="content flex-col">
                    <UserProfileRouteMenu></UserProfileRouteMenu>
                    <div class="field-list flex-row">
                        <div class="item flex-col">
                            <div class="label">БИН/ИНН</div>
                            <input v-bind:class="{ 'error' : errors.BIN }" v-on:keyup="validateForm($event)" v-model="userData.BIN" v-if="editMode" oninput="validity.valid||(value='');" v-mask="'### ### ### ###'" name="BIN" type="text" placeholder="000 000 000 000" >
                            <input v-else type="text" :value="userData.BIN" readonly>
                            <span v-if="errors.BIN" id="err-text-BIN" class="err-text">{{ errors.BIN }}</span>
                            <div :style="{ 'display' : errors.BIN ? 'flex' : 'none' }" class="err" id="err-BIN">
                                <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                                </svg>
                            </div>
                        </div>
                        <div class="item flex-col">
                            <div class="label">Название компании</div>
                            <input v-bind:class="{ 'error' : errors.name_of_company }" v-on:keyup="validateForm($event)" v-if="editMode" v-model="userData.name_of_company" name="name_of_company" type="text" placeholder="Some company.">
                            <input v-else type="text" :value="userData.name_of_company" readonly>
                            <span v-if="errors.name_of_company" id="err-text-name_of_company" class="err-text">{{ errors.name_of_company }}</span>
                            <div :style="{ 'display' : errors.name_of_company ? 'flex' : 'none' }" class="err" id="err-name_of_company">
                                <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                                </svg>
                            </div>
                        </div>
                        <div class="item flex-col">
                            <div class="label">Вид деятельности</div>
                            <input v-bind:class="{ 'error' : errors.type_of_agency }" v-on:keyup="validateForm($event)" v-if="editMode" v-model="userData.type_of_agency" name="type_of_agency" type="text" placeholder="Информационные Технологии">
                            <input v-else type="text" :value="userData.type_of_agency" readonly>
                            <span v-if="errors.type_of_agency" id="err-text-type_of_agency" class="err-text">{{ errors.type_of_agency }}</span>
                            <div :style="{ 'display' : errors.type_of_agency ? 'flex' : 'none' }" class="err" id="err-type_of_agency">
                                <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                                </svg>
                            </div>
                        </div>
                        <div class="item flex-col">
                            <div class="label">Электронная почта компании</div>
                            <input v-bind:class="{ 'error' : errors.company_email }" v-on:keyup="validateForm($event)" v-model="userData.company_email" name="company_email" v-if="editMode" type="text" placeholder="email@company.kz">
                            <input v-else type="text" :value="userData.company_email" readonly>
                            <span v-if="errors.company_email" id="err-text-company_email" class="err-text">{{ errors.company_email }}</span>
                            <div :style="{ 'display' : errors.company_email ? 'flex' : 'none' }" class="err" id="err-company_email">
                                <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                                </svg>
                            </div>
                        </div>
                        <div class="item flex-col">
                            <div class="label">Фактический адрес компании</div>
                            <input v-bind:class="{ 'error' : errors.real_address || errors.real_locality_id }" v-model="real_address" @click="modalActualAddress = true" v-if="editMode" type="text" placeholder="г. Караганда, ул. Шахтеров" readonly>
                            <input v-else type="text" :value="real_address" readonly>
                            <span v-if="errors.real_address || errors.real_locality_id" id="err-text-real_address" class="err-text">{{ errors.real_address + ' ' + errors.real_locality_id }}</span>
                            <div :style="{ 'display' : errors.real_address || errors.real_locality_id ? 'flex' : 'none' }" class="err" id="err-real_address">
                                <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                                </svg>
                            </div>
                        </div>
                        <div class="item flex-col">
                            <div class="label">Юридический адрес компании</div>
                            <input v-bind:class="{ 'error' : errors.juridical_address || errors.juridical_locality_id }" v-model="juridical_address" @click="modalLegalAddress = true" v-if="editMode" type="text" placeholder="г. Нур-Султан, ул. Достык" readonly>
                            <input v-else type="text" :value="juridical_address" readonly>
                            <span v-if="errors.juridical_address || errors.juridical_locality_id" id="err-text-juridical_address" class="err-text">{{ errors.juridical_address + ' ' + errors.juridical_locality_id }}</span>
                            <div :style="{ 'display' :  errors.juridical_address || errors.juridical_locality_id ? 'flex' : 'none' }" class="err" id="err-juridical_address">
                                <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div @click="editMode = !editMode" v-if="editMode" class="cancel-btn">Отмена</div>
                    <div @click="postProfileChange()" v-if="editMode" class="send-btn">Отправить запрос на изменение данных</div>
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
                    <div class="input-form flex-col">
                        <label class="label">Выберите регион</label>
                        <select v-bind:class="{ 'error' : errors.real_locality_id }" name="real_selected_region" class="input-form" v-model="real_selected_region">
                            <option :value="'Выберите'" disabled>Выберите</option>
                            <option v-for="region in regions" :value="region.id" :key="region.id">
                                {{ region.name }}
                            </option>
                        </select>
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">Выберите город</label>
                        <select v-bind:class="{ 'error' : errors.real_locality_id }" name="real_selected_district" v-if="real_selected_region !== 'Выберите'" class="input-form" v-model="real_selected_district">
                            <option :value="'Выберите'" disabled>Выберите</option>
                            <option v-for="region in regions.find(x => x.id === real_selected_region).localities" :value="region" :key="region.id">
                                {{ region.name }}
                            </option>
                            <option v-for="region in regions.find(x => x.id === real_selected_region).districts" :value="region" :key="region.id">
                                {{ region.name }}
                            </option>
                        </select>
                        <select v-else class="input-form not-selected" v-model="real_selected_district">
                            <option :value="'Выберите'" disabled>Выберите</option>
                        </select>
                    </div>
                    <div v-if="real_selected_district.is_city !== 1" class="input-form flex-col">
                        <label class="label">Выберите район</label>
                        <select v-bind:class="{ 'error' : errors.real_locality_id }" name="selected_locality" v-if="real_selected_district !== 'Выберите' || real_selected_district.is_city === 0" class="input-form" v-model="real_selected_locality">
                            <option :value="'Выберите'" disabled>Выберите</option>
                            <option v-for="region in regions.find(x => x.id === real_selected_region).districts.find(x => x.id === real_selected_district.id).localities" :value="region" :key="region.id">
                                {{ region.name }}
                            </option>
                        </select>
                        <select v-else class="input-form not-selected" v-model="real_selected_district">
                            <option :value="'Выберите'" disabled>Выберите</option>
                        </select>
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">Адрес</label>
                        <input v-bind:class="{ 'error' : errors.real_address }" v-on:keyup="validateForm($event)" v-model="real_address" name="real_address" type="text" placeholder="Введите адрес (офис, каб)">
                    </div>
                </div>
                <div @click="validateActualAddress()" class="done-btn">Готово</div>
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
                    <div class="input-form flex-col">
                        <label class="label">Выберите регион</label>
                        <select v-bind:class="{ 'error' : errors.juridical_locality_id }" name="juridical_selected_region" class="input-form" v-model="juridical_selected_region">
                            <option :value="'Выберите'" disabled>Выберите</option>
                            <option v-for="region in regions" :value="region.id" :key="region.id">
                                {{ region.name }}
                            </option>
                        </select>
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">Выберите город</label>
                        <select v-bind:class="{ 'error' : errors.juridical_locality_id }" name="juridical_selected_district" v-if="juridical_selected_region !== 'Выберите'" class="input-form" v-model="juridical_selected_district">
                            <option :value="'Выберите'" disabled>Выберите</option>
                            <option v-for="region in regions.find(x => x.id === juridical_selected_region).localities" :value="region" :key="region.id">
                                {{ region.name }}
                            </option>
                            <option v-for="region in regions.find(x => x.id === juridical_selected_region).districts" :value="region" :key="region.id">
                                {{ region.name }}
                            </option>
                        </select>
                        <select v-else class="input-form not-selected" v-model="juridical_selected_district">
                            <option :value="'Выберите'" disabled>Выберите</option>
                        </select>
                    </div>
                    <div v-if="juridical_selected_district.is_city !== 1" class="input-form flex-col">
                        <label class="label">Выберите район</label>
                        <select v-bind:class="{ 'error' : errors.juridical_locality_id }" name="selected_locality" v-if="juridical_selected_district !== 'Выберите' || juridical_selected_district.is_city === 0" class="input-form" v-model="juridical_selected_locality">
                            <option :value="'Выберите'" disabled>Выберите</option>
                            <option v-for="region in regions.find(x => x.id === juridical_selected_region).districts.find(x => x.id === juridical_selected_district.id).localities" :value="region" :key="region.id">
                                {{ region.name }}
                            </option>
                        </select>
                        <select v-else class="input-form not-selected" v-model="juridical_selected_district">
                            <option :value="'Выберите'" disabled>Выберите</option>
                        </select>
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">Адрес</label>
                        <input v-bind:class="{ 'error' : errors.juridical_address }" v-on:keyup="validateForm($event)" v-model="juridical_address" name="juridical_address" type="text" placeholder="Введите адрес (офис, каб)">
                    </div>
                </div>
                <div @click="validateLegalAddress()" class="done-btn">Готово</div>
            </div>
        </div>
    </div>
</template>
<script>
import UserSide from '../UserSide'
import UserNav from '../UserNav'
import UserProfileImg from './UserProfileImg'
import UserProfileRouteMenu from './UserProfileRouteMenu'
import axios from 'axios'

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
            modalLegalAddress: false,
            regions: '',
            userToken: '',
            userData: '',
            real_locality_id: '',
            juridical_locality_id: '',
            real_address: '',
            juridical_address: '',

            real_selected_region: 'Выберите',
            real_selected_district: 'Выберите',
            real_selected_locality: 'Выберите',

            juridical_selected_region: 'Выберите',
            juridical_selected_district: 'Выберите',
            juridical_selected_locality: 'Выберите',
            errors: ''
        }
    },
    mounted(){
        this.userToken = JSON.parse(localStorage.getItem('xyzSessionAo')).token
        this.init()
        this.getRegions()
    },
    methods: {
        validateForm(e){
            const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(e.target.name === 'BIN'){
                if(this.errors.BIN){
                    delete this.errors.BIN
                }
                if(String(e.target.value).length !== 15 ){
                    e.srcElement.classList.add('error')
                    document.getElementById('err-BIN').style.display = 'flex'
                    document.getElementById('err-text-' + e.target.name).style.display = 'flex'
                } else {
                    e.srcElement.classList.remove('error')
                    document.getElementById('err-BIN').style.display = 'none'
                    document.getElementById('err-text-' + e.target.name).style.display = 'none'
                }
            }
            if(e.target.name === 'name_of_company'){
                if(this.errors.name_of_company){
                    delete this.errors.name_of_company
                }
                if(String(e.target.value).length === 0 ){
                    e.srcElement.classList.add('error')
                    document.getElementById('err-name_of_company').style.display = 'flex'
                    document.getElementById('err-text-' + e.target.name).style.display = 'flex'
                } else {
                    e.srcElement.classList.remove('error')
                    document.getElementById('err-name_of_company').style.display = 'none'
                    document.getElementById('err-text-' + e.target.name).style.display = 'none'
                }
            }
            if(e.target.name === 'type_of_agency'){
                if(this.errors.type_of_agency){
                    delete this.errors.type_of_agency
                }
                if(String(e.target.value).length === 0 ){
                    e.srcElement.classList.add('error')
                    document.getElementById('err-type_of_agency').style.display = 'flex'
                    document.getElementById('err-text-' + e.target.name).style.display = 'flex'
                } else {
                    e.srcElement.classList.remove('error')
                    document.getElementById('err-type_of_agency').style.display = 'none'
                    document.getElementById('err-text-' + e.target.name).style.display = 'none'
                }
            }
            if(e.target.name === 'company_email'){
                if(this.errors.company_email){
                    delete this.errors.company_email
                }
                if (!pattern.test(String(e.target.value).toLowerCase())) {
                    e.srcElement.classList.add('error')
                    document.getElementById('err-company_email').style.display = 'flex'
                    document.getElementById('err-text-' + e.target.name).style.display = 'flex'
                } else {
                    e.srcElement.classList.remove('error')
                    document.getElementById('err-company_email').style.display = 'none'
                    document.getElementById('err-text-' + e.target.name).style.display = 'none'
                }
            }
            if(e.target.name === 'real_address'){
                if(this.errors.real_address){
                    delete this.errors.real_address
                }
                if(String(e.target.value).length === 0 ){
                    e.srcElement.classList.add('error')
                } else {
                    e.srcElement.classList.remove('error')
                }
            }
            if(e.target.name === 'juridical_address'){
                if(this.errors.juridical_address){
                    delete this.errors.juridical_address
                }
               if(String(e.target.value).length === 0 ){
                    e.srcElement.classList.add('error')
                } else {
                    e.srcElement.classList.remove('error')
                }
            }
        },
        validateActualAddress(){
            if( this.real_locality_id === '' || this.real_selected_region === 'Выберите' || 
             this.real_selected_district === 'Выберите' || this.real_address === '' ){
                alert( 'Заполните все поля.' )
             } else {
                this.modalActualAddress = false
             }
        },
        validateLegalAddress(){
            if( this.juridical_locality_id === '' || this.juridical_selected_region === 'Выберите' || 
             this.juridical_selected_district === 'Выберите' || this.juridical_address === '' ){
                alert( 'Заполните все поля.' )
             } else {
                this.modalLegalAddress = false
             }
        },
        getRegions(){
            axios.get('/api/regions')
            .then(res => {
                this.regions = res.data
            })
            .catch(err => {
                console.log(err)
            })
        },
        init(){
            axios.get('/api/user/data', {
                headers: { 
                        'Authorization' : 'Bearer ' + this.userToken
                    }
                })
                .then(res => {
                    this.userData = res.data.user[0]
                    console.log(this.userData)
                    if(localStorage.getItem('xyzSessionAoUser')){
                        localStorage.removeItem('xyzSessionAoUser')
                    }
                    localStorage.setItem('xyzSessionAoUser', JSON.stringify( this.userData))
                    this.real_address = this.userData.real_address
                    this.juridical_address = this.userData.juridical_address
                    this.real_locality_id = this.userData.real_locality_id
                    this.juridical_locality_id = this.userData.juridical_locality_id
                }).catch(err => {
                    this.errors = Object.assign({}, err.response.data.error)
                    console.log(err.data)
            })
        },
        postProfileChange(){
            var real_city = this.real_selected_locality
            if(this.real_selected_district.is_city === 1){
                real_city = this.real_selected_district
            } 
            var juridical_city = this.juridical_selected_locality
            if(this.juridical_selected_district.is_city === 1){
                juridical_city = this.juridical_selected_district
            } 

            if(real_city === 'Выберите'){
                real_city = {
                    id: this.userData.real_locality_id
                }
            }
            if(juridical_city === 'Выберите'){
                juridical_city = {
                    id: this.userData.juridical_locality_id
                }
            }

            if(document.getElementsByClassName('error').length !== 0){
                alert('Заполните все поля правильно.')
                return 
            }
           
            axios.post('/api/user/edit/main', null, {
                headers: { 
                    'Authorization' : 'Bearer ' + JSON.parse(localStorage.getItem('xyzSessionAo')).token
                },
                params: {
                    id: JSON.parse(localStorage.getItem('xyzSessionAoUser')).id,
                    name_of_company: this.userData.name_of_company,
                    BIN: this.userData.BIN.replace(/\s+/g, ''),
                    type_of_agency: this.userData.type_of_agency,
                    company_email: this.userData.company_email,
                    real_locality_id: real_city.id,
                    juridical_locality_id: juridical_city.id,
                    real_address: this.real_address,
                    juridical_address: this.juridical_address
                }
            })
            .then(res => {
                console.log(res.data)
                alert('Ваши данные успешно сохранены')
                location.reload()
            }).catch(err => {
                this.errors = Object.assign({}, err.response.data.error)
                console.log(err)
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
                margin: 120px auto auto auto;
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
                    .input-form{
                        width: 48%;
                        position: relative;
                        margin-top: 18px;
                        height: 98px;
                        .label{
                            text-align: left;
                            font-weight: 500;
                            font-size: 16px;
                            line-height: 20px;
                        }
                        input, select{
                            width: 100%;
                            cursor: initial;
                            padding-left: 18px;
                            text-align: left;
                            margin-top: 5px;
                            height: 50px;
                            font-weight: normal;
                            font-size: 14px;
                            line-height: 22px;
                            color: #000000;
                            background: #FFFFFF;
                            border: 1px solid #E6EAF3;
                            box-sizing: border-box;
                            border-radius: 6px;
                        }
                        .error{
                            border: 1px solid #E4002F !important;
                            box-shadow: 0px 0px 10px rgba(228, 0, 47, 0.2) !important;
                        }
                        .err{
                            visibility: hidden;
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
                                margin-top: -8px;
                            }
                        }
                        .err-text{
                            line-height: 1.2;
                            position: absolute;
                            bottom: 0;
                            text-align: left;
                            color: #E4002F;
                            font-size: 12px
                        }
                        select{
                            padding: 18px auto;
                            -webkit-appearance: none;
                            -moz-appearance : none;
                            color: #000000;
                            option{
                                color: #000000;
                            }
                        }
                        .not-selected{
                            color: rgba(111, 111, 111, 0.25);
                        }
                        ::placeholder{
                            font-weight: normal;
                            font-size: 14px;
                            line-height: 22px;
                            color: rgba(111, 111, 111, 0.25);
                        }
                    }
                    .input-form:nth-of-type(2n){
                        margin-left: 4%;
                    }
                }
                .done-btn{
                    width: 144px;
                    cursor: pointer;
                    margin: 40px auto 0 auto;
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

