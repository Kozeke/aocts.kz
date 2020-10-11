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
                        <div class="label-item flex-row">
                            <div class="name">Название документа</div>
                            <div class="date">Дата изменения</div>
                            <div class="status">Статус</div>
                        </div>
                        <div v-for="i in 5" :key="i" class="item flex-row">
                            <div class="name">Свидетельство гос. Регистрации.pdf</div>
                            <div class="date flex-col">
                                <div class="day">Июнь 1, 2020</div>
                                <div class="time">19:23</div>
                            </div>
                            <div class="status">подтвержден</div>
                            <div @click="showOption(i)" class="setting">
                                <svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 4C3.1 4 4 3.1 4 2C4 0.9 3.1 0 2 0C0.9 0 0 0.9 0 2C0 3.1 0.9 4 2 4ZM2 6C0.9 6 0 6.9 0 8C0 9.1 0.9 10 2 10C3.1 10 4 9.1 4 8C4 6.9 3.1 6 2 6ZM2 12C0.9 12 0 12.9 0 14C0 15.1 0.9 16 2 16C3.1 16 4 15.1 4 14C4 12.9 3.1 12 2 12Z" fill="#C5C5C5"/>
                                </svg>
                            </div>
                            <div :id="'option-' + i" class="options flex-col">
                                <div class="option flex-row">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 9.50035V12H2.49965L9.87196 4.62769L7.37231 2.12804L0 9.50035ZM11.805 2.69463C12.065 2.43466 12.065 2.01472 11.805 1.75476L10.2452 0.194973C9.98528 -0.064991 9.56534 -0.064991 9.30537 0.194973L8.08554 1.4148L10.5852 3.91446L11.805 2.69463Z" fill="#4985FF"/>
                                    </svg>      
                                    <div class="label">Изменить</div>
                                </div>
                                <div style="border-bottom: 0.5px solid #DFE0EB; border-top: 0.5px solid #DFE0EB;" class="option flex-row">
                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                        <path d="M12.8572 5.14286H10.1786C9.8827 5.14286 9.64285 5.39869 9.64285 5.7143C9.64285 6.0299 9.8827 6.28574 10.1786 6.28574H12.8572C13.153 6.28574 13.3929 6.54158 13.3929 6.85719V14.2858C13.3929 14.6014 13.153 14.8573 12.8572 14.8573H2.1428C1.84692 14.8573 1.60707 14.6014 1.60707 14.2858V6.85715C1.60707 6.54155 1.84692 6.28571 2.1428 6.28571H4.82138C5.11726 6.28571 5.35711 6.02987 5.35711 5.71427C5.35711 5.39866 5.11726 5.14282 4.82138 5.14282H2.1428C1.25519 5.14282 0.535645 5.91034 0.535645 6.85712V14.2858C0.535645 15.2325 1.25519 16.0001 2.1428 16.0001H12.8572C13.7448 16.0001 14.4643 15.2325 14.4643 14.2858V6.85715C14.4643 5.91037 13.7448 5.14286 12.8572 5.14286Z" fill="#4985FF"/>
                                        <path d="M4.44294 8.97577L7.12152 11.8329C7.3307 12.056 7.66984 12.056 7.87902 11.8329L10.5576 8.97577C10.7632 8.74876 10.7573 8.38702 10.5444 8.16777C10.3368 7.95389 10.0077 7.95389 9.8001 8.16777L8.03597 10.0495L8.03597 0.57169C8.03597 0.256084 7.79612 0.000244141 7.50024 0.000244141C7.20436 0.000244141 6.96451 0.256084 6.96451 0.57169L6.96451 10.0495L5.20038 8.16774C4.98755 7.9485 4.64842 7.95479 4.44288 8.1818C4.24242 8.40326 4.24242 8.75432 4.44294 8.97577Z" fill="#4985FF"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect width="15" height="16" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="label">Скачать</div>
                                </div>
                                <div class="option flex-row">
                                    <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.857143 14.2222C0.857143 15.2 1.62857 16 2.57143 16H9.42857C10.3714 16 11.1429 15.2 11.1429 14.2222V3.55556H0.857143V14.2222ZM12 0.888889H9L8.14286 0H3.85714L3 0.888889H0V2.66667H12V0.888889Z" fill="#4985FF"/>
                                    </svg>
                                    <div class="label">Удалить</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="send-btn">Добавить документ</div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import UserSide from './UserSide'
import UserNav from './UserNav'
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
            
        }
    },
    methods:{
        showOption(index){
            document.getElementById('option-' + index).style.display = "flex";
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
                    min-height: 580px;
                    padding-bottom: 80px;
                    .field-list{
                        padding: 32px 32px;
                        flex-wrap: wrap;
                        .label-item{
                            padding-bottom: 10px;
                            border-bottom: 1.5px solid #DFE0EB;
                            div{
                                text-align: left;
                                font-weight: 500;
                                font-size: 16px;
                                line-height: 20px;
                                height: 20px;
                                letter-spacing: 0.2px;
                                color: #788899;
                            }
                            .name, .date, .statis{
                                margin-left: 2%;
                            }
                            .name{
                                width: 40%;
                            }
                            .date{
                                width: 24%;
                            }
                            .status{
                                width: 30%;
                            }
                        }
                        .item{
                            padding: 12px 0;
                            border-bottom: 1px solid #DFE0EB;
                            height: 60px;
                            position: relative;
                            .name, .status, .setting, .date, .time, .day{
                                text-align: left;
                                font-weight: 500;
                                font-size: 14px;
                                line-height: 20px;
                                letter-spacing: 0.2px;
                                color: #252733;
                            }
                            .name, .status, .setting{
                                padding: 6px 0;
                                margin-left: 2%;
                            }
                            .name{
                                width: 40%;
                                text-overflow: ellipsis;
                                overflow: hidden; 
                                white-space: nowrap;
                            }
                            .date{
                                margin-left: 2%;
                                width: 24%;
                                .time{
                                    font-weight: normal;
                                    font-size: 12px;
                                    line-height: 16px;
                                    letter-spacing: 0.1px;
                                    color: #C5C5C5;
                                }
                            }
                            .status{
                                width: 22%;
                                letter-spacing: 0.5px;
                                text-transform: uppercase;
                                color: #FFFFFF;
                                font-size: 12px;
                                line-height: 22px;
                                text-align: center;
                                background: #29CC97;
                                border-radius: 6px;
                            }
                            .setting{
                                cursor: pointer;
                                text-align: right;
                                margin-right: 2%;
                                width: 4%;
                            }
                            .setting:focus ~ .options{
                                display: flex;
                            }
                            .options{
                                display: none;
                                position: absolute;
                                background: #ffffff;
                                right: -40px;
                                z-index: 99;
                                padding: 0 8px;
                                .option{
                                    cursor: pointer;
                                    padding: 8px 0;
                                    .label{
                                        cursor: pointer;
                                        margin-left: 10px;
                                        text-align: left;
                                        font-weight: 600;
                                        font-size: 10px;
                                        line-height: 16px;
                                        color: #4985FF;
                                    }
                                }
                            }
                        }
                    }
                    .send-btn{
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
                }
            }
        }
    }
</style>

