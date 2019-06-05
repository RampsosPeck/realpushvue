<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-info" >

                    <div class="card-footer">
                        <form @submit.prevent.keyup="sent">
                            <div class="form-group">
                                <input type="text" class="form-control" v-model="message.message">
                            </div>
                            <div class="form-group">
                                <button type="submit" class=" btn btn-primary">Enviar mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['user'],
        data(){
            return{
                message:{
                    message: '',
                    user: this.user
                }
            }
        },
        methods: {
            sent(){
                this.$emit('messagesent', this.message)
                this.message = {}
            }
        },
        mounted() {
            //console.log(this.messages);
        }
    }
</script>
<style>
.card{
    margin-bottom: 0;
}
</style>
