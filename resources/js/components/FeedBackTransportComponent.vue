<template>
    <!-- Estimate_area start  -->
    <div class="Estimate_area overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="Estimate_info">
                        <h3>Get free Estimate</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture
                            placing.</p>
                        <a href="#" class="boxed-btn3">+7 777 996 96 99</a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-7">
                    <div class="form">
                        <form action="#">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="text" placeholder="Your name" @change="enableButton" v-model="transport.name" >
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="number" placeholder="phone" @change="enableButton" v-model="transport.phone">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input_field">
                                        <select class="nice-select" v-model="transport.type" @change="enableButton" >
                                            <option value="Жд транспорт">Жд транспорт</option>
                                            <option value="Авиа транспорт">Авиа транспорт</option>
                                            <option value="Водный транспорт">Водный транспорт</option>
                                            <option value="суши(автомобильные перевозки)">суши(автомобильные перевозки)</option>

                                        </select>
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
                                        <button class="boxed-btn3-line" type="button" @click="createTransport" :disabled="errors.length > 0">Send Estimate</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Estimate_area end  -->
</template>

<script>
export default {
    name: "FeedBackTransportComponent",
    data(){
        return {
            transport:{
                name: null,
                phone: null,
                type: null,
            },
            errors:[],
        }
    },
    methods:{
        enableButton(){
            this.errors = []
        },
        clearAll(){
            this.transport.name  = null
            this.transport.type  = null
            this.transport.phone = null
        },
        createTransport() {
            axios
                .post('/api/create/transport', this.transport)
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
