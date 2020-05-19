<template>
    <div class="nav-bar flex-row">
        <div class="logo">DARIS</div>
        <div class="slogan">Слоган</div>
        <div class="sub-head">Мы с радостью готовы Вам помочь!</div>
        <div class="contact-us flex-row">
            <span>Связаться с нами</span>
            <div class="circle"></div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
    
    },
    mounted() {
    
    },
    methods : {
    
    }
}
</script>
<style lang="scss" scoped>
    .nav-bar{
        position: relative;
        width: 100%;
        height: 100px;
        background: #FFFFFF;
        font-size: 16px;
        line-height: 50px;
        color: #06397D;
        font-weight: 500;
        .logo{
            position: absolute;
            left: 18%;
            width: 160px;
            height: 50px;
            top: 25px;
            background: #F6F6F8;            
        }
        .slogan{
            position: absolute;
            height: 50px;
            top: 25px;
            left: calc(18% + 140px);
            width: 160px;
        }
        .sub-head{
            position: absolute;
            height: 50px;
            top: 25px;
            right: calc(18% + 220px);
        }
        .contact-us{
            cursor: pointer;
            position: absolute;
            width: 200px;
            top: 30px;
            color: #4985FF;
            right: calc(18%);
            border: 1px solid #4985FF;
            box-sizing: border-box;
            height: 40px;
            border-radius: 6px;
            span{
                cursor: pointer;
                margin: -5px 6px 5px 10px;
            }
            .circle{
                cursor: pointer;
                margin-left: 6px;
                width: 16px;
                height: 16px;
                border-radius: 50%;
                background: #4985FF;
                margin-top: 12px;
            }
        }
    }
    
</style>
