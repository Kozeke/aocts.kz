<template>
    <div class="main flex-row">
        <div @click="$router.push({ name: 'home' })" class="logo">DARIS</div>
        <div v-if="userRegistration" class="register">
            <div class="reg-top flex-row">
                <div class="header">Регистрация</div>
                <div class="step">Шаг</div>
                <div v-bind:class="{ 'current-step' : firstPage }" @click="firstPage = true" class="one">1</div>
                <div v-bind:class="{ 'current-step' : !firstPage }" @click="firstPage = false" class="two">2</div>
                <div class="reg-top-r flex-row">
                    <label>У Вас уже есть аккаунт?</label>
                    <span @click="$router.push({ name: 'login' })">Войти в систему</span>
                </div>
            </div>
            <div v-if="firstPage" class="top-sub-one">Пожалуйста заполните все необходимые данные,</div> 
            <div v-else class="top-sub-one">Добавьте ваши контактные данные и данные вашего менеджера</div>
            <div v-if="firstPage" class="top-sub-last">Мы ответственно подходим к работе с каждым клиентом.</div>
            <div v-else class="top-sub-last">чтобы закончить регистрацию.</div>
            <div v-if="firstPage" class="reg-form flex-col">
                <div class="flex-row">
                    <div class="input-form flex-col">
                        <label class="label">ФИО первого руководителя</label>
                        <input v-bind:class="{ 'error' : errors.name }" v-on:keyup="validateForm($event)" v-model="name" name="name" type="text" placeholder="Введите ФИО руководителя">
                        <span v-if="errors.name" id="err-text-name" class="err-text">{{ errors.name[0] }}</span>
                        <div :style="{ 'visibility' : errors.name ? 'visible' : 'hidden' }" class="err" id="err-name">
                            <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                            </svg>
                        </div>
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">БИН</label>
                        <input v-bind:class="{ 'error' : errors.BIN }" v-on:keyup="validateForm($event)" v-model="BIN" name="BIN" oninput="validity.valid||(value='');" v-mask="'############'" placeholder="Введите 12 значный код">
                        <span v-if="errors.BIN" id="err-text-BIN" class="err-text">{{ errors.BIN[0] }}</span>
                        <div :style="{ 'visibility' : errors.BIN ? 'visible' : 'hidden' }" class="err" id="err-BIN">
                            <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex-row">
                    <div class="input-form flex-col">
                        <label class="label">Электронная почта</label>
                        <input v-bind:class="{ 'error' : errors.email }" v-on:keyup="validateForm($event)" v-model="email" name="email" type="text" placeholder="Введите email">
                        <span v-if="errors.email" id="err-text-email" class="err-text">{{ errors.email[0] }}</span>
                        <div :style="{ 'visibility' : errors.email ? 'visible' : 'hidden' }" class="err" id="err-email">
                            <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                            </svg>
                        </div>
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">Ваш телефонный номер</label>
                        <input v-bind:class="{ 'error' : errors.phone }" v-on:keyup="validateForm($event)" v-model="phone" name="phone" oninput="validity.valid||(value='');" v-mask="'+7(###)###-##-##'" placeholder="Введите номер телефона">
                        <span v-if="errors.phone" id="err-text-phone" class="err-text">{{ errors.phone[0] }}</span>
                        <div :style="{ 'visibility' : errors.phone ? 'visible' : 'hidden' }" class="err" id="err-phone">
                            <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex-row">
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
                        <input v-bind:class="{ 'error' : errors.password }" v-on:keyup="validateForm($event)" v-model="password_repeat" name="password_repeat" type="password" placeholder="Введите пароль еще раз">
                        <span v-if="errors.password" id="err-text-password_repeat" class="err-text">{{ errors.password[0] }}</span>
                        <div :style="{ 'visibility' : errors.password ? 'visible' : 'hidden' }" class="err" id="err-password_repeat">
                            <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                            </svg>
                        </div>
                    </div>  
                </div>
                <div class="flex-row">
                    <div class="input-form flex-col">
                        <label class="label">Учредительные документы компании</label>
                        <input v-bind:class="{ 'error' : errors.document }" v-on:keyup="validateForm($event)" :value="doc.name" class="file-input" id="doc" name="doc" type="text" placeholder="+ Добавить PDF-файл" readonly>
                        <input class="file-hidden" type="file"  @change="uploadDoc">
                        <span v-if="errors.document" id="err-text-doc" class="err-text">{{ errors.document[0] }}</span>
                        <div :style="{ 'visibility' : errors.document ? 'visible' : 'hidden' }" class="err" id="err-doc">
                            <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex-row row-last">
                    <div class="input-form flex-col">
                        <span @click="firstPage = false" class="val">Продолжить регистрацию</span>
                    </div>
                    <div class="check-form flex-row">
                        <input v-model="agreement" type="checkbox">
                        <label class="label">Согласиться с условиями</label>
                    </div>
                </div>
            </div>
            <div v-else class="reg-form flex-col">
                <div class="flex-row">
                    <div class="input-form flex-col">
                        <label class="label">Выберите регион</label>
                        <select v-bind:class="{ 'error' : errors.locality_id, 'not-selected' : selected_region === 'Выберите' }" @change="validateForm($event)" name="selected_region" class="input-form" v-model="selected_region">
                            <option :value="'Выберите'" disabled>Выберите</option>
                            <option v-for="region in regions" :value="region.id" :key="region.id">
                                {{ region.name }}
                            </option>
                        </select>
                        <!-- <span v-if="errors.locality_id" id="err-text-selected_region" class="err-text">{{ errors.locality_id[0] }}</span> -->
                        <div :style="{ 'visibility' : errors.locality_id ? 'visible' : 'hidden' }" class="err" id="err-selected_region">
                            <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                            </svg>
                        </div>
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">Выберите город</label>
                        <select v-bind:class="{ 'error' : errors.locality_id, 'not-selected' : selected_district === 'Выберите' }" @change="validateForm($event)" name="selected_district" v-if="selected_region !== 'Выберите'" class="input-form" v-model="selected_district">
                            <option :value="'Выберите'" disabled>Выберите</option>
                            <option v-for="region in regions.find(x => x.id === selected_region).localities" :value="region" :key="region.id">
                                {{ region.name }}
                            </option>
                            <option v-for="region in regions.find(x => x.id === selected_region).districts" :value="region" :key="region.id">
                                {{ region.name }}
                            </option>
                        </select>
                        <select v-else class="input-form not-selected" v-model="selected_district">
                            <option :value="'Выберите'" disabled>Выберите</option>
                        </select>
                        <!-- <span v-if="errors.locality_id" id="err-text-selected_district" class="err-text">{{ errors.locality_id[0] }}</span> -->
                        <div :style="{ 'visibility' : errors.locality_id ? 'visible' : 'hidden' }" class="err" id="err-selected_district">
                            <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex-row">
                    <div v-if="selected_district.is_city !== 1" class="input-form flex-col">
                        <label class="label">Выберите район</label>
                        <select v-bind:class="{ 'error' : errors.locality_id, 'not-selected' : selected_locality === 'Выберите' }" @change="validateForm($event)" name="selected_locality" v-if="selected_district !== 'Выберите' || selected_district.is_city === 0" class="input-form" v-model="selected_locality">
                            <option :value="'Выберите'" disabled>Выберите</option>
                            <option v-for="region in regions.find(x => x.id === selected_region).districts.find(x => x.id === selected_district.id).localities" :value="region" :key="region.id">
                                {{ region.name }}
                            </option>
                        </select>
                        <select v-else class="input-form not-selected" v-model="selected_district">
                            <option :value="'Выберите'" disabled>Выберите</option>
                        </select>
                        <!-- <span v-if="errors.locality_id" id="err-text-selected_locality" class="err-text">{{ errors.locality_id[0] }}</span> -->
                        <div :style="{ 'visibility' : errors.locality_id ? 'visible' : 'hidden' }" class="err" id="err-selected_locality">
                            <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                            </svg>
                        </div>
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">Адрес компании</label>
                        <input v-bind:class="{ 'error' : errors.address }" v-on:keyup="validateForm($event)" v-model="address" name="address" type="text" placeholder="Введите адрес компании">
                        <span v-if="errors.address" id="err-text-address" class="err-text">{{ errors.address[0] }}</span>
                        <div :style="{ 'visibility' : errors.address ? 'visible' : 'hidden' }" class="err" id="err-address">
                            <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex-row">
                    <div class="input-form flex-col">
                        <label class="label">ФИО менеджера компании</label>
                        <input v-bind:class="{ 'error' : errors.manager_name }" v-on:keyup="validateForm($event)" v-model="manager_name" name="manager_name" type="text" placeholder="Введите ФИО менеджера">
                        <span v-if="errors.manager_name" id="err-text-manager_name" class="err-text">{{ errors.manager_name[0] }}</span>
                        <div :style="{ 'visibility' : errors.manager_name ? 'visible' : 'hidden' }" class="err" id="err-manager_name">
                            <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                            </svg>
                        </div>
                    </div>
                    <div class="input-form flex-col">
                        <label class="label">Телефонный номер менеджера</label>
                        <input v-bind:class="{ 'error' : errors.manager_phone }" v-on:keyup="validateForm($event)" v-model="manager_phone" name="manager_phone" oninput="validity.valid||(value='');" v-mask="'+7(###)###-##-##'" placeholder="Введите номер телефона менеджера">
                        <span v-if="errors.manager_phone" id="err-text-manager_phone" class="err-text">{{ errors.manager_phone[0] }}</span>
                        <div :style="{ 'visibility' : errors.manager_phone ? 'visible' : 'hidden' }" class="err" id="err-manager_phone">
                            <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex-row">
                    <div class="input-form flex-col">
                        <label class="label">Электронная почта компании</label>
                        <input v-bind:class="{ 'error' : errors.company_email }" v-on:keyup="validateForm($event)" v-model="company_email" name="company_email" type="text" placeholder="Введите email для отправки документов">
                        <span v-if="errors.company_email" id="err-text-company_email" class="err-text">{{ errors.company_email[0] }}</span>
                        <div :style="{ 'visibility' : errors.company_email ? 'visible' : 'hidden' }" class="err" id="err-company_email">
                            <svg width="4" height="13" viewBox="0 0 4 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z" fill="#E4002F"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex-row row-last">
                    <div class="input-form flex-col">
                        <span @click="postUser()" class="val">Отправить на расмотрение</span>
                    </div>
                    <div class="text-form flex-col">
                        <label class="label">В течении нескольких дней мы проверим достоверность укаанных данных и напишем вам на электронную почту.</label>
                    </div>
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
    </div>
