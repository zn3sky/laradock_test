<template>
    <input type="button" value="新規登録" @click="moveToCreatePage">
</template>

<script>
    export default {
        methods: {
            moveToCreatePage() {
                // TODO PHP_VARSから取得
                location.href = '/items/create';
            },
        },
    }
</script>
