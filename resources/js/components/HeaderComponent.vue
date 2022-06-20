<template>
    <div>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-4">
                            <div class="logo">
                                <a href="/">
                                    <h1>Ubios</h1>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-md-8">
                            <div class="header_right d-flex align-items-center">
                                <div class="short_contact_list">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-envelope"></i> ubios-service@gmail.com</a></li>
                                        <li><a href="#"> <i class="fa fa-phone"></i> +7 777 962 99 96</a></li>
                                        <li><a href="#"> <i class="fa fa-phone"></i> +7 700 364 76 117</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area" style="background-color: #e3f2fd;">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-12 d-block d-lg-none">
                                <div class="logo">
                                    <a href="/">

                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation" class="d-flex align-items-center">
                                            <li><a class="navbar-brand" href="/">{{$t('nav.main')}}</a></li>
                                            <li><a class="navbar-brand" href="/services">{{$t('nav.service')}}</a></li>
                                            <li><a class="navbar-brand" href="/about">{{$t('nav.about')}}</a></li>
                                            <li><a class="navbar-brand" href="/service_details">{{$t('nav.for_clients')}}</a></li>
                                            <li><a class="navbar-brand" href="/contact">{{$t('nav.contacts')}}</a></li>
                                            <li>
                                                <select class="navbar-brand form-control bg-transparent"
                                                        @change="changeLanguage($event)"
                                                        v-model="lang"
                                                        style="width: 90px; border:none; font-size: 15px; padding: 0" >
                                                    <option value="en">English</option>
                                                    <option value="ru">Русский</option>
                                                </select>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="short_contact_list">
                                    <div class="book_btn d-none d-lg-block">
                                        <button type="button" @click="scroll" class="btn btn-outline-primary">{{$t('nav.submit_application')}}</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

</template>

<script>
export default {
    name: "HeaderComponent",
    data: function (){
      const lang = localStorage.getItem("lang") || "en";
      return {
          lang: lang
      }
    },
    methods:{
        scroll() {
            const element = document.getElementById('estimate');
            element.scrollIntoView({ behavior: 'smooth' });
        },
        changeLanguage(event){
            localStorage.setItem("lang", event.target.value)
            window.location.reload();
        }

    }
}

</script>

<style scoped>

</style>