</template>
<script>
import axios from 'axios'
export default {
    data(){
        return{
            userRegistration: true,
            firstPage: true,
            regions: '',
            selected_region: 'Выберите',
            selected_district: 'Выберите',
            selected_locality: 'Выберите',
            doc: '',
            name: '',
            email: '',
            phone: '',
            BIN: '',
            manager_name: '',
            manager_phone: '',
            company_email: '',
            locality_id: '',
            address: '',
            password: '',
            password_repeat: '',
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
            if(e.target.name === 'name'){
                if(this.errors.name){
                    delete this.errors.name
                }
                if(String(e.target.value).length === 0 ){
                    document.getElementById('err-name').style.visibility = 'visible'
                    document.getElementById('err-text-' + e.target.name).style.visibility = 'visible'
                    e.srcElement.classList.add('error')
                } else {
                    document.getElementById('err-name').style.visibility = 'hidden'
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
            if(e.target.name === 'password'){
                if(this.errors.password){
                    delete this.errors.password
                }
                if(String(e.target.value).length === 0 ){
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
            if(this.errors.document){
                delete this.errors.document
            }
            const file = e.target.files[0]
            this.doc = file
                if(file.type !== 'application/pdf'){
                    document.getElementById('err-doc').style.visibility = 'visible'
                    document.getElementById('doc').classList.add('error')
                    this.hasError = true
                } else {
                    document.getElementById('err-doc').style.visibility = 'hidden'
                    document.getElementById('doc').classList.remove('error')
                    this.hasError = false
                }
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
        postUser(){
            var city = this.selected_locality
            if(this.selected_district.is_city === 1){
                city = this.selected_district
            } 
            if(this.address && this.manager_name && this.manager_phone && this.company_email && city !== 'Выберите' && 
            this.name && this.BIN && this.email && this.phone && this.password && this.password_repeat && this.doc){
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
                    
                data.append("name", this.name);
                data.append("email", this.email);
                data.append("phone", this.phone);
                data.append("BIN", this.BIN);
                data.append("manager_name", this.manager_name);
                data.append("manager_phone", this.manager_phone);
                data.append("company_email", this.company_email);
                data.append("locality_id", city.id);
                data.append("address", this.address);
                data.append("password", this.password);
                data.append("document", this.doc, this.doc.name);
            
                for (var pair of data.entries()) {
                    console.log(pair[0]+ ', ' + pair[1]) + ',' + typeof(pair[1]); 
                }

                console.log(data)
                axios.post('/api/register', data, {
                    headers: { 
                            'Content-Type' : 'multipart/form-data'
                        }
                    })
                    .then(res => {
                        this.userRegistration = false
                        console.log(res)
                    }).catch(err => {
                        if (err.response.status == 422){
                            this.errors = Object.assign({}, err.response.data.error)
                            console.log(this.errors)
                        }
                        
                        alert('Что-то пошло не так. Проверьте данные еще раз.')
                    console.log(err)
                })
            } else {
                alert('Заполните все поля.')
            }
        }
    }
}
</script>
<style lang="scss" scoped>
    .main{
        position: relative;
        width: 100%;
        background: #FFFFFF;
        height: 900px;
        background-image: linear-gradient( rgba(214, 230, 255, 0.4), rgba(214, 230, 255, 0.4) ), url('/images/register-layout.svg');
        background-repeat: no-repeat;
        background-position: left, top;
        .logo{
            cursor: pointer;
            position: absolute;
            left: calc(18%);
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
            height: 680px;
            padding: 26px 60px;
            color: #06397D;
            .reg-top{
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
                        line-height: 42px;
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
                margin-top: 15px;
            }
            .top-sub-one, .top-sub-last{
                text-align: left;
                font-weight: normal;
                font-size: 16px;
                line-height: 25px;
                color: #06397D;
            }
            .reg-form{
                .input-form{
                    position: relative;
                    width: 350px;
                    margin-right: 60px;
                    margin-top: 12px;
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
                        margin-top: 0px;
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
                    margin-top: 34px;
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
                }
                .text-form{
                    max-width: 520px;
                    margin-top: 18px;
                    .label{
                        text-align: left;
                        font-weight: 500;
                        font-size: 16px;
                        line-height: 20px;
                    }
                }
                .file-input::placeholder{
                    color: #4985FF;
                }
                .file-hidden{
                    opacity: 0;
                    top: 28px;
                    position: absolute;
                    width: 100%;
                    z-index: 99;
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
                // width: 54%;
                max-width: 545px;
                img{
                    object-fit: cover;
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
    }
    @media only screen and (min-width: 1520px){
        .main .register{
            width: 64%;
        }
    }
</style>

