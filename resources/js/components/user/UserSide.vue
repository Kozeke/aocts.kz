<template>
    <div>
        <div class="side-menu flex-col">
            <div @click="$router.push({ name: 'home' })" class="logo">DARIS</div>
            <div @click="$router.push({ name: 'dashboard' })" class="side-item flex-row">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.5232 8.99998H8.54416L13.1921 13.9385C13.3697 14.1272 13.6621 14.1425 13.8447 13.9597C14.983 12.8203 15.7659 11.2844 15.9956 9.5578C16.035 9.26217 15.8041 8.99998 15.5232 8.99998ZM15.0577 6.97496C14.8153 3.24179 12.0077 0.258633 8.49415 0.00113002C8.22592 -0.0185577 8.00004 0.221757 8.00004 0.507386V7.49996H14.5815C14.8503 7.49996 15.0762 7.25996 15.0577 6.97496ZM6.58828 8.99998V1.58458C6.58828 1.28614 6.34151 1.04083 6.06357 1.0827C2.55859 1.60896 -0.120524 4.86243 0.00418191 8.76154C0.132417 12.766 3.37741 16.0497 7.14798 15.9994C8.63033 15.9797 10 15.4722 11.1262 14.6235C11.3586 14.4485 11.3739 14.085 11.1724 13.871L6.58828 8.99998Z" :fill="$route.name === 'dashboard' ? '#4985FF' : '#788899'" fill-opacity="0.6"/>
                </svg>
                <label :style="{ color: $route.name === 'dashboard' ? '#4985FF' : '#788899' }">Панель управления</label>
            </div>
            <div @click="$router.push({ name: 'acts-of-completed-work' })" class="side-item flex-row">
                <svg style="margin-right: 2px; transform: scale(1.16)" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.1168 3.024L10.2597 0.166841C10.2065 0.113504 10.1431 0.0713504 10.0734 0.0428571C10.0044 0.0146986 9.93072 0.000133928 9.85625 0H2.42767C1.48089 0 0.713379 0.767511 0.713379 1.71428V14.2857C0.713379 15.2325 1.48089 16 2.42767 16H11.5705C12.5173 16 13.2848 15.2325 13.2848 14.2857V3.42857C13.284 3.2769 13.2237 3.13162 13.1168 3.024ZM10.4277 1.95087L11.334 2.85716H10.4277V1.95087ZM12.1419 14.2857C12.1419 14.6013 11.8861 14.8572 11.5705 14.8572H2.42767C2.11206 14.8572 1.85623 14.6013 1.85623 14.2857V1.71428C1.85623 1.39868 2.11206 1.14285 2.42767 1.14285H9.28481V3.42857C9.28481 3.74417 9.54065 4.00001 9.85625 4.00001H12.142V14.2857H12.1419Z" :fill="$route.name === 'documents' ? '#4985FF' : '#788899'" fill-opacity="0.6"/>
                </svg>
                <label :style="{ color: $route.name === 'acts-of-completed-work' ? '#4985FF' : '#788899' }">Финансовые документы</label>
            </div>  
            <div @click="$router.push({ name: 'deal' })" class="side-item flex-row">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.5796 9.39787C15.3474 9.39787 15.1592 9.5965 15.1592 9.84158V13.7813C15.1584 14.5162 14.5943 15.1117 13.898 15.1124H2.102C1.40571 15.1117 0.841621 14.5162 0.8408 13.7813V2.21856C0.841621 1.48384 1.40571 0.888292 2.102 0.887425H5.83469C6.0669 0.887425 6.25509 0.688794 6.25509 0.443713C6.25509 0.198804 6.0669 0 5.83469 0H2.102C0.941631 0.0013866 0.00131375 0.993847 0 2.21856V13.7814C0.00131375 15.0062 0.941631 15.9986 2.102 16H13.898C15.0584 15.9986 15.9987 15.0062 16 13.7814V9.84158C16 9.5965 15.8118 9.39787 15.5796 9.39787Z" :fill="$route.name === 'deal' ? '#4985FF' : '#788899'" fill-opacity="0.6"/>
                    <path d="M13.6238 1.96543C12.916 1.26152 11.7685 1.26152 11.0607 1.96543L3.87544 9.11117C3.8262 9.16014 3.79064 9.22085 3.77208 9.2875L2.8272 12.68C2.78834 12.8191 2.82783 12.968 2.9304 13.0702C3.03313 13.1722 3.1829 13.2115 3.32276 13.173L6.73399 12.2331C6.80101 12.2147 6.86205 12.1793 6.9113 12.1303L8.70757 10.3439C9.40906 9.6462 10.5038 8.55739 10.5038 8.55739C11.2053 7.85973 11.5986 7.46858 12.3001 6.77091C13.0016 6.07325 14.0964 4.98444 14.0964 4.98444C14.6264 4.43778 14.8031 3.1398 14.0964 2.43543L13.6238 1.96543ZM4.75299 9.37152L10.6336 3.52312L12.5301 5.40922L6.64935 11.2576L4.75299 9.37152ZM4.37415 10.1275L5.88933 11.6345L3.79347 12.212L4.37415 10.1275ZM13.5269 4.41806L13.0997 4.84284L11.2031 2.95659L11.6304 2.53181C12.0235 2.14082 12.661 2.14082 13.0541 2.53181L13.5269 3.00181C13.9194 3.39326 13.9194 4.02676 13.5269 4.41806Z" :fill="$route.name === 'deal' ? '#4985FF' : '#788899'" fill-opacity="0.6"/>
                </svg>
                <label :style="{ color: $route.name === 'deal' ? '#4985FF' : '#788899' }">Договоры</label>
            </div>
            <div @click="modalDisplay = true" class="side-item side-item-bt flex-row">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.57168 0C4.47582 0 1.14336 3.31152 1.14336 7.38217C1.15153 9.04323 1.70581 10.6475 2.70789 11.9105C2.50068 13.2645 1.60584 14.3791 0.391416 14.7957C0.0919294 14.9029 -0.0701853 15.2511 0.0292866 15.5735C0.106929 15.8252 0.32566 15.9949 0.571979 15.9947C2.43034 16.0653 4.252 15.426 5.71465 14.1898C6.62557 14.5707 7.59447 14.7656 8.57168 14.7643C12.6675 14.7643 16 11.4528 16 7.38217C16 3.31152 12.6675 0 8.57168 0Z" fill="#788899" fill-opacity="0.6"/>
                </svg>
                <label>Связаться с нами</label>
            </div>
            <div @click="showCountry = true" id="lang-us" class="side-item side-item-bb flex-row">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.2725 11.4534C10.2093 11.3773 10.1153 11.3333 10.0163 11.3333H5.98373C5.88476 11.3333 5.7907 11.3773 5.72754 11.4534C5.66407 11.5296 5.63801 11.6299 5.65592 11.7272C6.1351 14.3229 7.05535 16 8.00001 16C8.94467 16 9.86492 14.3229 10.3441 11.7272C10.362 11.6299 10.3359 11.5296 10.2725 11.4534Z" fill="#788899" fill-opacity="0.6"/>
                    <path d="M15.6201 5.56509C15.5762 5.42706 15.4479 5.33331 15.3027 5.33331H11.5492C11.4551 5.33331 11.3653 5.37303 11.3021 5.443C11.2387 5.513 11.2081 5.60641 11.2175 5.70016C11.2947 6.46578 11.3337 7.23987 11.3337 7.99997C11.3337 8.76006 11.2947 9.53415 11.2175 10.2998C11.2081 10.3935 11.2387 10.487 11.3021 10.5569C11.3653 10.6269 11.4551 10.6666 11.5492 10.6666H15.3028C15.448 10.6666 15.5762 10.5729 15.6202 10.4348C15.8724 9.64484 16.0003 8.82584 16.0003 8C16.0003 7.17416 15.8724 6.35516 15.6201 5.56509Z" fill="#788899" fill-opacity="0.6"/>
                    <path d="M11.0407 4.38878C11.0678 4.54924 11.2068 4.66678 11.3695 4.66678H14.7341C14.8516 4.66678 14.9607 4.60459 15.0209 4.50368C15.0808 4.40243 15.0831 4.27712 15.0268 4.17393C14.0261 2.34025 12.307 0.943465 10.3096 0.341903C10.181 0.302184 10.0394 0.346122 9.95382 0.451934C9.86885 0.558059 9.85648 0.704871 9.92257 0.82334C10.4082 1.69378 10.7949 2.92653 11.0407 4.38878Z" fill="#788899" fill-opacity="0.6"/>
                    <path d="M10.2096 5.33362H5.78969C5.61945 5.33362 5.47654 5.46187 5.45832 5.63115C5.37532 6.40068 5.33301 7.19787 5.33301 8.00031C5.33301 8.80275 5.37532 9.59994 5.45832 10.3695C5.47654 10.5387 5.61945 10.667 5.78969 10.667H10.2096C10.3799 10.667 10.5228 10.5387 10.541 10.3695C10.624 9.59994 10.6663 8.80275 10.6663 8.00031C10.6663 7.19787 10.624 6.40068 10.541 5.63115C10.5228 5.46187 10.3799 5.33362 10.2096 5.33362Z" fill="#788899" fill-opacity="0.6"/>
                    <path d="M1.26695 4.66668H4.63154C4.79429 4.66668 4.93329 4.54918 4.96032 4.38868C5.2061 2.92643 5.59282 1.69368 6.07848 0.823241C6.14457 0.704741 6.1322 0.557929 6.04723 0.451835C5.96195 0.346366 5.82098 0.301773 5.69145 0.341804C3.69404 0.943398 1.97495 2.34018 0.974292 4.17387C0.917979 4.27705 0.920261 4.4024 0.980167 4.50362C1.04039 4.60452 1.14942 4.66668 1.26695 4.66668Z" fill="#788899" fill-opacity="0.6"/>
                    <path d="M4.69825 10.5572C4.76172 10.4872 4.79231 10.3938 4.78288 10.3001C4.70572 9.53446 4.66666 8.76037 4.66666 8.00028C4.66666 7.24018 4.70572 6.46609 4.78288 5.70046C4.79231 5.60671 4.76172 5.51327 4.69825 5.44331C4.63509 5.37331 4.54525 5.33362 4.45119 5.33362H0.697594C0.552406 5.33362 0.424156 5.42737 0.380219 5.5654C0.127938 6.35543 0 7.17443 0 8.00028C0 8.82612 0.127938 9.64512 0.380219 10.4352C0.424156 10.5732 0.552406 10.667 0.697594 10.667H4.45119C4.54525 10.6669 4.63509 10.6272 4.69825 10.5572Z" fill="#788899" fill-opacity="0.6"/>
                    <path d="M4.96029 11.6114C4.93326 11.451 4.79426 11.3334 4.63151 11.3334H1.26695C1.14945 11.3334 1.04039 11.3956 0.980167 11.4965C0.920261 11.5978 0.917979 11.7231 0.974292 11.8263C1.97495 13.6599 3.69401 15.0567 5.69142 15.6583C5.72298 15.6681 5.75523 15.6726 5.78745 15.6726C5.88673 15.6726 5.98276 15.628 6.04723 15.5483C6.1322 15.4422 6.14457 15.2953 6.07848 15.1769C5.59279 14.3064 5.20607 13.0737 4.96029 11.6114Z" fill="#788899" fill-opacity="0.6"/>
                    <path d="M14.7341 11.3334H11.3695C11.2068 11.3334 11.0678 11.4509 11.0407 11.6114C10.7949 13.0737 10.4082 14.3064 9.92257 15.1769C9.85648 15.2954 9.86885 15.4422 9.95382 15.5483C10.0183 15.628 10.1143 15.6726 10.2136 15.6726C10.2455 15.6726 10.2781 15.6681 10.3096 15.6583C12.307 15.0567 14.0261 13.6599 15.0268 11.8263C15.0831 11.7231 15.0808 11.5977 15.0209 11.4965C14.9606 11.3956 14.8516 11.3334 14.7341 11.3334Z" fill="#788899" fill-opacity="0.6"/>
                    <path d="M5.72751 4.54656C5.79067 4.62275 5.88473 4.66669 5.9837 4.66669H10.0163C10.1152 4.66669 10.2093 4.62275 10.2725 4.54656C10.3359 4.47038 10.362 4.37012 10.3441 4.27281C9.86489 1.67709 8.94464 0 7.99998 0C7.05533 0 6.13508 1.67709 5.65592 4.27278C5.63801 4.37013 5.66405 4.47038 5.72751 4.54656Z" fill="#788899" fill-opacity="0.6"/>
                </svg>
                <label>Сменить язык</label>
                <svg style="margin: 7px 0 0 8px" width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.50495 5.64494L0.20524 1.3451C-0.0684147 1.07157 -0.0684147 0.628105 0.20524 0.354716C0.478651 0.081305 0.922098 0.081305 1.19549 0.354716L5.00007 4.15941L8.80452 0.354827C9.07805 0.081416 9.52145 0.081416 9.79486 0.354827C10.0684 0.628238 10.0684 1.07169 9.79486 1.34521L5.49508 5.64505C5.35831 5.78175 5.17925 5.85003 5.00009 5.85003C4.82085 5.85003 4.64165 5.78162 4.50495 5.64494Z" fill="#788899"/>
                </svg>
            </div>
            <div v-on-clickaway="toggleDropdown" v-show="showCountry" id="lang-list" class="lang-list">
                <div class="lang-item" v-for="lg in lang" :key="lg.id" @click="changeLang(lg)">{{ lg.name }}</div>
            </div>
        </div>
        <div v-if="modalDisplay" class="contact-modal">
            <div class="modal-body flex-row">
                <div class="modal-exit" @click="modalDisplay = false">
                    <svg style="cursor: pointer;" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                    <path d="M14.493 2.95446L9.94808 7.49984L14.493 12.045C15.169 12.7213 15.169 13.8168 14.493 14.4931C14.1552 14.8309 13.7124 14.9999 13.2697 14.9999C12.8264 14.9999 12.3835 14.8311 12.0459 14.4931L7.50003 9.9474L2.95447 14.493C2.61673 14.8308 2.17384 14.9998 1.73081 14.9998C1.28792 14.9998 0.845322 14.8311 0.507284 14.493C-0.16875 13.8171 -0.16875 12.7215 0.507284 12.045L5.05207 7.49979L0.507026 2.95446C-0.169009 2.27843 -0.169009 1.18267 0.507026 0.506637C1.18293 -0.168879 2.27805 -0.168879 2.95421 0.506637L7.49999 5.05202L12.0454 0.506637C12.7217 -0.168879 13.817 -0.168879 14.4927 0.506637C15.169 1.18267 15.169 2.27843 14.493 2.95446Z" fill="#4985FF"/>
                    </g>
                    <defs>
                    <clipPath id="clip0">
                    <rect width="15" height="15" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
                </div>
                <div class="modal-left flex-col">
                    <div class="ml-head">Связаться с нами</div>
                    <div class="ml-sub">Мы с радостью готовы Вам помочь!</div>
                    <div class="ml-contacts flex-row">
                        <div class="contact flex-col">
                            <div class="label">Горячая линия:</div>
                            <a class="value">+7 (727) 250-30-20</a>
                        </div>
                        <div class="contact flex-col">
                            <div class="label">Режим работы:</div>
                            <a class="value">Ежедневно с 10:00 до 19:00</a>
                        </div>
                        <div class="contact flex-col">
                            <div class="label">E-mail почта:</div>
                            <a class="value">Daris_info@gmail.com</a>
                        </div>
                    </div>
                    <div class="ml-back" @click="modalDisplay = false">Вернутся на главную</div>
                </div>
                <div class="modal-right">
                    <img src="/images/contact-modal.png" alt="">
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { mixin as clickaway } from 'vue-clickaway';

