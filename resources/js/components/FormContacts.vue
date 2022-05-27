<template>
    <div class="col-lg-8">
        <form class="form-contact contact_form" >
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control w-100" @change="enableButton" v-model="form.text" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" message"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control valid" @change="enableButton" v-model="form.name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control valid" @change="enableButton" v-model="form.email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <input class="form-control" @change="enableButton" v-model="form.subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                    </div>
                </div>
            </div>
            <div class="alert-danger container">
                <div v-if="errors.length">
                    <b>Пожалуйста исправьте указанные поля:</b>
                    <ul>
                        <li v-for="error in errors">{{ error }}</li>
                    </ul>
                </div>
            </div>
            <div class="form-group mt-3">
                <button type="button" class="btn btn-outline-primary" @click="createFeedback" :disabled="errors.length > 0" >Send</button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    name: "FormContacts",
    data(){
        return {
            form:{
                text: null,
                name: null,
                subject: null,
                email: null,
            },
            errors:[],
        }
    },
    methods: {
        enableButton(){
            this.errors = []
        },
        clearAll(){
            this.form.name = null
            this.form.email = null
            this.form.subject = null
            this.form.text = null
        },
        createFeedback() {
            axios
                .post('/api/create/form-request', this.form)
                .then((response) => {
                    if (response.data.success) {
                        Swal.fire(
                            'Ваша заявка принята!',
                            'Спасибо что доверились нам!',
                            'success'
                        )
                        this.clearAll()
                    }

                }).catch((error) => {
                if (error.response.status === 422){
                    Swal.fire(
                        'Ошибка!',
                        'Пожалуйста проверьте все поля на правильность!',
                        'error'
                    )

                    for (const errorKey in error.response.data.errors) {
                        this.errors.push(errorKey)
                    }

                }

            })
        },
    }
}
</script>

<style scoped>

</style>
