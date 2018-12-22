<template>
    <input type="button" value="新規登録" @click="moveToCreatePage">
</template>

<script>
    export default {
        props: {
            createPageUrl : {
                type:     String,
                required: true,
            },
        },
        methods: {
            moveToCreatePage() {
                location.href = this.createPageUrl;
            },
        },
    }
</script>
