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
                                        <li><a href="#"> <i class="fa fa-phone"></i> +7 700 364 76 17</a></li>
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
                                        <li><a href="#"> <i class="fa fa-home"></i> </a></li>
                                        <ul id="navigation">
                                            <li><a class="navbar-brand" href="/"><h4>Главная</h4></a></li>
                                            <li><a class="navbar-brand" href="/services">Сервисы</a></li>
                                            <li><a class="navbar-brand" href="/about">О компании</a></li>
                                            <li><a class="navbar-brand" href="/service_details">Для Клиентов</a></li>
                                            <li><a class="navbar-brand" href="/contact">Контакты</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="short_contact_list">
                                    <div class="book_btn d-none d-lg-block">
                                        <button type="button" class="btn btn-outline-primary">Оставить Заявку</button>
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
    name: "HeaderComponent"
}
</script>

<style scoped>

</style>
