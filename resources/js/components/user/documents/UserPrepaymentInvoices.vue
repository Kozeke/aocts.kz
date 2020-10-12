<template>
    <div class="main">
        <UserSide></UserSide>
        <div class="main-info flex-col">
            <UserNav></UserNav>
            <div class="containe flex-row">
                <div class="content flex-col">
                    <UserDocumentsRouter></UserDocumentsRouter>
                    <div class="content-info">
                        <div class="field-list flex-col">
                            <div class="head">Выберите договор и введите количество вагонов:</div>
                            <div class="item-list flex-col">
                                <div class="item-label flex-row">
                                    <div class="name">Номер договора</div>
                                    <div class="date">Период сверки</div>
                                </div>
                                <div class="item-scroll">
                                    <div v-for="i in 8" :key="i" class="item flex-row">
                                        <div class="name">№ЦТС-2020-14</div>
                                        <div class="date">01.07.2020 - 04.08.2020</div>
                                        <div class="setting">
                                            <svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 4C3.1 4 4 3.1 4 2C4 0.9 3.1 0 2 0C0.9 0 0 0.9 0 2C0 3.1 0.9 4 2 4ZM2 6C0.9 6 0 6.9 0 8C0 9.1 0.9 10 2 10C3.1 10 4 9.1 4 8C4 6.9 3.1 6 2 6ZM2 12C0.9 12 0 12.9 0 14C0 15.1 0.9 16 2 16C3.1 16 4 15.1 4 14C4 12.9 3.1 12 2 12Z" fill="#C5C5C5"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import UserSide from '../UserSide'
import UserNav from '../UserNav'
import UserDocumentsRouter from './UserDocumentsRoute'

export default {
    components: {
        UserSide,
        UserNav,
        UserDocumentsRouter
    },
    data(){
        return {
            
        }
    },
    methods: {
        
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
                    background: #FFFFFF;
                    border: 1px solid #DFE0EB;
                    border-radius: 6px;       
                    .content-info{
                        padding: 36px 28px 100px 28px;
                        .field-list{
                            margin-top: 0px;
                            width: 100%;
                            background: #FFFFFF;
                            position: relative;
                            .head{
                                text-align: left;
                                font-weight: 500;
                                font-size: 18px;
                                line-height: 22px;
                                color: #06397D;
                            }
                            .item-list{
                                height: 376px;
                                margin-top: 28px;
                                .item-label{
                                    padding: 10px 0;
                                    border-bottom: 1px solid #DFE0EB;
                                    .name, .date{
                                        text-align: left;
                                        font-weight: 500;
                                        font-size: 14px;
                                        line-height: 17px;
                                        color: #788899;
                                    }
                                    .name{
                                        width: 42%;
                                        margin-right: 2%;
                                    }
                                    .date{
                                        width: 56%;
                                    }
                                }
                                .item-scroll{
                                    overflow-y: scroll;
                                }
                                .item{
                                    position: relative;
                                    padding: 25px 0;
                                    border-bottom: 1px solid #DFE0EB;
                                    .name, .date{
                                        text-align: left;
                                        font-weight: 500;
                                        font-size: 14px;
                                        line-height: 17px;
                                        color: #252733;
                                    }
                                    .name{
                                        width: 42%;
                                        margin-right: 2%;
                                    }
                                    .date{
                                        width: 56%;
                                    }
                                    .setting{
                                        position: absolute;
                                        top: 21px;
                                        right: 0;
                                        cursor: pointer;
                                        text-align: right;
                                    }
                                }
                            }
                        }
                        ::-webkit-scrollbar {
                            width: 3px;
                        }
                        ::-webkit-scrollbar-track {
                            background: #f1f1f1;
                        }
                        ::-webkit-scrollbar-thumb {
                            background: #4985FF;
                        }
                        ::-webkit-scrollbar-thumb:hover {
                            background: #4985FF;
                        }
                    }
                }
            }
        }
    }
</style>

