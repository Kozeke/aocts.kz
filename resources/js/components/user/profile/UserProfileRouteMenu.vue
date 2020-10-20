<template>
    <div class="list-item flex-row">
        <div @click="$router.push({ name: 'profile' })" class="item" :class="{ active: $route.name === 'profile' }">Основное</div>
        <div @click="$router.push({ name: 'contacts' })" class="item" :class="{ active: $route.name === 'contacts' }">Контакты</div>
        <div @click="$router.push({ name: 'document' })" class="item" :class="{ active: $route.name === 'document' }">Документы</div>
        <div @click="$router.push({ name: 'payment' })" class="item" :class="{ active: $route.name === 'payment' }">Банковские реквизиты</div>
        <div @click="$router.push({ name: 'password' })" class="item" :class="{ active: $route.name === 'password' }">Пароль</div>
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
            padding: 20px 12px;
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

