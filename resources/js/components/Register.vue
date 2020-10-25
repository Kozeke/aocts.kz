<template>
    <div class="main flex-row">
        <div @click="$router.push({ name: 'home' })" class="logo">DARIS</div>
        <div v-if="userRegistration" class="register">
            <div class="reg-top flex-row">
                <div class="header">Регистрация</div>
                <div class="dis-d flex-row">
                    <div class="step">Шаг</div>
                    <div v-bind:class="{ 'current-step' : firstPage }" @click="firstPage = true" class="one">1</div>
                    <div v-bind:class="{ 'current-step' : !firstPage }" @click="firstPage = false" class="two">2</div>
                </div>
                <div class="reg-top-r flex-row">
                    <label>У Вас уже есть аккаунт?</label>
                    <span @click="$router.push({ name: 'login' })">Войти в систему</span>
                </div>
            </div>
            <div v-if="firstPage" class="top-sub-one">Пожалуйста заполните все необходимые данные,</div>
            <div v-if="firstPage" class="top-sub-last">Мы ответственно подходим к работе с каждым клиентом.</div>
            <div v-if="firstPage" class="reg-form flex-row">
                <div class="input-form flex-col">
                    <label class="label">Название компании</label>
                    <input v-bind:class="{ 'error' : errors.name_of_company }" v-on:keyup="validateForm($event)" v-model="name_of_company" name="name_of_company" type="text" placeholder="Введите название компании">
                    <span v-if="errors.name_of_company" id="err-text-name_of_company" class="err-text">{{ errors.name_of_company[0] }}</span>
                    <div :style="{ 'visibility' : errors.name_of_company ? 'visible' : 'hidden' }" class="err" id="err-name_of_company">
                        <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                        </svg>
                    </div>
                </div>
                <div class="input-form flex-col">
                    <label class="label">ФИО первого руководителя</label>
                    <input v-bind:class="{ 'error' : errors.manager_name }" v-on:keyup="validateForm($event)" v-model="manager_name" name="manager_name" type="text" placeholder="Введите ФИО руководителя">
                    <span v-if="errors.manager_name" id="err-text-manager_name" class="err-text">{{ errors.manager_name[0] }}</span>
                    <div :style="{ 'visibility' : errors.manager_name ? 'visible' : 'hidden' }" class="err" id="err-manager_name">
                        <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                        </svg>
                    </div>
                </div>
                <div class="input-form flex-col">
                    <label class="label">Резидент РК</label>
                    <div class="radio-field flex-col">
                        <div class="flex-row">
                            <input type="radio" value="1" v-model="resident_of_RK">
                            <label class="radio-label">Да, я являюсь резидентом РК</label>
                        </div>
                        <div class="flex-row">
                            <input type="radio" value="0" v-model="resident_of_RK">
                            <label class="radio-label" >Нет, я резидент другой страны</label>
                        </div>
                    </div>
                    <!-- <input v-bind:class="{ 'error' : errors.name }" v-on:keyup="validateForm($event)" v-model="name" name="name" type="text" placeholder="Введите ФИО руководителя"> -->
                    <!-- <span v-if="errors.name" id="err-text-name" class="err-text">{{ errors.name[0] }}</span>
                    <div :style="{ 'visibility' : errors.name ? 'visible' : 'hidden' }" class="err" id="err-name">
                        <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                        </svg>
                    </div> -->
                </div>
                <div v-show="resident_of_RK === '0'" class="input-form flex-col">
                    <label class="label">Страна резидентства</label>
                    <input v-on:keyup="validateForm($event)" v-model="country" name="country" type="text" placeholder="Введите страну">
                    <!-- <span v-if="errors.BIN" id="err-text-BIN" class="err-text">{{ errors.BIN[0] }}</span>
                    <div :style="{ 'visibility' : errors.BIN ? 'visible' : 'hidden' }" class="err" id="err-BIN">
                        <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                        </svg>
                    </div> -->
                </div>
                <div class="input-form flex-col">
                    <label class="label">Электронная почта компании</label>
                    <input v-bind:class="{ 'error' : errors.company_email }" v-on:keyup="validateForm($event)" v-model="company_email" name="company_email" type="text" placeholder="Введите email">
                    <span v-if="errors.company_email" id="err-text-company_email" class="err-text">{{ errors.company_email[0] }}</span>
                    <div :style="{ 'visibility' : errors.BIN ? 'visible' : 'hidden' }" class="err" id="err-company_email">
                        <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                        </svg>
                    </div>
                </div>
                <div class="input-form flex-col">
                    <label class="label">БИН/ИНН</label>
                    <input v-bind:class="{ 'error' : errors.BIN }" v-on:keyup="validateForm($event)" v-model="BIN" name="BIN" oninput="validity.valid||(value='');" v-mask="'############'" placeholder="Введите 12 значный код">
                    <span v-if="errors.BIN" id="err-text-BIN" class="err-text">{{ errors.BIN[0] }}</span>
                    <div :style="{ 'visibility' : errors.BIN ? 'visible' : 'hidden' }" class="err" id="err-BIN">
                        <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                        </svg>
                    </div>
                </div>
                <div class="input-form flex-col">
                    <label class="label">Пароль</label>
                    <input v-bind:class="{ 'error' : errors.password }" v-on:keyup="validateForm($event)" v-model="password" name="password" type="password" placeholder="Введите пароль">
                    <span v-if="errors.password" id="err-text-password" class="err-text">{{ errors.password[0] }}</span>
                    <div :style="{ 'visibility' : errors.password ? 'visible' : 'hidden' }" class="err" id="err-password">
                        <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                        </svg>
                    </div>
                </div>
                <div class="input-form flex-col">
                    <label class="label">Повторите пароль</label>
                    <input v-bind:class="{ 'error' : errors.password }" v-on:keyup="validateForm($event)" v-model="password_repeat" name="password_repeat" type="password" placeholder="Введите пароль ещё раз">
                    <span v-if="errors.password" id="err-text-password_repeat" class="err-text">{{ errors.password[0] }}</span>
                    <div :style="{ 'visibility' : errors.password ? 'visible' : 'hidden' }" class="err" id="err-password_repeat">
                        <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                        </svg>
                    </div>
                </div>
                <div class="input-form flex-col">
                    <label class="label">Кодовое слово</label>
                    <!-- <input v-bind:class="{ 'error' : errors.phone }" v-on:keyup="validateForm($event)" v-model="phone" name="phone" oninput="validity.valid||(value='');" v-mask="'+7(###)###-##-##'" placeholder="Придумайте кодовое слово"> -->
                    <input v-bind:class="{ 'error' : errors.code }" v-on:keyup="validateForm($event)" v-model="code" name="code" type="text" placeholder="Придумайте кодовое слово">
                    <span v-if="errors.code" id="err-text-code" class="err-text">{{ errors.code[0] }}</span>
                    <div :style="{ 'visibility' : errors.code ? 'visible' : 'hidden' }" class="err" id="err-code">
                        <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                        </svg>
                    </div>
                </div>
                <div class="flex-col row-last">
                    <div class="check-form flex-row">
                        <input v-model="agreement" type="checkbox">
                        <label class="label">Согласиться с <span>правилами пользователя</span></label>
                    </div>
                    <div class="input-form flex-col">
                        <span @click="firstPage = false" class="val">Продолжить регистрацию</span>
                    </div>
                </div>
            </div>
            <div v-else class="reg-form flex-row">
                <div class="input-form flex-col">
                    <div class="label">Тип организации</div>
                    <select v-bind:class="{ 'error' : errors.type_of_organization_id, 'not-selected' : type_of_organization_id === 'Выберите' }" name="type_of_organization_id" class="input-form" v-model="type_of_organization_id">
                        <option :value="'Выберите'" disabled>Выберите</option>
                        <option v-for="type in organization_types" :value="type.id" :key="type.id">
                            {{ type.name }}
                        </option>
                    </select>
                    <div :style="{ 'visibility' : errors.locality_id ? 'visible' : 'hidden' }" class="err" id="err-type_of_organization_id">
                        <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                        </svg>
                    </div>
                </div>
                <div class="input-form flex-col">
                    <label class="label">Учредительные документы компании</label>
                    <input style="margin-top: -4px" v-bind:class="{ 'error' : errors.document }" v-on:keyup="validateForm($event)" :value="doc" class="file-input" id="doc" name="doc" type="text" placeholder="+ Добавить PDF-файл" readonly>
                    <input style="margin-top: -4px" class="file-hidden" type="file"  @change="uploadDoc" multiple>
                    <span v-if="errors.document" id="err-text-doc" class="err-text">{{ errors.document[0] }}</span>
                    <div :style="{ 'visibility' : errors.document ? 'visible' : 'hidden' }" class="err" id="err-doc">
                        <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                        </svg>
                    </div>
                    <div class="info-mark" @click="infoMark = true" @mouseover="infoMark = true">
                        <svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.7302 0C10.1897 0 13.5956 1.59326 13.5956 5.40421C13.5956 8.91858 9.56848 10.2701 8.7036 11.54C8.0543 12.4846 8.27116 13.8119 6.48719 13.8119C5.32509 13.8119 4.75743 12.8667 4.75743 12.0018C4.75743 8.78336 9.4862 8.05498 9.4862 5.40485C9.4862 3.94617 8.51544 3.08129 6.89284 3.08129C3.43333 3.08129 4.78422 6.64796 2.16407 6.64796C1.21819 6.64796 0.40625 6.0803 0.40625 4.99984C0.405612 2.34908 3.43205 0 6.7302 0ZM6.59562 15.5665C7.81002 15.5665 8.81203 16.5654 8.81203 17.7836C8.81203 19.0018 7.81193 20.0006 6.59562 20.0006C5.3793 20.0006 4.37857 19.0031 4.37857 17.7836C4.37857 16.566 5.3793 15.5665 6.59562 15.5665Z" fill="#4985FF"/>
                        </svg>
                    </div>
                </div>
                <div v-if="infoMark" class="flex-col info-extra">
                        <div class="exit-icon" @click="infoMark = false">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.493 2.95446L9.94808 7.49984L14.493 12.045C15.169 12.7213 15.169 13.8168 14.493 14.4931C14.1552 14.8309 13.7124 14.9999 13.2697 14.9999C12.8264 14.9999 12.3835 14.8311 12.0459 14.4931L7.50003 9.9474L2.95447 14.493C2.61673 14.8308 2.17384 14.9998 1.73081 14.9998C1.28792 14.9998 0.845322 14.8311 0.507284 14.493C-0.16875 13.8171 -0.16875 12.7215 0.507284 12.045L5.05207 7.49979L0.507026 2.95446C-0.169009 2.27843 -0.169009 1.18267 0.507026 0.506637C1.18293 -0.168879 2.27805 -0.168879 2.95421 0.506637L7.49999 5.05202L12.0454 0.506637C12.7217 -0.168879 13.817 -0.168879 14.4927 0.506637C15.169 1.18267 15.169 2.27843 14.493 2.95446Z" fill="#4985FF"/>
                            </svg>
                        </div>
                        <div class="head-text">Учредительные документы компании</div>
                        <div class="sub-head-text">Добавьте перечисленные файлы:</div>
                        <ul>
                            <li>Устав</li>
                            <li>Свидетельство гос. Регистрации</li>
                            <li>Приказ о назначении первого руководителя (директора)</li>
                            <li>Банковские реквизиты</li>
                            <li>Реквизиты организации (адрес,Юр-Факт; контакты)</li>
                        </ul>
                    </div>
                <div class="input-form flex-col">
                    <label class="label">Вид деятельности</label>
                    <input v-bind:class="{ 'error' : errors.type_of_agency }" v-on:keyup="validateForm($event)" v-model="type_of_agency" name="type_of_agency" type="text" placeholder="Введите ваш вид деятельности">
                    <span v-if="errors.type_of_agency" id="err-text-type_of_agency" class="err-text">{{ errors.type_of_agency[0] }}</span>
                    <div :style="{ 'visibility' : errors.type_of_agency ? 'visible' : 'hidden' }" class="err" id="err-type_of_agency">
                        <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                        </svg>
                    </div>
                </div>
                <div class="input-form flex-col">
                    <label class="label">Юридический адрес компании</label>
                    <input @click="modalLegalAddress = true" v-bind:class="{ 'error' : errors.juridical_address }" v-on:keyup="validateForm($event)" v-model="juridical_address" type="text" readonly>
                    <!-- <span v-if="errors.manager_name" id="err-text-manager_name" class="err-text">{{ errors.manager_name[0] }}</span>
                    <div :style="{ 'visibility' : errors.manager_name ? 'visible' : 'hidden' }" class="err" id="err-manager_name">
                        <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                        </svg>
                    </div> -->
                </div>
                <div class="input-form flex-col">
                    <label class="label">Фактический адрес компании</label>
                    <input @click="modalActualAddress = true" v-bind:class="{ 'error' : errors.real_address }" v-on:keyup="validateForm($event)" v-model="real_address" type="text" readonly>
                    <!-- <span v-if="errors.manager_phone" id="err-text-manager_phone" class="err-text">{{ errors.manager_phone[0] }}</span>
                    <div :style="{ 'visibility' : errors.manager_phone ? 'visible' : 'hidden' }" class="err" id="err-manager_phone">
                        <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                        </svg>
                    </div> -->
                </div>
                <div class="input-form flex-col">
                    <label class="label">ФИО исполнителя</label>
                    <input v-bind:class="{ 'error' : errors.performer_name }" v-on:keyup="validateForm($event)" v-model="performer_name" name="performer_name" type="text" placeholder="Введите ФИО исполнителя">
                    <span v-if="errors.performer_name" id="err-text-performer_name" class="err-text">{{ errors.performer_name[0] }}</span>
                    <div :style="{ 'visibility' : errors.performer_name ? 'visible' : 'hidden' }" class="err" id="err-performer_name">
                        <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                        </svg>
                    </div>
                </div>
                <div class="input-form flex-col">
                    <label class="label">Контактный номер</label>
                    <input v-bind:class="{ 'error' : errors.phone }" v-on:keyup="validateForm($event)" v-model="phone" name="phone" oninput="validity.valid||(value='');" v-mask="'+7(###)###-##-##'" placeholder="Введите номер телефона">
                    <span v-if="errors.phone" id="err-text-phone" class="err-text">{{ errors.phone[0] }}</span>
                    <div :style="{ 'visibility' : errors.phone ? 'visible' : 'hidden' }" class="err" id="err-phone">
                        <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                        </svg>
                    </div>
                </div>
                <div class="input-form flex-col">
                    <label class="label">Электронная почта</label>
                    <input v-bind:class="{ 'error' : errors.email }" v-on:keyup="validateForm($event)" v-model="email" name="email" type="text" placeholder="Введите email менеджера">
                    <span v-if="errors.email" id="err-text-email" class="err-text">{{ errors.email[0] }}</span>
                    <div :style="{ 'visibility' : errors.email ? 'visible' : 'hidden' }" class="err" id="err-email">
                        <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                        </svg>
                    </div>
                </div>
                <div class="input-form">
