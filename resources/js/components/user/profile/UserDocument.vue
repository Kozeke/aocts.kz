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
                        <div v-for="doc in documents" :key="doc.id" class="item flex-row">
                            <div class="name">{{ doc.title }}</div>
                            <div class="date flex-col">
                                <div class="day">{{ getDateString(doc.updated_at) }}</div>
                                <div class="time">{{ getDateTime(doc.updated_at) }}</div>
                            </div>
                            <div v-if="doc.status === 0" class="status">В обработке</div>
                            <div v-else class="status success">ОДОБРЕНО</div>
                            <div @click="showOption(doc.id)" class="setting">
                                <svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 4C3.1 4 4 3.1 4 2C4 0.9 3.1 0 2 0C0.9 0 0 0.9 0 2C0 3.1 0.9 4 2 4ZM2 6C0.9 6 0 6.9 0 8C0 9.1 0.9 10 2 10C3.1 10 4 9.1 4 8C4 6.9 3.1 6 2 6ZM2 12C0.9 12 0 12.9 0 14C0 15.1 0.9 16 2 16C3.1 16 4 15.1 4 14C4 12.9 3.1 12 2 12Z" fill="#C5C5C5"/>
                                </svg>
                            </div>
                            <div :id="'xyz-option-' + doc.id" class="xyz-options flex-col">
                                <div @click="editDocId = doc.id, modalAddDoc = true" class="option flex-row">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 9.50035V12H2.49965L9.87196 4.62769L7.37231 2.12804L0 9.50035ZM11.805 2.69463C12.065 2.43466 12.065 2.01472 11.805 1.75476L10.2452 0.194973C9.98528 -0.064991 9.56534 -0.064991 9.30537 0.194973L8.08554 1.4148L10.5852 3.91446L11.805 2.69463Z" fill="#4985FF"/>
                                    </svg>      
                                    <div class="label">Изменить</div>
                                </div>
                                <a :href="doc.path" target="_blank" rel="noopener noreferrer" style="border-bottom: 0.5px solid #DFE0EB; border-top: 0.5px solid #DFE0EB;" class="option flex-row">
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
                                </a>
                                <div @click="deleteDoc(doc.id)" class="option flex-row">
                                    <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.857143 14.2222C0.857143 15.2 1.62857 16 2.57143 16H9.42857C10.3714 16 11.1429 15.2 11.1429 14.2222V3.55556H0.857143V14.2222ZM12 0.888889H9L8.14286 0H3.85714L3 0.888889H0V2.66667H12V0.888889Z" fill="#4985FF"/>
                                    </svg>
                                    <div class="label">Удалить</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div @click="modalAddDoc = true" class="send-btn">Добавить документ</div>
                </div>
            </div>
        </div>
         <div v-if="modalAddDoc" class="modal">
            <div class="modal-content">
                <div @click="modalAddDoc = false" class="close">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.493 2.95446L9.94808 7.49984L14.493 12.045C15.169 12.7213 15.169 13.8168 14.493 14.4931C14.1552 14.8309 13.7124 14.9999 13.2697 14.9999C12.8264 14.9999 12.3835 14.8311 12.0459 14.4931L7.50003 9.9474L2.95447 14.493C2.61673 14.8308 2.17384 14.9998 1.73081 14.9998C1.28792 14.9998 0.845322 14.8311 0.507284 14.493C-0.16875 13.8171 -0.16875 12.7215 0.507284 12.045L5.05207 7.49979L0.507026 2.95446C-0.169009 2.27843 -0.169009 1.18267 0.507026 0.506637C1.18293 -0.168879 2.27805 -0.168879 2.95421 0.506637L7.49999 5.05202L12.0454 0.506637C12.7217 -0.168879 13.817 -0.168879 14.4927 0.506637C15.169 1.18267 15.169 2.27843 14.493 2.95446Z" fill="#4985FF"/>
                    </svg>
                </div>
                <div class="upload flex-col">
                    <svg width="89" height="102" viewBox="0 0 89 102" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M78.7308 32.7854H61.6154C59.7248 32.7854 58.1923 34.4163 58.1923 36.4283C58.1923 38.4403 59.7248 40.0713 61.6154 40.0713H78.7308C80.6213 40.0713 82.1539 41.7023 82.1539 43.7142V91.0718C82.1539 93.0838 80.6213 94.7148 78.7308 94.7148H10.2692C8.37865 94.7148 6.84609 93.0838 6.84609 91.0718V43.714C6.84609 41.702 8.37865 40.0711 10.2692 40.0711H27.3846C29.2752 40.0711 30.8077 38.4401 30.8077 36.4281C30.8077 34.4161 29.2752 32.7852 27.3846 32.7852H10.2692C4.59769 32.7852 0 37.6781 0 43.7138V91.0714C0 97.1071 4.59769 102 10.2692 102H78.7308C84.4023 102 89 97.1071 89 91.0714V43.714C89 37.6783 84.4023 32.7854 78.7308 32.7854Z" fill="#4985FF"/>
                        <path d="M64.0353 19.281L46.92 1.06666C45.5834 -0.355555 43.4164 -0.355555 42.0798 1.06666L24.9643 19.281C23.6509 20.7282 23.6886 23.0343 25.0485 24.432C26.3751 25.7955 28.4781 25.7955 29.8047 24.432L41.077 12.4359V72.857C41.077 74.869 42.6095 76.5 44.5001 76.5C46.3907 76.5 47.9232 74.869 47.9232 72.857V12.4361L59.1955 24.4322C60.5554 25.8299 62.7224 25.7898 64.0357 24.3426C65.3166 22.9308 65.3166 20.6928 64.0353 19.281Z" fill="#4985FF"/>
                    </svg>
                    <div class="label">
                        <p v-if="fileData">{{ fileData }}</p>
                        <p v-else>
                        Перетащите файлы сюда<br>
                        или <span>выберите (прикрепить файл)</span>
                        </p>
                    </div>
                </div>
                <input @change="onFileChange()" type="file" class="input-file">
            </div>
        </div>
    </div>
