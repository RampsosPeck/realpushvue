<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div id="card" class="card card-info" v-for="message in messages">

                    <div class="card-header"><strong>{{ message.user.name }}</strong></div>

                    <div class="card-body">
                        <p>{{ message.message }}</p>
                        <span class="text-diff pull-right"><em>{{ message.created_at | timeago }}</em></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    moment.locale('es');
    export default {
        props: ['messages'],
        mounted() { 
            //console.log(this.messages);
        },
        filters: {
            timeago(value) {
                return moment.utc(value).local().fromNow();
            }
        }
    }
</script>
<style>
.card{
    margin-bottom: 0;
}
.text-diff {
        font-size: 0.8em;
        color: #cccccc;
    }
</style>

