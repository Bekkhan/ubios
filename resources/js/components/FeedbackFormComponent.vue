<template>
    <!-- Estimate_area start  -->
    <div class="Estimate_area overlay" id="estimate">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="Estimate_info">
                        <h3>{{$t('main.block_7.form_title')}}</h3>
                        <p>{{$t('main.block_7.form_desc')}}</p>
                        <a href="#" class="boxed-btn3">+7 777 969 99 96</a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-7">
                    <div class="form">
                        <form action="#">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="text" @change="enableButton" placeholder="Your name" v-model="feedback.name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="email" @change="enableButton" placeholder="Email" v-model="feedback.email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="text" @change="enableButton" placeholder="Phone" v-model="feedback.phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="text" @change="enableButton" placeholder="Package name" v-model="feedback.package_name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="text" @change="enableButton" placeholder="From" v-model="feedback.source_point">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="text" @change="enableButton" placeholder="Where" v-model="feedback.destination">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="number" @change="enableButton" placeholder="Volume (T)" v-model="feedback.volume">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select class="nice-select" v-model="feedback.contains" @change="enableButton">
                                            <option value="Жд транспорт">{{$t('main.block_3.train.title')}}</option>
                                            <option value="Авиа транспорт">{{$t('main.block_3.avia.title')}}</option>
                                            <option value="Водный транспорт">{{$t('main.block_3.sea.title')}}</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="input_field">
                                        <input type="date" @change="enableButton" placeholder="When" v-model="feedback.date">
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
                                <div class="col-xl-12">
                                    <div class="input_field">
                                        <button class="boxed-btn3-line" type="button"  @click="createFeedback" :disabled="errors.length > 0" >{{$t('main.block_7.form_button')}}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
const defaultForm = {
    name: null,
    phone: null,
    email: null,
    source_point: null,
    destination: null,
    package_name: null,
    volume: null,
    contains: null,
    date: null
}
export default {
    name: "FeedbackFormComponent",
    data() {
        return {
            feedback:{
                name: null,
                phone: null,
                email: null,
                source_point: null,
                destination: null,
                package_name: null,
                volume: null,
                contains: null,
                date: null
            },
            form: defaultForm,
            errors:[],
        }
    },
    methods: {
        enableButton(){
            this.errors = []
        },
        clearAll(){
            this.feedback.name = null
            this.feedback.email = null
            this.feedback.phone = null
            this.feedback.contains = null
            this.feedback.source_point = null
            this.feedback.destination = null
            this.feedback.date = null
            this.feedback.volume = null
            this.feedback.package_name = null
        },
        createFeedback() {
            axios
                .post('/api/create/feedback', this.feedback)
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
.nice-select{
    width: 100%;
    height: 50px;
    border-radius: 5px;
    border: 1px solid #667686;
    padding: 10px 15px;
    font-size: 14px;
    background: transparent ;
    color: #fff;
    margin-bottom: 15px;
}

.nice-select::placeholder{
    color: #C7C7C7;
    font-weight: 400;
    font-size: 14px;
}
.nice-select:focus{
    outline: none;
}
</style>
