<template>
    <div class="list-item flex-row">
        <div @click="$router.push({ name: 'acts-of-completed-work' })" class="item" :class="{ active: $route.name === 'acts-of-completed-work' }">Акты выполненных работ</div>
        <div @click="$router.push({ name: 'act-of-reconciliation' })" class="item" :class="{ active: $route.name === 'act-of-reconciliation' }">Акт сверки</div>
        <div @click="$router.push({ name: 'prepayment-invoices' })" class="item" :class="{ active: $route.name === 'prepayment-invoices' }">Счета на предоплату</div>
        <div @click="$router.push({ name: 'agreements' })" class="item" :class="{ active: $route.name === 'agreements' }">Соглашения</div>
    </div>
</template>
<script>
export default {
    
}
</script>
<style lang="scss" scoped>
    .list-item{
        padding: 0 24px;
        border-bottom: 1px solid #DFE0EB;
        .item{
            cursor: pointer;
            padding: 20px 24px;
            font-weight: 500;
            font-size: 16px;
            line-height: 22px;
            color: #06397D;
        }
        .active{
            border-bottom: 3px solid #4985FF;
        }
    }
</style>

