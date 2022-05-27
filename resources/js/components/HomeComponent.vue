<template>

    <div>
        <v-header></v-header>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" height="450" src="assets/img/banner/bradcam2.png" >
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="slider-title">Морские Перевозки</h2>
                        <p class="slider-text">Морские грузоперевозки позволяют приобретать продукцию практически из любой точки земного шара. При этом, во время отгрузки продукции не так важен вес и размер того или иного товара.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" height="450" src="assets/img/banner/land-trans.jpg" >
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="slider-title">Наземный транспорт</h2>
                        <p class="slider-text">Доступность к подъездным путям складов и производственных предприятий для загрузки и выгрузки товара; универсальность. Главным направлением нашей работы считаются железнодорожные перевозки из других стран в РК.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 " height="450" src="assets/img/banner/banner.png"  >
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="slider-title">Авиаперевозки</h2>
                        <p class="slider-text">Главный плюс авиаперевозки максимальная оперативность доставки продукции из одного пункта в другой за несколько часов.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="transportaion_area" style="background-color: #e3f2fd;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_transport">
                            <div class="icon">
                                <img src="assets/img/svg_icon/airplane.png" alt="">
                            </div>
                            <h3>Транспортная логистика</h3>
                            <p>Транспортная логистика предполагает организацию перемещения объектов в заданную точку с разработкой оптимального маршрута. Можно выделить следующие основные задачи:</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_transport">
                            <div class="icon">
                                <img src="assets/img/svg_icon/live.png" alt="">
                            </div>
                            <h3>МОНИТОРИНГ</h3>
                            <p>Осуществляем мониторинг рынка с целью выявления надёжных поставщиков. Имеем наработки и предлагаем поиск поставщика по заданным параметрам.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_transport">
                            <div class="icon">
                                <img src="assets/img/svg_icon/world.png" alt="">
                            </div>
                            <h3>ГРУЗОПЕРЕВОЗКИ</h3>
                            <p>Фуры из Алматы ежедневно отправляются по всем международным направлениям. Наиболее популярные маршруты это страны СНГ (Россия, Украина, Беларусь).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="service_area" >
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title mb-50 text-center">
                            <h3>
                                Наши услуги
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="service_active owl-carousel">
                            <div class="single_service">
                                <div class="thumb">
                                    <img src="assets/img/service/7.png" alt="">
                                </div>
                                <div class="service_info">
                                    <h3><a href="/service_details">Железнодорожные транспорт</a></h3>
                                    <p>Это транспортное средство, на транспортных средствах, которые движутся по рельсам (рельсам или железным дорогам). Это один из наиболее важных, часто используемых и очень экономичных способов передвижения и перевозки грузов как на большие, так и на короткие расстояния</p>
                                </div>
                            </div>
                            <div class="single_service">
                                <div class="thumb">
                                    <img src="assets/img/service/2.png" alt="">
                                </div>
                                <div class="service_info">
                                    <h3><a href="/service_details">Наземный транспорт</a></h3>
                                    <p>Наземный транспорт - это перевозка или перемещение людей, животных или товаров из одного места в другое место на суше.</p>
                                </div>
                            </div>
                            <div class="single_service">
                                <div class="thumb">
                                    <img src="assets/img/service/3.png" alt="">
                                </div>
                                <div class="service_info">
                                    <h3><a href="assets/service_details">Авиаперевозки</a></h3>
                                    <p>Международные перевозки, Надежные авиаперевозки грузов из Китая по всему миру.</p>
                                </div>
                            </div>
                            <div class="single_service">
                                <div class="thumb">
                                    <img src="assets/img/service/1.png" alt="">
                                </div>
                                <div class="service_info">
                                    <h3><a href="/service_details">Морские перевозки</a></h3>
                                    <p>Морские грузовые перевозки - это перевозка грузов морским путем с помощью морских контейнеров.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- contact_action_area  -->
        <div class="contact_action_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-md-6">
                        <div class="action_heading">
                            <h3>100% безопасность и надежность</h3>
                            <p>В Ubios service мы хотим убедиться, что вы чувствуете себя уверенно при заказе у нас. Мы собираем вашу личную информацию для того, чтобы разместить ваш заказ и быстро доставить вам необходимые товары в 100% безопасной среде. Мы не храним информацию о вашей кредитной карте и никогда не будем делиться, продавать или распространять вашу личную информацию, такую как имя, адрес или любую другую информацию, которую вы нам предоставляете. Мы не занимаемся продажей или передачей вашей личной информации.</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-6">
                        <div class="call_add_action">
                            <a href="#" class="boxed-btn3">+777 962 99 96</a>
                        </div>
                        .
                        <div class="call_add_action">
                            <a href="#" class="boxed-btn3">+700 364 76 17</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /contact_action_area  -->
        <!-- chose_area  -->
        <div class="chose_area ">
            <div class="container">
                <div class="features_main_wrap">
                    <div class="row  align-items-center">
                        <div class="col-xl-5 col-lg-5 col-md-6">
                            <div class="about_image">
                                <img src="assets/img/about/about.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="features_info">
                                <h3>Почему клиенты доверяют нам?</h3>
                                <ul>
                                    <li> Уровень обслуживания. Мы ориентируемся на европейские стандарты качества; </li>
                                    <li> Предоставление широкого спектра услуг. </li>
                                    <li> Обратившись к нам, вы можете воспользоваться экспедированием грузов, заказать железнодорожные, контейнерные перевозки, арендовать подвижной состав. </li>
                                    <li> Защита интересов клиента. Потребности клиентов являются приоритетом для нашей компании; </li>
                                    <li> Прозрачное и основанное на доверии сотрудничество. </li>
                                    <li> Гибкая ценовая политика; </li>
                                    <li> Индивидуальный подход к каждому клиенту.</li>
                                </ul>

                                <div class="about_btn">
                                    <a class="boxed-btn3-line" href="/about">О Компании</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ chose_area  -->

        <!-- counter_area  -->
        <div class="counter_area">
            <div class="container">
                <div class="offcan_bg">
                    <div class="row">
                        <div class="col-xl-3 col-md-3">
                            <div class="single_counter text-center">
                                <h3> <span class="counter">5</span> <span>+ years</span> </h3>
                                <p>on the market of Kazakhstan</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3">
                            <div class="single_counter text-center">
                                <h3> <span class="counter">51</span> <span>+</span> </h3>
                                <p>Business Success</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3">
                            <div class="single_counter text-center">
                                <h3> <span class="counter">500</span></h3>
                                <p>Happy Client</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3">
                            <div class="single_counter text-center">
                                <h3> <span class="counter">700</span></h3>
                                <p>Business Done</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /counter_area  -->

        <!-- feedback  -->
        <!-- /feedback  -->
        <feedback-form-component></feedback-form-component>


        <v-footer></v-footer>

    </div>

</template>

<script>
import FeedbackFormComponent from "./FeedbackFormComponent";
export default {
name: "HomeComponent",
    components: {FeedbackFormComponent}
}
</script>

<style scoped>
.slider-title{
    color: #d1ecf1;
}
.slider-text{
    color: whitesmoke;
}

.bg-imagee{
    background: url("/assets/img/banner/land-trans.png");
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