</template>
<script>
import UserSide from '../UserSide'
import UserNav from '../UserNav'
import UserProfileImg from './UserProfileImg'
import UserProfileRouteMenu from './UserProfileRouteMenu'
import { func } from '../../../vars.js'

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
            modalAddDoc: false,
            editDocId: '',
            documents: '',
            fileData: ''
        }
    },
    mounted(){
        this.documents = JSON.parse(localStorage.getItem('xyzSessionAoUser')).documents
        console.log(this.documents)
    },
    methods: {
        getDateString: func.getDateString,
        getDateTime: func.getDateTime,
        showOption(index){
            var options = document.getElementsByClassName('xyz-options')
            for(let item of options){
                item.style.display = "none"
            }
            document.getElementById('xyz-option-' + index).style.display = "flex";
        },
        onFileChange(){
            var fileData =  event.target.files[0];
            this.fileData=fileData.name;
            let data = new FormData();
            data.append("title", fileData.name)
            data.append("document", event.target.files[0])

            if(this.editDocId){
                data.append("id", this.editDocId)
                axios.post('/api/user/update/document', data, {
                    headers: { 
                        'Authorization' : 'Bearer ' + JSON.parse(localStorage.getItem('xyzSessionAo')).token
                    }
                })
            .then(res => {
                alert('Вы успешно изменили файл')
                this.$router.push({ name : 'profile' })
            })
            .catch(err => {
                alert('Неизвестная ошибка')
                // location.reload()
                console.log(err.data)
            })
            } else {
                axios.post('/api/user/add/document', data, {
                        headers: { 
                            'Authorization' : 'Bearer ' + JSON.parse(localStorage.getItem('xyzSessionAo')).token
                        }
                    })
                .then(res => {
                    alert('Вы успешно добавили файл')
                    this.$router.push({ name : 'profile' })
                    // let userSt = JSON.parse(localStorage.getItem('xyzSessionAoUser'))
                    // localStorage.removeItem('xyzSessionAoUser');
                    // userSt.documents.push( res.data.document )
                    // localStorage.setItem('xyzSessionAoUser', JSON.stringify(userSt));
                    // location.reload()
                })
                .catch(err => {
                    alert('Неизвестная ошибка')
                    // location.reload()
                    console.log(err.data)
                })
            }
        },
        deleteDoc(index){
            axios.delete('/api/user/delete/document?id=' + index, {
                    headers: { 
                        'Authorization' : 'Bearer ' + JSON.parse(localStorage.getItem('xyzSessionAo')).token
                    }
                })
            .then(res => {
                alert('Вы успешно удалили файл')
                this.$router.push({ name : 'profile' })
                // location.reload()
            })
            .catch(err => {
                alert('Неизвестная ошибка')
                // location.reload()
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
                                width: 36%;
                            }
                            .date{
                                width: 28%;
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
                                width: 36%;
                                text-overflow: ellipsis;
                                overflow: hidden; 
                                white-space: nowrap;
                            }
                            .date{
                                margin-left: 2%;
                                width: 28%;
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
                            .status.success{
                                background: #29CC97;
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
                            .xyz-options{
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
                margin: 140px auto auto auto;
                padding: 72px 96px;
                width: auto;
                .close{
                    position: absolute;
                    top: 30px;
                    right: 30px;
                }
                .upload{
                    border: 1px dashed #4985FF;
                    border-radius: 6px;
                    padding: 64px 180px;
                    height: 314px;
                    width: 643px;
                    svg{
                        text-align: center;
                        margin: 0 auto;
                    }
                    .label{
                        margin: 42px auto 0 auto;
                        font-weight: 500;
                        font-size: 16px;
                        line-height: 20px;
                        display: flex;
                        align-items: center;
                        text-align: center;
                        color: #252733;
                        p{
                            margin: 0;
                        }
                        span{
                            color: #4985FF;
                        }
                    }
                }
                .input-file{
                    position: absolute;
                    z-index: 99;
                    opacity: 0;
                    height: 314px;
                    width: 643px;
                }
            }
        }
    }
</style>

