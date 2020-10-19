<template>
    <div class="top-nav">
        <div class="nav-header">
            {{ $route.meta.title }}
        </div>
        <div class="nav-user flex-row">
            <div class="notify">
                <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.00002 16C8.10377 16 8.99908 15.1047 8.99908 14H5.00096C5.00096 15.1047 5.89627 16 7.00002 16ZM13.731 11.3216C13.1272 10.6728 11.9975 9.69687 11.9975 6.5C11.9975 4.07188 10.295 2.12812 7.9994 1.65125V1C7.9994 0.447812 7.5519 0 7.00002 0C6.44815 0 6.00065 0.447812 6.00065 1V1.65125C3.70502 2.12812 2.00252 4.07188 2.00252 6.5C2.00252 9.69687 0.872834 10.6728 0.269084 11.3216C0.0815841 11.5231 -0.00154089 11.7641 2.16059e-05 12C0.00345911 12.5125 0.405647 13 1.00315 13H12.9969C13.5944 13 13.9969 12.5125 14 12C14.0016 11.7641 13.9185 11.5228 13.731 11.3216Z" fill="#788899" fill-opacity="0.6"/>
                </svg>
                <div class="label"></div>
            </div>
            <div class="divider"></div>
            <div class="user-name">{{ user.name }}</div>
            <div @click="$router.push({ name: 'profile' })" class="user-img">
                <img src="/images/m-header.png" alt="">
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return {
            user: ''
        }
    },
    mounted(){
        this.user = JSON.parse(localStorage.getItem('xyzSessionAoUser'))
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
                position: relative;
                .label{
                    position: absolute;
                    top: 3px;
                    right: 0;
                    width: 6px;
                    height: 6px;
                    border-radius: 50%;
                    background: #4985FF;
                }
            }
            .divider{
                margin: -5px 17px 0 23px;
                width: 1px;
                height: 32px;
                background: #DFE0EB;
            }
            .user-name{
                font-weight: 600;
                font-size: 14px;
                line-height: 20px;
                text-align: right;
                letter-spacing: 0.2px;
                color: #06397D;
            }
            .user-img{
                margin: -12px 0 auto 8px;
                height: 44px;
                width: 44px;
                border-radius: 50%;
                img{
                    padding: 2px;
                    border: 2px solid #4985FF;
                    object-fit: cover;
                    border-radius: 50%;
                }
            }
        }
    }
</style>

