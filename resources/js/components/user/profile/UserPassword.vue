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
                            <input type="text" placeholder="" >
                        </div>
                        <div class="item flex-col">
                            <div class="label">Новый пароль</div>
                            <input type="text" placeholder="" >
                        </div>
                        <div class="item flex-col">
                            <div class="label">Повторите новый пароль</div>
                            <input type="text" placeholder="" >
                        </div>
                    </div>
                    <div class="cancel-btn">Отмена</div>
                    <div class="send-btn">Сохранить изменения</div>
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

