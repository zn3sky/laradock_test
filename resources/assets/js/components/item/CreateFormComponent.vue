<template>
    <div>
        <div>商品名:<input type="text" v-model="name"></div>
        <div v-if="hasNameEmptyError">商品名を入力してください</div>
        <div v-if="hasNameOverError">商品名はXX文字以内で入力してください</div>
        <div>
            <input type="button" value="一覧へ戻る" @click="moveToIndex()">
            <input type="button" value="登録" @click="save()" :disabled="hasError">
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            indexUrl : {
                type:     String,
                required: true,
            },
            storeUrl : {
                type:     String,
                required: true,
            },
        },
        data: function () {
            return {
                name: '',
            }
        },
        computed: {
            hasNameEmptyError: function() {
                // TODO 実装
                if (!this.name) {
                    return true;
                }
                return false;
            },
            hasNameOverError: function() {
                // TODO 実装
                return false;
            },
            hasError: function() {
                return (this.hasNameEmptyError || this.hasNameOverError);
            },
        },
        methods: {
            moveToIndex() {
                location.href = this.indexUrl;
            },
            save() {
                var form = document.createElement('form');
                form.setAttribute('action', this.storeUrl);
                form.setAttribute('method', 'post');
                form.style.display = 'none';
                document.body.appendChild(form);

                var token = document.createElement('input');
                token.setAttribute('type', 'hidden');
                token.setAttribute('name', '_token');
                token.setAttribute('value', $('meta[name="csrf-token"]').attr('content'));
                form.appendChild(token);

                var input = document.createElement('input');
                input.setAttribute('type', 'hidden');
                input.setAttribute('name', 'name');
                input.setAttribute('value', this.name);
                form.appendChild(input);
                
                form.submit();
            },
        },
    }
</script>
