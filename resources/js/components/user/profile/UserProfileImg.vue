<template>
    <div v-if="user" class="outer flex-col">
        <img src="/images/Profile-picture.png" alt="">
        <div class="name">{{ user.manager_name }}</div>
        <div class="mail">{{ user.email }}</div>
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
    .outer{
        position: relative;
        left: 0;
        background: #FFFFFF;
        border: 1px solid #DFE0EB;
        border-radius: 6px;
        padding: 46px;
        height: 280px;
        img{
            margin: 0 auto;
            height: 102px;
            width: 102px;
            border-radius: 50%;
            object-fit: cover;
        }
        .name{
            margin-top: 20px;
            text-align: center;
            font-weight: 600;
            font-size: 18px;
            line-height: 16px;
            letter-spacing: 0.2px;
            color: #06397D;
        }
        .mail{
            margin-top: 12px;
            font-size: 16px;
            line-height: 20px;
            text-align: center;
            letter-spacing: 0.2px;
            color: #787878;
        }
    }
</style>


