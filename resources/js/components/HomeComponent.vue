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
                        <h2 class="slider-title">{{$t('main.block_1.slider_1.title')}}</h2>
                        <p class="slider-text">{{$t('main.block_1.slider_1.desc')}}</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" height="450" src="assets/img/banner/land-trans.jpg" >
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="slider-title">{{$t('main.block_1.slider_2.title')}}</h2>
                        <p class="slider-text">{{$t('main.block_1.slider_2.desc')}}</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 " height="450" src="assets/img/banner/banner.png"  >
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="slider-title">{{$t('main.block_1.slider_3.title')}}</h2>
                        <p class="slider-text">{{$t('main.block_1.slider_1.desc')}}</p>
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
                            <h3>{{$t('main.block_2.logistic.title')}}</h3>
                            <p>{{$t('main.block_2.logistic.desc')}}</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_transport">
                            <div class="icon">
                                <img src="assets/img/svg_icon/live.png" alt="">
                            </div>
                            <h3>{{$t('main.block_2.monitor.title')}}</h3>
                            <p>{{$t('main.block_2.monitor.desc')}}</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_transport">
                            <div class="icon">
                                <img src="assets/img/svg_icon/world.png" alt="">
                            </div>
                            <h3>{{$t('main.block_2.transport.title')}}</h3>
                            <p>{{$t('main.block_2.transport.desc')}}</p>
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
                                {{$t('main.block_3.title')}}
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
                                    <h3><a href="/service_details">{{$t('main.block_3.train.title')}}</a></h3>
                                    <p>{{$t('main.block_3.train.desc')}}</p>
                                </div>
                            </div>
                            <div class="single_service">
                                <div class="thumb">
                                    <img src="assets/img/service/2.png" alt="">
                                </div>
                                <div class="service_info">
                                    <h3><a href="/service_details">{{$t('main.block_3.earth.title')}}</a></h3>
                                    <p>{{$t('main.block_3.earth.desc')}}</p>
                                </div>
                            </div>
                            <div class="single_service">
                                <div class="thumb">
                                    <img src="assets/img/service/3.png" alt="">
                                </div>
                                <div class="service_info">
                                    <h3><a href="assets/service_details">{{$t('main.block_3.avia.title')}}</a></h3>
                                    <p>{{$t('main.block_3.avia.desc')}}</p>
                                </div>
                            </div>
                            <div class="single_service">
                                <div class="thumb">
                                    <img src="assets/img/service/1.png" alt="">
                                </div>
                                <div class="service_info">
                                    <h3><a href="/service_details">{{$t('main.block_3.sea.title')}}</a></h3>
                                    <p>{{$t('main.block_3.sea.desc')}}</p>
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
                            <h3>{{$t('main.block_4.title')}}</h3>
                            <p>{{$t('main.block_4.desc')}}</p>
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
                                <h3>{{$t('main.block_5.title')}}</h3>
                                <ul>
                                    <li> {{$t('main.block_5.desc_1')}} </li>
                                    <li> {{$t('main.block_5.desc_2')}} </li>
                                    <li> {{$t('main.block_5.desc_3')}} </li>
                                    <li> {{$t('main.block_5.desc_4')}} </li>
                                    <li> {{$t('main.block_5.desc_5')}} </li>
                                    <li> {{$t('main.block_5.desc_6')}} </li>
                                    <li> {{$t('main.block_5.desc_7')}} </li>
                                </ul>

                                <div class="about_btn">
                                    <a class="boxed-btn3-line" href="/about">{{$t('nav.about')}}</a>
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
                                <h3> <span class="counter">5</span> <span>+</span> </h3>
                                <p>{{$t('main.block_6.counter1')}}</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3">
                            <div class="single_counter text-center">
                                <h3> <span class="counter">51</span> <span>+</span> </h3>
                                <p>{{$t('main.block_6.counter2')}}</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3">
                            <div class="single_counter text-center">
                                <h3> <span class="counter">500</span></h3>
                                <p>{{$t('main.block_6.counter3')}}</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3">
                            <div class="single_counter text-center">
                                <h3> <span class="counter">700</span></h3>
                                <p>{{$t('main.block_6.counter4')}}</p>
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

        <floating-button-component></floating-button-component>
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
