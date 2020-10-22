<template>
    <div class="top-nav">
        <div class="nav-header">
            {{ $route.meta.title }}
        </div>
        <div class="nav-user flex-row">
            <div class="dropdwn">
                <div class="notify">
                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.00002 16C8.10377 16 8.99908 15.1047 8.99908 14H5.00096C5.00096 15.1047 5.89627 16 7.00002 16ZM13.731 11.3216C13.1272 10.6728 11.9975 9.69687 11.9975 6.5C11.9975 4.07188 10.295 2.12812 7.9994 1.65125V1C7.9994 0.447812 7.5519 0 7.00002 0C6.44815 0 6.00065 0.447812 6.00065 1V1.65125C3.70502 2.12812 2.00252 4.07188 2.00252 6.5C2.00252 9.69687 0.872834 10.6728 0.269084 11.3216C0.0815841 11.5231 -0.00154089 11.7641 2.16059e-05 12C0.00345911 12.5125 0.405647 13 1.00315 13H12.9969C13.5944 13 13.9969 12.5125 14 12C14.0016 11.7641 13.9185 11.5228 13.731 11.3216Z" fill="#788899" fill-opacity="0.6"/>
                    </svg>
                    <div class="label"></div>
                </div>
                <div class="notify-menu flex-col">
                    <div class="notify-title">Уведомления</div>
                    <div class="notify-items flex-col">
                        <div v-for="i in 4" :key="i" class="item flex-row">
                            <div class="circle"></div>
                            <div class="middle flex-col">
                                <div class="status">Заявка одобрена</div>
                                <div class="name">№ЦТС-2019/02-41</div>
                            </div>
                            <div class="date">Июнь 7, 2020</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div @click="showUserMenu = true" class="user-name">{{ user.manager_name }}</div>
            <div @click="showUserMenu = true" class="user-img">
                <img src="/images/m-header.png" alt="">
            </div>
            <div v-if="showUserMenu" class="user-drop-menu flex-col">
                <div @click="$router.push({ name: 'profile' })" class="flex-row">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.8212 8.68225L12.5651 7.9879C12.6919 7.33306 12.6919 6.66129 12.5651 6.00646L13.8212 5.3121C13.9657 5.23307 14.0305 5.06936 13.9833 4.91694C13.6561 3.91211 13.0988 3.00324 12.3705 2.24679C12.2585 2.13107 12.0757 2.10284 11.9342 2.18187L10.6781 2.87623C10.1503 2.44155 9.54294 2.10566 8.88543 1.8855V0.499621C8.88543 0.341557 8.77044 0.203251 8.60827 0.169381C7.52618 -0.0620701 6.41755 -0.0507798 5.38853 0.169381C5.22636 0.203251 5.11137 0.341557 5.11137 0.499621V1.88833C4.45681 2.11131 3.84942 2.44719 3.31869 2.87905L2.06559 2.1847C1.92112 2.10566 1.74126 2.13107 1.62922 2.24961C0.900941 3.00324 0.343678 3.91211 0.0163971 4.91977C-0.0337271 5.07218 0.034088 5.23589 0.178563 5.31493L1.43462 6.00928C1.30783 6.66411 1.30783 7.33589 1.43462 7.99072L0.178563 8.68507C0.034088 8.76411 -0.0307786 8.92781 0.0163971 9.08023C0.343678 10.0851 0.900941 10.9939 1.62922 11.7504C1.74126 11.8661 1.92406 11.8943 2.06559 11.8153L3.32164 11.121C3.84942 11.5556 4.45681 11.8915 5.11432 12.1117V13.5004C5.11432 13.6584 5.22931 13.7967 5.39148 13.8306C6.47357 14.0621 7.5822 14.0508 8.61122 13.8306C8.77338 13.7967 8.88837 13.6584 8.88837 13.5004V12.1117C9.54294 11.8887 10.1503 11.5528 10.681 11.121L11.9371 11.8153C12.0816 11.8943 12.2614 11.8689 12.3735 11.7504C13.1018 10.9968 13.659 10.0879 13.9863 9.08023C14.0305 8.92499 13.9657 8.76128 13.8212 8.68225ZM6.9984 9.25523C5.69812 9.25523 4.63961 8.24193 4.63961 6.99718C4.63961 5.75242 5.69812 4.73912 6.9984 4.73912C8.29868 4.73912 9.35718 5.75242 9.35718 6.99718C9.35718 8.24193 8.29868 9.25523 6.9984 9.25523Z" fill="#4985FF"/>
                    </svg>
                    <div class="label">Профиль</div>
                </div>
                <div @click="logOut()" class="flex-row">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 13H2.33333C1.97971 13 1.64057 12.8595 1.39052 12.6095C1.14048 12.3594 1 12.0203 1 11.6667V2.33333C1 1.97971 1.14048 1.64057 1.39052 1.39052C1.64057 1.14048 1.97971 1 2.33333 1H5" stroke="#4985FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9.66602 10.3332L12.9993 6.99984L9.66602 3.6665" stroke="#4985FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13 7H5" stroke="#4985FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="label">Выйти</div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return {
            showUserMenu: false,
            user: ''
        }
    },
    mounted(){
        this.user = JSON.parse(localStorage.getItem('xyzSessionAoUser'))
    },
    methods:{
        logOut(){
            localStorage.removeItem('xyzSessionAo');
            localStorage.removeItem('xyzSessionAoUser');
            this.$router.push({ name: 'home' })
        }
    }
}
</script>
<style lang="scss" scoped>
    .top-nav{
        padding: 62px 0;
        overflow: hidden;
        .nav-header{
            text-align: left;
            font-weight: 600;
            font-size: 24px;
            line-height: 29px;
            letter-spacing: 0.3px;
            color: #252733;
        }
        .nav-user{
            margin-top: 4px;
            position: absolute;
            right: 58px;
            top: 62px;
            .notify{
                cursor: pointer;
                position: relative;
                .label{
                    cursor: pointer;
                    position: absolute;
                    top: 3px;
                    right: 0;
                    width: 6px;
                    height: 6px;
                    border-radius: 50%;
                    background: #4985FF;
                }
                svg{
                    cursor: pointer;
                }
            }
            .divider{
                margin: -5px 17px 0 23px;
                width: 1px;
                height: 32px;
                background: #DFE0EB;
            }
            .user-name{
                cursor: pointer;
                font-weight: 600;
                font-size: 14px;
                line-height: 20px;
                text-align: right;
                letter-spacing: 0.2px;
                color: #06397D;
            }
            .user-img{
                cursor: pointer;
                margin: -12px 0 auto 8px;
                height: 44px;
                width: 44px;
                border-radius: 50%;
                img{
                    cursor: pointer;
                    padding: 2px;
                    border: 2px solid #4985FF;
                    object-fit: cover;
                    border-radius: 50%;
                }
            }
            .user-drop-menu{
                position: absolute;
                right: 0;
                top: 40px;
                z-index: 99;
                background: #FFFFFF;
                box-shadow: 0px 0px 10px rgba(73, 133, 255, 0.15);
                border-radius: 6px;
                padding: 6px 18px;
                .flex-row{
                    padding: 9px 0;
                    cursor: pointer;
                    .label{
                        margin-left: 9px;
                        font-size: 14px;
                        line-height: 16px;
                        text-align: left;
                        color: #4985FF;
                    }
                    svg, .label{
                        cursor: pointer;
                    }
                }
                .flex-row:last-of-type{
                    border-top: 0.5px solid #DFE0EB;
                }
            }
            .notify-menu{
                position: absolute;
                display: none;
                top: 30px;
                right: 150px;
                z-index: 99;
                padding: 16px;
                background: #FDFDFD;
                box-shadow: 0px 0px 10px rgba(73, 133, 255, 0.15);
                border-radius: 10px;
                .notify-title{
                    text-align: left;
                    font-weight: 600;
                    font-size: 14px;
                    line-height: 17px;
                    color: #06397D;
                }
                .notify-items{
                    margin-top: 12px;
                    .item{
                        cursor: pointer;
                        margin-top: 10px;
                        .circle{
                            cursor: pointer;
                            margin-top: 2px;
                            border: 2px solid #29CC97;
                            border-radius: 50%;
                            height: 12px;
                            width: 12px;
                        }
                        .middle{
                            cursor: pointer;
                            margin-left: 9px;
                            .status{
                                cursor: pointer;
                                text-align: left;
                                width: 120px;
                                font-size: 11px;
                                line-height: 12px;
                                color: #252733;
                                -webkit-line-clamp: 1; /* no of lines */
                                text-overflow: ellipsis;
                                white-space: nowrap;
                                overflow: hidden !important;
                            }
                            .name{
                                cursor: pointer;
                                text-align: left;
                                margin-top: 2px;
                                width: 120px;
                                font-size: 11px;
                                line-height: 18px;
                                white-space: nowrap;
                                color: #787878;
                                -webkit-line-clamp: 1; /* no of lines */
                                text-overflow: ellipsis;
                                overflow: hidden !important;
                            }
                        }
                        .date{
                            cursor: pointer;
                            text-align: left;
                            font-size: 9px;
                            line-height: 10px;
                            letter-spacing: 0.2px;
                            color: #C5C5C5;
                            width: 42px;
                        }
                    }
                }
            }
            .dropdwn:hover .notify-menu {display: flex;}
        }
    }
</style>