<!--                    <vue-recaptcha :sitekey="sitekey" @expired="onCaptchaExpired"></vue-recaptcha>-->
                    <vue-recaptcha
                        ref="recaptcha"
                        size="invisible"
                        :sitekey="sitekey"
                        @verify="postUser"
                        @expired="onCaptchaExpired"
                    />
                </div>
                <div class="input-form">
                </div>
                <div class="flex-row row-last">
                     <!-- <div class="text-form-hide flex-col">
                        <label style="margin-top: 15px" class="label">В течении нескольких дней мы проверим достоверность укаанных данных и напишем вам на электронную почту.</label>
                    </div> -->
                    <div class="input-form flex-col">
                        <span style="margin-top: 15px" @click="validate" class="val">Отправить на расмотрение</span>
                    </div>
                    <!-- <div class="text-form flex-col">
                        <label style="margin-top: 15px" class="label">В течении нескольких дней мы проверим достоверность укаанных данных и напишем вам на электронную почту.</label>
                    </div> -->
                </div>
            </div>
        </div>
        <div v-else class="confirm flex-row">
            <div class="left">
                <img src="/images/confirm-layout.svg" alt="">
            </div>
            <div class="right flex-col">
                <div class="header">Заявка отправлена на расмотренние</div>
                <div class="sub">В течении нескольких дней мы проверим достоверность укаанных данных и напишем вам на электронную почту.</div>
                <div class="sub">Пожалуста, не забывайте проверять почту и папку спама в течении недели.</div>
                <div class="sub">Если вы не чего не получите, тогда обратитесь в службу поддержки!</div>
                <div class="sub-l">Хорошего дня! Спасибо что вы с нами!</div>
                <div @click="$router.push({ name: 'home' })" class="btn">Вернутся на главную</div>
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
                        <select v-bind:class="{ 'error' : errors.locality_id, 'not-selected' : real_selected_region === 'Выберите' }" @change="validateForm($event)" name="real_selected_region" class="input-form" v-model="real_selected_region">
                            <option :value="'Выберите'" disabled>Выберите</option>
                            <option v-for="region in regions" :value="region.id" :key="region.id">
                                {{ region.name }}
                            </option>
                        </select>
                        <div :style="{ 'visibility' : errors.locality_id ? 'visible' : 'hidden' }" class="err" id="err-selected_region">
                            <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                            </svg>
                        </div>
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">Выберите город</label>
                        <select v-bind:class="{ 'error' : errors.locality_id, 'not-selected' : real_selected_district === 'Выберите' }" @change="validateForm($event)" name="real_selected_district" v-if="real_selected_region !== 'Выберите'" class="input-form" v-model="real_selected_district">
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
                        <!-- <div :style="{ 'visibility' : errors.locality_id ? 'visible' : 'hidden' }" class="err" id="err-selected_district">
                            <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                            </svg>
                        </div> -->
                    </div>
                    <div v-if="real_selected_district.is_city !== 1" class="input-form flex-col">
                        <label class="label">Выберите район</label>
                        <select v-bind:class="{ 'error' : errors.locality_id, 'not-selected' : real_selected_locality === 'Выберите' }" @change="validateForm($event)" name="selected_locality" v-if="real_selected_district !== 'Выберите' || real_selected_district.is_city === 0" class="input-form" v-model="real_selected_locality">
                            <option :value="'Выберите'" disabled>Выберите</option>
                            <option v-for="region in regions.find(x => x.id === real_selected_region).districts.find(x => x.id === real_selected_district.id).localities" :value="region" :key="region.id">
                                {{ region.name }}
                            </option>
                        </select>
                        <select v-else class="input-form not-selected" v-model="real_selected_district">
                            <option :value="'Выберите'" disabled>Выберите</option>
                        </select>
                        <!-- <div :style="{ 'visibility' : errors.locality_id ? 'visible' : 'hidden' }" class="err" id="err-selected_locality">
                            <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                            </svg>
                        </div> -->
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">Адрес</label>
                        <input v-bind:class="{ 'error' : errors.real_address }" v-on:keyup="validateForm($event)" v-model="real_address" name="real_address" type="text" placeholder="Введите адрес (офис, каб)">
                        <span v-if="errors.real_address" id="err-text-real_address" class="err-text">{{ errors.real_address[0] }}</span>
                        <div :style="{ 'visibility' : errors.real_address ? 'visible' : 'hidden' }" class="err" id="err-real_address">
                            <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                            </svg>
                        </div>
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
                    <div class="input-form flex-col">
                        <label class="label">Выберите регион</label>
                        <select v-bind:class="{ 'error' : errors.locality_id, 'not-selected' : juridical_selected_region === 'Выберите' }" @change="validateForm($event)" name="juridical_selected_region" class="input-form" v-model="juridical_selected_region">
                            <option :value="'Выберите'" disabled>Выберите</option>
                            <option v-for="region in regions" :value="region.id" :key="region.id">
                                {{ region.name }}
                            </option>
                        </select>
                        <!-- <div :style="{ 'visibility' : errors.locality_id ? 'visible' : 'hidden' }" class="err" id="err-selected_region">
                            <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                            </svg>
                        </div> -->
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">Выберите город</label>
                        <select v-bind:class="{ 'error' : errors.locality_id, 'not-selected' : juridical_selected_district === 'Выберите' }" @change="validateForm($event)" name="juridical_selected_district" v-if="juridical_selected_region !== 'Выберите'" class="input-form" v-model="juridical_selected_district">
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
                        <!-- <div :style="{ 'visibility' : errors.locality_id ? 'visible' : 'hidden' }" class="err" id="err-selected_district">
                            <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                            </svg>
                        </div> -->
                    </div>
                    <div v-if="juridical_selected_district.is_city !== 1" class="input-form flex-col">
                        <label class="label">Выберите район</label>
                        <select v-bind:class="{ 'error' : errors.locality_id, 'not-selected' : juridical_selected_locality === 'Выберите' }" @change="validateForm($event)" name="selected_locality" v-if="juridical_selected_district !== 'Выберите' || juridical_selected_district.is_city === 0" class="input-form" v-model="juridical_selected_locality">
                            <option :value="'Выберите'" disabled>Выберите</option>
                            <option v-for="region in regions.find(x => x.id === juridical_selected_region).districts.find(x => x.id === juridical_selected_district.id).localities" :value="region" :key="region.id">
                                {{ region.name }}
                            </option>
                        </select>
                        <select v-else class="input-form not-selected" v-model="juridical_selected_district">
                            <option :value="'Выберите'" disabled>Выберите</option>
                        </select>
                        <!-- <div :style="{ 'visibility' : errors.locality_id ? 'visible' : 'hidden' }" class="err" id="err-selected_locality">
                            <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                            </svg>
                        </div> -->
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">Адрес</label>
                        <input v-bind:class="{ 'error' : errors.juridical_address }" v-on:keyup="validateForm($event)" v-model="juridical_address" name="juridical_address" type="text" placeholder="Введите адрес (офис, каб)">
                        <span v-if="errors.juridical_address" id="err-text-juridical_address" class="err-text">{{ errors.juridical_address[0] }}</span>
                        <div :style="{ 'visibility' : errors.juridical_address ? 'visible' : 'hidden' }" class="err" id="err-juridical_address">
                            <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div @click="modalLegalAddress = false" class="done-btn">Готово</div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios'