export default {
    mixins: [ clickaway ],
    data(){
        return {
            showCountry: false,
            modalDisplay: false,
            selectedLang: 'RU',
            lang: [
                {
                    id: 1,
                    name: 'Казахский',
                    attr: 'KZ'
                },
                {
                    id: 2,
                    name: 'Русский',
                    attr: 'RU'
                },
                {
                    id: 3,
                    name: 'English',
                    attr: 'EN'
                }
            ],
        }
    },
    methods:{
        toggleDropdown(e) {
            let langUs = document.getElementById("lang-us")
            if(!langUs.contains(e.target)){
                this.showCountry = false
            }
        },
        changeLang(val){
            this.selectedLang = val.attr
            this.showCountry = false
        }
    }
}
</script>
<style lang="scss" scoped>
    .side-menu{
        width: 302px;
        position: fixed;
        left: 0;
        top: 0;
        background: #FDFDFD;
        height: 100%;
        border-right: 1px solid #DFE0EB;
        .logo{
            cursor: pointer;
            margin: 50px auto 36px 50px;
            width: 160px;
            height: 50px;
            background: #f6f6f8;
            font-size: 16px;
            line-height: 50px;
            color: #06397d;
            font-weight: 500;
            z-index: 99;
        }
        .side-item{
            cursor: pointer;
            margin: 16px 30px 16px 50px;
            svg{
                cursor: pointer;
            }
            label{
                cursor: pointer;
                text-align: left;
                margin-left: 24px;
                font-size: 16px;
                line-height: 20px;
                letter-spacing: 0.2px;
                color: #788899;
            }
        }
        .side-item-bt{
            position: absolute;
            bottom: 118px;
        }
        .side-item-bb{
            position: absolute;
            bottom: 50px;
        }
        .lang-list{
            transition: all 1s ease 0s;
            z-index: 999;
            position: absolute;
            cursor: pointer;
            width: auto;
            bottom: 80px;
            left: 140px;
            border: 1px solid #4985FF;
            background: #FFFFFF;
            box-sizing: border-box;
            border-radius: 6px;
            overflow: hidden;
            .lang-item{
                text-align: left;
                cursor: pointer;
                height: 34px;
                font-style: normal;
                font-weight: 500;
                font-size: 12px;
                line-height: 13px;
                color: #4985FF;
                padding: 10px 15px;
            }
            .lang-item:hover{
                background: #4985FF;
                color: #FFFFFF;
            }
        }
    }
    .contact-modal{
        z-index: 998;
        width: 100%;
        position: fixed;
        height: 100%;
        padding: 150px 20%;
        background: rgba(45, 76, 100, 0.7);
        .modal-body{
            position: relative;
            padding: 0;
            border-radius: 12px !important;
            height: 500px;
            background: #FFFFFF;
            .modal-left{
                position: relative;
                width: 54%;
                padding: 50px;
                .ml-head{
                    text-align: left;
                    font-style: normal;
                    font-weight: bold;
                    font-size: 32px;
                    line-height: 146.28%;
                    color: #2D4C64;
                }
                .ml-sub{
                    text-align: left;
                    margin-top: 20px;
                    font-style: normal;
                    font-weight: bold;
                    font-size: 20px;
                    line-height: 150%;
                    color: #2D4C64;
                }
                .ml-contacts{
                    margin-top: 10px;
                    flex-wrap: wrap;
                    .contact{
                        margin-top: 15px;
                        margin-right: 40px;
                        .label{
                            text-align: left;
                            font-style: normal;
                            font-weight: 600;
                            font-size: 18px;
                            line-height: 22px;
                            color: #4985FF;
                        }
                        .value{
                            margin-top: 5px;
                            text-align: left;
                            font-style: normal;
                            font-weight: normal;
                            font-size: 16px;
                            line-height: 25px;
                            color: #999999;
                        }
                    }
                }
                .ml-back{
                    position: absolute;
                    cursor: pointer;
                    bottom: 50px;
                    width: calc(100% - 100px);
                    height: 50px;
                    border-radius: 6px;
                    padding-top: 14px;
                    background: #4985FF;
                    box-shadow: 0px 0px 10px rgba(111, 111, 111, 0.25);
                    border-radius: 6px;
                    text-align: center;
                    color: #FFFFFF;
                    font-weight: bold;
                    font-size: 16px;
                    line-height: 20px;
                }
            }
            .modal-right{
                width: 46%;
                height: 100%;
                overflow: hidden;
                border-bottom-right-radius: 12px;
                border-top-right-radius: 12px;
                img{
                    object-fit: contain;
                    object-position: center;
                }
            }
            .modal-exit{
                z-index: 999;
                cursor: pointer;
                position: absolute;
                top: 25px;
                right: 25px;
            }
        }
    }
</style>


