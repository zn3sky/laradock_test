<template>
    <input type="button" value="編集" @click="moveToEditPage">
</template>

<script>
    export default {
        props: {
            id : {
                type:     Number,
                required: true,
            },
        },
        methods: {
            moveToEditPage() {
                // TODO PHP_VARSから取得
                location.href = '/items/' + this.id + '/edit';
            },
        },
    }
</script>
