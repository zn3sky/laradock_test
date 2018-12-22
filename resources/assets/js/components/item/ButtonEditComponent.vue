<template>
    <input type="button" value="編集" @click="moveToEditPage">
</template>

<script>
    export default {
        props: {
            editPageUrl : {
                type:     String,
                required: true,
            },
        },
        methods: {
            moveToEditPage() {
                location.href = this.editPageUrl;
            },
        },
    }
</script>