import VueRecaptcha from 'vue-recaptcha';
export default {
    components: { VueRecaptcha },
    data(){
        return{
            userRegistration: true,
            firstPage: true,
            infoMark: false,
            modalActualAddress: false,
            modalLegalAddress: false,
            sitekey: '6LeMRdoZAAAAAG0J8_N0WiSaEgcAzULLpVyg0x-l',
            organization_types: [
                {
                    id: 1,
                    name: 'Товарищество с ограниченной ответственностью (ТОО)'
                },
                {
                    id: 2,
                    name: 'Индивидуальный предприниматель (ИП)'
                },
                {
                    id: 3,
                    name: 'Акционерное общество (АО)'
                },
                {
                    id: 4,
                    name: 'Государственное предприятие (ГП)'
                }
            ],
            regions: '',
            doc: '',
            name_of_company: '',
            manager_name: '',
            resident_of_RK: '',

            country: '',
            company_email: '',
            BIN: '',
            password: '',
            password_repeat: '',
            code: '',
            type_of_organization_id: 'Выберите',
            title: '',
            type_of_agency: '',
            document: '',
            docs: [],
            performer_name: '',
            phone: '',
            email: '',
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

            agreement: false,
            errors: ''
        }
    },
    mounted(){
        this.getRegions()
    },
    methods: {
        validateForm(e){
            const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(e.target.name === 'name_of_company'){
                if(this.errors.name_of_company){
                    delete this.errors.name_of_company
                }
                if(String(e.target.value).length === 0 ){
                    document.getElementById('err-name_of_company').style.visibility = 'visible'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'visible'
                    e.srcElement.classList.add('error')
                } else {
                    document.getElementById('err-name_of_company').style.visibility = 'hidden'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'hidden'
                    e.srcElement.classList.remove('error')
                }
            }
            if(e.target.name === 'manager_name'){
                if(this.errors.manager_name){
                    delete this.errors.manager_name
                }
                if(String(e.target.value).length === 0 ){
                    document.getElementById('err-manager_name').style.visibility = 'visible'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'visible'
                    e.srcElement.classList.add('error')
                } else {
                    document.getElementById('err-manager_name').style.visibility = 'hidden'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'hidden'
                    e.srcElement.classList.remove('error')
                }
            }
            if(e.target.name === 'company_email'){
                if(this.errors.company_email){
                    delete this.errors.company_email
                }
                if(String(e.target.value).length === 0 ){
                    document.getElementById('err-company_email').style.visibility = 'visible'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'visible'
                    e.srcElement.classList.add('error')
                } else {
                    document.getElementById('err-company_email').style.visibility = 'hidden'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'hidden'
                    e.srcElement.classList.remove('error')
                }
            }
            if(e.target.name === 'BIN'){
                if(this.errors.BIN){
                    delete this.errors.BIN
                }
                if(String(e.target.value).length !== 12 ){
                    document.getElementById('err-BIN').style.visibility = 'visible'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'visible'
                    e.srcElement.classList.add('error')
                } else {
                    document.getElementById('err-BIN').style.visibility = 'hidden'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'hidden'
                    e.srcElement.classList.remove('error')
                }
            }
            if(e.target.name === 'password'){
                if(this.errors.password){
                    delete this.errors.password
                }
                if(String(e.target.value).length <= 6 ){
                    document.getElementById('err-password').style.visibility = 'visible'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'visible'
                    e.srcElement.classList.add('error')
                } else {
                    document.getElementById('err-password').style.visibility = 'hidden'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'hidden'
                    e.srcElement.classList.remove('error')
                }
            }
            if(e.target.name === 'password_repeat'){
                if(this.errors.password){
                    delete this.errors.password
                }
                if(String(e.target.value) !==  this.password){
                    document.getElementById('err-password_repeat').style.visibility = 'visible'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'visible'
                    e.srcElement.classList.add('error')
                } else {
                    document.getElementById('err-password_repeat').style.visibility = 'hidden'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'hidden'
                    e.srcElement.classList.remove('error')
                }
            }
            if(e.target.name === 'code'){
                if(this.errors.code){
                    delete this.errors.code
                }
                if(String(e.target.value).length === 0 ){
                    document.getElementById('err-code').style.visibility = 'visible'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'visible'
                    e.srcElement.classList.add('error')
                } else {
                    document.getElementById('err-code').style.visibility = 'hidden'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'hidden'
                    e.srcElement.classList.remove('error')
                }
            }
            if(e.target.name === 'type_of_organization_id'){
                if(e.target.value !== this.type_of_organization_id){
                    this.type_of_organization_id = 'Выберите'
                }
            }
            if(e.target.name === 'type_of_agency'){
                if(this.errors.type_of_agency){
                    delete this.errors.type_of_agency
                }
                if(String(e.target.value).length === 0 ){
                    document.getElementById('err-type_of_agency').style.visibility = 'visible'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'visible'
                    e.srcElement.classList.add('error')
                } else {
                    document.getElementById('err-type_of_agency').style.visibility = 'hidden'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'hidden'
                    e.srcElement.classList.remove('error')
                }
            }
            if(e.target.name === 'performer_name'){
                if(this.errors.performer_name){
                    delete this.errors.performer_name
                }
                if(String(e.target.value).length === 0 ){
                    document.getElementById('err-performer_name').style.visibility = 'visible'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'visible'
                    e.srcElement.classList.add('error')
                } else {
                    document.getElementById('err-performer_name').style.visibility = 'hidden'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'hidden'
                    e.srcElement.classList.remove('error')
                }
            }
            if(e.target.name === 'phone'){
                if(this.errors.phone){
                    delete this.errors.phone
                }
                if(String(e.target.value).length !== 16 ){
                    document.getElementById('err-phone').style.visibility = 'visible'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'visible'
                    e.srcElement.classList.add('error')
                } else {
                    document.getElementById('err-phone').style.visibility = 'hidden'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'hidden'
                    e.srcElement.classList.remove('error')
                }
            }
            if(e.target.name === 'email'){
                if(this.errors.email){
                    delete this.errors.email
                }
                if( !pattern.test(String(e.target.value).toLowerCase()) ){
                    document.getElementById('err-email').style.visibility = 'visible'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'visible'
                    e.srcElement.classList.add('error')
                } else {
                    document.getElementById('err-email').style.visibility = 'hidden'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'hidden'
                    e.srcElement.classList.remove('error')
                }
            }
            if(e.target.name === 'real_address'){
                if(this.errors.real_address){
                    delete this.errors.real_address
                }
                if(String(e.target.value).length === 0 ){
                    document.getElementById('err-real_address').style.visibility = 'visible'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'visible'
                    e.srcElement.classList.add('error')
                } else {
                    document.getElementById('err-real_address').style.visibility = 'hidden'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'hidden'
                    e.srcElement.classList.remove('error')
                }
            }
            if(e.target.name === 'juridical_address'){
                if(this.errors.juridical_address){
                    delete this.errors.juridical_address
                }
                if(String(e.target.value).length === 0 ){
                    document.getElementById('err-juridical_address').style.visibility = 'visible'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'visible'
                    e.srcElement.classList.add('error')
                } else {
                    document.getElementById('err-juridical_address').style.visibility = 'hidden'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'hidden'
                    e.srcElement.classList.remove('error')
                }
            }

            if(e.target.name === 'selected_region'){
                if(e.target.value !== this.selected_region){
                    this.selected_district = 'Выберите'
                    this.selected_locality = 'Выберите'
                }
            }
            if(e.target.name === 'selected_district'){
                if(e.target.value !== this.selected_district){
                    this.selected_locality = 'Выберите'
                }
            }
            if(e.target.name === 'address'){
                if(this.errors.address){
                    delete this.errors.address
                }
                if(String(e.target.value).length === 0 ){
                    document.getElementById('err-address').style.visibility = 'visible'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'visible'
                    e.srcElement.classList.add('error')
                } else {
                    document.getElementById('err-address').style.visibility = 'hidden'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'hidden'
                    e.srcElement.classList.remove('error')
                }
            }
            if(e.target.name === 'manager_name'){
                if(this.errors.manager_name){
                    delete this.errors.manager_name
                }
                if(String(e.target.value).length === 0 ){
                    document.getElementById('err-manager_name').style.visibility = 'visible'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'visible'
                    e.srcElement.classList.add('error')
                } else {
                    document.getElementById('err-manager_name').style.visibility = 'hidden'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'hidden'
                    e.srcElement.classList.remove('error')
                }
            }
            if(e.target.name === 'manager_phone'){
                if(this.errors.manager_phone){
                    delete this.errors.manager_phone
                }
                if(String(e.target.value).length !== 16 ){
                    document.getElementById('err-manager_phone').style.visibility = 'visible'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'visible'
                    e.srcElement.classList.add('error')
                } else {
                    document.getElementById('err-manager_phone').style.visibility = 'hidden'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'hidden'
                    e.srcElement.classList.remove('error')
                }
            }
            if(e.target.name === 'company_email'){
                if(this.errors.company_email){
                    delete this.errors.company_email
                }
                if( !pattern.test(String(e.target.value).toLowerCase()) ){
                    document.getElementById('err-company_email').style.visibility = 'visible'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'visible'
                    e.srcElement.classList.add('error')
                } else {
                    document.getElementById('err-company_email').style.visibility = 'hidden'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'hidden'
                    e.srcElement.classList.remove('error')
                }
            }
        },
        uploadDoc(e){
            if(this.docs.length > 5){
                alert("Максимум 5 документов")
                return
            }
            if(this.errors.document){
                delete this.errors.document
            }
            const file = e.target.files
            for(var item of file){
                if(item.type !== 'application/pdf'){
                    document.getElementById('err-doc').style.visibility = 'visible'
                    document.getElementById('doc').classList.add('error')
                    this.hasError = true
                } else {
                    this.docs.push(item)
                    document.getElementById('err-doc').style.visibility = 'hidden'
                    document.getElementById('doc').classList.remove('error')
                    this.hasError = false
                }
            }
            this.doc = "загружен " + this.docs.length + " файл"
        },
        getRegions(){
            axios.get('/api/regions')
            .then(res => {
                console.log(res.data)
                this.regions = res.data
            })
            .catch(err => {
                console.log(err)
            })
        },
        postUser(recaptchaToken){
            console.log(recaptchaToken);
            var real_city = this.real_selected_locality
            if(this.real_selected_district.is_city === 1){
                real_city = this.real_selected_district
            }
            var juridical_city = this.juridical_selected_locality
            if(this.juridical_selected_district.is_city === 1){
                juridical_city = this.juridical_selected_district
            }

            if(document.getElementsByClassName('error').length !== 0){
                alert('Заполните все поля правильно.')
                return
            }
            if(this.agreement){
                this.firstPage = false
            } else{
                alert('Согласитесь с условием пользователя.')
                return
            }

            let data = new FormData();

            data.append("name_of_company", this.name_of_company)
            data.append("manager_name", this.manager_name)
            data.append("resident_of_RK", Number(this.resident_of_RK))
            data.append("country", this.country ? this.country : 'KAZ')
            data.append("company_email", this.company_email)
            data.append("BIN", this.BIN)
            data.append("password", this.password)
            data.append("code", this.code)
            data.append("type_of_organization_id", this.type_of_organization_id)
            data.append("performer_name", this.performer_name)
            data.append("phone", this.phone)
            data.append("type_of_agency", this.type_of_agency)
            data.append("title", 'title')
            data.append("email", this.email)
            data.append("real_locality_id", real_city.id)
            data.append("juridical_locality_id", juridical_city.id)
            data.append("real_address", this.real_address)
            data.append("juridical_address", this.juridical_address)

            data.append("address", this.real_address)
            data.append("locality_id", real_city.id)
            data.append("manager_phone", this.phone)
            data.append("name", this.manager_name)
            data.append("recaptchaToken", recaptchaToken)
            let docs = this.docs
            let tt = 1
            var str = 'document'
            for(let doc of docs){
                data.append(str + tt.toString(), doc)
                tt += 1
            }
            for (var pair of data.entries()) {
                console.log(pair[0]+ ', ' + pair[1]) + ',' + typeof(pair[1])
            }

            axios.post('/api/register', data)
            .then(res => {
                console.log(res.data)
                this.userRegistration = false
                localStorage.setItem('xyzSessionAo', JSON.stringify(res.data.success.token));
                // this.$router.push({ name : 'profile' })
            })
            .catch(err => {
                if (err.response.status == 422){
                    this.errors = Object.assign({}, err.response.data.error)
                    console.log(this.errors)
                }

                alert('Что-то пошло не так. Проверьте данные еще раз.')
                console.log(err.response.data.error)
            })
            // } else {
            //     alert('Заполните все поля.')
            // }
        },
        validate () {
            this.$refs.recaptcha.execute()
            console.log("validate");
        },

        onCaptchaExpired () {
            this.$refs.recaptcha.reset()
        }
    }
}
</script>
<style lang="scss" scoped>
    .main{
        position: relative;
        width: 100%;
        background: #FFFFFF;
        height: 1020px;
        background-image: linear-gradient( rgba(214, 230, 255, 0.4), rgba(214, 230, 255, 0.4) ), url('/images/register-layout.svg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        .logo{
            cursor: pointer;
            position: absolute;
            left: calc(14%);
            width: 160px;
            height: 50px;
            top: 25px;
            background: #F6F6F8;
            font-size: 16px;
            line-height: 50px;
            color: #06397D;
            font-weight: 500;
        }
        .register{
            position: relative;
            top: 115px;
            width: 72%;
            margin: 0 auto;
            background: #FFFFFF;
            border-radius: 6px;
            height: 780px;
            padding: 26px 60px;
            color: #06397D;
            .reg-top{
                height: 56px;
                position: relative;
                border-bottom: 1px solid #4985FF;
                padding-bottom: 10px;
                .header{
                    font-weight: bold;
                    font-size: 34px;
                    line-height: 42px;
                }
                .step{
                    margin-left: 35px;
                    font-weight: 600;
                    font-size: 30px;
                    line-height: 46px;
                }
                .one{
                    cursor: pointer;
                    margin-left: 30px;
                    font-weight: bold;
                    font-size: 24px;
                    line-height: 46px;
                    color: #9F9F9F;
                    background: #F7F7F7;
                    height: 45px;
                    width: 45px;
                    border-radius: 50%;
                }
                .two{
                    cursor: pointer;
                    margin-left: 15px;
                    font-weight: bold;
                    font-size: 24px;
                    line-height: 46px;
                    color: #9F9F9F;
                    background: #F7F7F7;
                    height: 45px;
                    width: 45px;
                    border-radius: 50%;
                }
                .current-step{
                    color: #FFFFFF;
                    background: #4985FF;
                }
                .reg-top-r{
                    position: absolute;
                    right: 60px;
                    label{
                        font-weight: 500;
                        font-size: 16px;
                        line-height: 44px;
                        color: #909090;
                    }
                    span{
                        cursor: pointer;
                        margin-left: 15px;
                        font-weight: 600;
                        font-size: 16px;
                        line-height: 46px;
                        color: #4985FF;
                    }
                }
            }
            .top-sub-one{
                margin-top: 20px;
            }
            .top-sub-one, .top-sub-last{
                text-align: left;
                font-weight: normal;
                font-size: 16px;
                line-height: 25px;
                color: #06397D;
            }
            .reg-form{
                margin-top: 12px;
                flex-wrap: wrap;
                .input-form{
                    position: relative;
                    width: calc(50% - 60px);
                    margin-right: 60px;
                    margin-top: 18px;
                    height: 98px;
                    .label{
                        text-align: left;
                        font-weight: 500;
                        font-size: 16px;
                        line-height: 20px;
                    }
                    input, select{
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
                    .radio-field{
                        width: 100%;
                        .flex-row{
                            margin-top: 8px;
                            width: 100%;
                        }
                        .radio-label{
                            margin: 0 auto 0 0;
                            font-size: 14px;
                            line-height: 22px;
                            color: #4985FF;
                        }
                        input {
                            margin: 0 12px 0 0;
                            height: 24px;
                        }
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
                        width: 100%;
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
                    .val{
                        width: 350px;
                        cursor: pointer;
                        text-align: left;
                        margin-top: 8px;
                        height: 50px;
                        font-weight: bold;
                        font-size: 16px;
                        line-height: 48px;
                        text-align: center;
                        color: #FFFFFF;
                        background: #4985FF;
                        box-shadow: 0px 0px 10px rgba(111, 111, 111, 0.25);
                        border-radius: 6px;
                        box-sizing: border-box;
                    }
                }
                .check-form{
                    margin-top: 25px;
                    input{
                        cursor: pointer;
                        margin-left: 3px;
                        margin-top: 3px;
                        -ms-transform: scale(1.5); /* IE */
                        -moz-transform: scale(1.5); /* FF */
                        -webkit-transform: scale(1.5); /* Safari and Chrome */
                        -o-transform: scale(1.5); /* Opera */
                        transform: scale(1.5);
                        padding: 6px;
                    }
                    .label{
                        margin-left: 9px;
                        text-align: left;
                        font-weight: 500;
                        font-size: 16px;
                        line-height: 20px;
                    }
                    span{
                        font-weight: bold;
                        text-decoration: underline;
                        cursor: pointer;
                    }
                }
                .text-form, .text-form-hide{
                    max-width: 520px;
                    margin-top: 15px;
                    .label{
                        text-align: left;
                        font-weight: 500;
                        font-size: 16px;
                        line-height: 20px;
                    }
                }
                .text-form-hide{
                    display: none;
                    margin-top: 0;
                }
                .info-extra{
                    top: 214px;
                    width: 420px;
                    left: 470px;
                    position: absolute;
                    z-index: 100;
                    background: #FCFCFC;
                    border: 1px solid #E6EAF3;
                    box-sizing: border-box;
                    /* активный элемент */

                    box-shadow: 0px 0px 15px rgba(73, 133, 255, 0.25);
                    border-radius: 10px;
                    padding: 20px 25px;
                    .exit-icon{
                        cursor: pointer;
                        position: absolute;
                        right: 25px;
                        top: 20px;
                    }
                    .head-text{
                        text-align: left;
                        font-weight: 600;
                        font-size: 16px;
                        line-height: 22px;
                        color: #06397D;
                    }
                    .sub-head-text{
                        margin-top: 20px;
                        text-align: left;
                        font-weight: 500;
                        font-size: 15px;
                        line-height: 170%;
                        display: flex;
                        align-items: center;
                        color: #06397D;
                    }
                    ul{
                        margin-top: 5px;
                        padding-left: 0;
                        li{
                            list-style: none;
                            text-align: left;
                            margin-top: 10px;
                        }
                        li:before {
                            margin-right: 15px;
                            content: '';
                            display: inline-block;
                            background: #4985FF;
                            height: 10px;
                            width: 10px;
                            border-radius: 50%;
                            padding-left: 0;
                        }
                    }
                }
                .file-input::placeholder{
                    color: #4985FF;
                }
                .file-hidden{
                    cursor: pointer;
                    opacity: 0;
                    top: 28px;
                    position: absolute;
                    width: 100%;
                    z-index: 99;
                }
                .info-mark{
                    cursor: pointer;
                    padding: 8px;
                    position: absolute;
                    top: 28px;
                    z-index: 99;
                    left: calc(100% + 15px);
                    border-radius: 50%;
                    height: 40px;
                    width: 40px;
                    background: #FFFFFF;
                    box-shadow: 0px 0px 15px rgba(73, 133, 255, 0.25);
                }
            }
        }
        .confirm{
            position: relative;
            top: 115px;
            width: 72%;
            margin: 0 auto;
            background: #FFFFFF;
            border-radius: 12px;
            height: 680px;
            color: #06397D;
            .left{
                max-width: 545px;
                img{
                    object-fit: cover;
                    object-position: center;
                }
            }
            .right{
                position: relative;
                padding: 50px;
                .header{
                    text-align: left;
                    font-weight: bold;
                    font-size: 34px;
                    line-height: 146.28%;
                    color: #2D4C64;
                    margin-bottom: 30px;
                }
                .sub, .sub-l{
                    text-align: left;
                    margin-top: 30px;
                    font-weight: normal;
                    font-size: 16px;
                    line-height: 25px;
                    color: #06397D;
                }
                .sub-l{
                    position: absolute;
                    left: 50px;
                    bottom: 125px;
                }
                .btn{
                    position: absolute;
                    width: 350px;
                    cursor: pointer;
                    text-align: left;
                    bottom: 50px;
                    height: 55px;
                    font-weight: bold;
                    font-size: 16px;
                    line-height: 38px;
                    text-align: center;
                    color: #FFFFFF;
                    background: #4985FF;
                    box-shadow: 0px 0px 10px rgba(111, 111, 111, 0.25);
                    border-radius: 6px;
                    box-sizing: border-box;
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
    @media screen and (max-width: 1420px) {
        .register{
            height: 820px !important;
            .reg-top{
                height: 88px !important;
            }
            .reg-top-r{
                position: absolute;
                right: auto;
                left: 0;
                top: 42px;
            }
        }
        .confirm{
            .right{
                padding: 30px !important;
                .header{
                    margin-bottom: 10px !important;
                }
                .sub, .sub-l{
                    margin-top: 20px !important;
                }
            }
        }
    }
    @media screen and (max-width: 1320px) {
        .logo{
            left: calc(8%) !important;
        }
        .register{
            width: 84% !important;
        }
        .confirm{
            width: 84% !important;
            .left{
                // width: 54%;
                max-width: 425px !important;
                img{
                    width: 425px;
                    height: 100%;
                }
            }
            .right{
                padding: 30px !important;
                .header{
                    margin-bottom: 10px !important;
                }
                .sub, .sub-l{
                    margin-top: 20px !important;
                }
            }
        }
    }
    @media screen and (max-width: 1120px) {
        .main{
            height: 1340px !important;
        }
        .register{
            height: 1020px !important;
        }
         .top-sub-one, .top-sub-last{
                font-size: 14px !important;
                line-height: 21px !important;
            }
        .reg-form{
            label{
                font-size: 14px !important;
                line-height: 21px !important;
            }
            input, select, ::placeholder{
                font-size: 14px !important;
            }
            .flex-row{
                flex-wrap: wrap;
            }
            .input-form{
                margin-top: 10px !important;
                width: 100% !important;
            }
            .row-last{
                .input-form{
                    margin-top: 0 !important;
                }
                .text-form{
                    display: none;
                }
                .text-form-hide{
                    display: block !important;
                    label{
                        margin-top: 0 !important;
                    }
                }
            }
        }
        .info-extra{
            top: 558px !important;
            width: 420px;
            left: calc(100% - 440px) !important;
            .head-text{
                font-size: 14px;
                line-height: 21px;
            }
            .sub-head-text{
                font-size: 13px;
            }
            ul{
                li{
                    font-size: 12px !important;
                }
            }
        }
        .confirm{
            .left{
                // width: 54%;
                max-width: 385px !important;
                img{
                    width: 385px;
                }
            }
            .right{
                padding: 30px !important;
                .header{
                    margin-bottom: 10px !important;
                    font-size: 26px !important;
                }
                .sub, .sub-l{
                    margin-top: 20px !important;
                    font-size: 14px !important;
                    left: 30px !important;
                }
                .btn{
                    position: absolute;
                    width: 240px !important;
                    cursor: pointer;
                    text-align: left;
                    bottom: 50px;
                    height: 55px;
                    font-weight: bold;
                    font-size: 14px !important;
                }
            }
        }
    }
    @media screen and (max-width: 920px) {
        .confirm{
            .left{
                // width: 54%;
                max-width: 285px !important;
                img{
                    width: 285px;
                }
            }
            .right{
                padding: 30px !important;
                .header{
                    margin-bottom: 10px !important;
                    font-size: 26px !important;
                }
                .sub, .sub-l{
                    margin-top: 20px !important;
                    font-size: 14px !important;
                    left: 30px !important;
                }
                .btn{
                    position: absolute;
                    width: 240px !important;
                    cursor: pointer;
                    text-align: left;
                    bottom: 50px;
                    height: 55px;
                    font-weight: bold;
                    font-size: 14px !important;
                }
            }
        }
    }
    @media screen and (max-width: 720px) {
        .logo{
            left: calc(20px) !important;
        }
        .register{
            height: 1060px !important;
            width: calc(100% - 40px) !important;
            margin: 0 20px;
            padding: 15px 20px !important;
            .reg-top{
                .header{
                    text-align: left;
                    font-size: 26px !important;
                }
                text-align: left !important;
                height: 130px !important;
                flex-direction: column !important;
            }
            .dis-d{
                position: absolute;
                top: 84px;
                .step{
                    margin-left: 0 !important;
                    font-size: 22px !important;
                    line-height: 36px  !important;
                }
                .one, .two{
                    margin-left: 20px !important;
                    font-size: 20px  !important;
                    line-height: 34px  !important;
                    height: 34px  !important;
                    width: 34px  !important;
                }

            }
            .reg-top-r{
                top: 42px;
            }
        }
        .confirm{
            width: calc(100% - 40px) !important;
            flex-wrap: wrap;
            height: 580px !important;
            .left{
                width: 100% !important;
                max-width: 100% !important;
                height: 240px !important;
                img{
                    width: 100% !important;
                    height: 240px;
                }
            }
            .right{
                margin-top: -90px;
                padding: 15px 20px !important;
                .header{
                    margin-bottom: 0 !important;
                    font-size: 26px !important;
                    line-height: 26px !important;
                }
                .sub, .sub-l{
                    margin-top: 14px !important;
                    font-size: 14px !important;
                    left: 20px !important;
                    line-height: 22px !important;
                }
                .sub-l{
                    bottom: 85px !important;
                }
                .btn{
                    width: 240px !important;
                    cursor: pointer;
                    text-align: left;
                    bottom: 20px !important;
                    height: 55px;
                    font-weight: bold;
                    font-size: 14px !important;
                }
            }
        }
    }
    @media screen and (max-width: 620px) {
        .info-extra{
            top: 598px !important;
        }
        .register{
            height: 1090px !important;
            .reg-top{
                height: 164px !important;
            }
            .reg-top-r{
                top: 52px;
                flex-wrap: wrap;
                label, span{
                    text-align: left !important;
                    width: 100%;
                    line-height: 18px !important;
                    margin-left: 0 !important;
                }
            }
            .dis-d{
                top: 120px;
            }
        }
        .input-form{
            margin-right: 0 !important;
        }
        #doc{
            margin-right: 50px !important;
        }
        .info-mark{
            left: calc(100% - 30px) !important;
        }
        .val{
            width: calc(100%) !important;
            font-size: 14px !important;
        }
        .confirm{
            width: calc(100% - 40px) !important;
            flex-wrap: wrap;
            height: 640px !important;
            .left{
                width: 100% !important;
                max-width: 100% !important;
                height: 200px !important;
                img{
                    width: 100% !important;
                    height: 200px;
                }
            }
            .right{
                margin-top: -140px;
            }
        }
    }
    @media screen and (max-width: 520px) {
        .main{
            height: 1340px !important;
        }
        .register{
            height: 1120px !important;
        }
        .reg-top-r{
            label, span{
                font-size: 13px !important;
                line-height: 18px !important;
            }
        }
         .top-sub-one, .top-sub-last{
                font-size: 12px !important;
                line-height: 18px !important;
            }
        .reg-form{
            label{
                font-size: 12px !important;
                line-height: 18px !important;
            }
            input, select, ::placeholder{
                font-size: 11px !important;
            }
        }
        .check-form{
            input{
                -ms-transform: scale(1.2) !important; /* IE */
                -moz-transform: scale(1.2) !important; /* FF */
                -webkit-transform: scale(1.2) !important; /* Safari and Chrome */
                -o-transform: scale(1.2) !important; /* Opera */
                transform: scale(1.2) !important;
            }
            .label{
                margin-left: 15px !important;
            }
        }
        .info-extra{
            top: 598px !important;
            width: 280px !important;
            left: calc(100% - 270px) !important;
            .head-text{
                width: calc(100% - 40px);
                font-size: 12px;
                line-height: 21px;
            }
            .sub-head-text{
                font-size: 11px;
            }
            ul{
                li{
                    font-size: 10px !important;
                }
            }
        }
        .confirm{
            width: calc(100% - 40px) !important;
            flex-wrap: wrap;
            height: 640px !important;
            .left{
                width: 100% !important;
                max-width: 100% !important;
                height: 200px !important;
                img{
                    width: 100% !important;
                    height: 200px;
                }
            }
            .right{
                margin-top: -140px;
                .header{
                    font-size: 22px !important;
                    line-height: 28px !important;
                }
                .sub, .sub-l{
                    font-size: 12px !important;
                    line-height: 20px !important;
                }
                .btn{
                    font-size: 12px !important;
                    // line-height: 20px !important;
                }
            }
         }
    }

</style>

