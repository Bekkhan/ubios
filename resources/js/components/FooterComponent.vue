<template>
    <div>
    <!-- contact_location  -->
    <div class="contact_location">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="location_left">
                        <div class="logo">
                            <a href="/">
                                <h1>Ubios</h1>
                            </a>
                        </div>
                        <ul>
                            <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-youtube"></i> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="single_location">
                        <h3> <img src="assets/img/icon/address.svg" alt="">{{$t('main.footer_1')}}</h3>
                        <p>Almaty city, Abylaikhan 148/1</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="single_location">
                        <h3> <img src="assets/img/icon/support.svg" alt=""> {{$t('nav.contacts')}}</h3>
                        <p>+7 777 962 99 96 <br>
                            support@ubios.kz</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/ contact_location  -->
    <!-- footer start -->
    <div class="footer" style="background-color: #e3f2fd;">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul>
                                <li><a href="#">{{$t('main.block_3.avia.title')}}</a></li>
                                <li><a href="#">{{$t('main.block_3.sea.title')}}</a></li>
                                <li><a href="#">{{$t('main.block_3.earth.title')}}</a></li>
                                <li><a href="#">{{$t('main.block_3.train.title')}}</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Компания
                            </h3>
                            <ul>
                                <li><a href="#">{{$t('nav.about')}}</a></li>
                                <li><a href="#">{{$t('nav.contacts')}}</a></li>
                                <li><a href="#">{{$t('nav.services')}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">

                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                {{$t('main.footer_2.subscribe')}}
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" :placeholder="$t('main.footer_2.email')">
                                <button type="submit" class="btn btn-outline-primary">{{$t('main.footer_2.subscribe')}}!</button>
                            </form>
                            <p class="newsletter_text"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ footer end  -->

    </div>
</template>

<script>
export default {
    name: "FooterComponent"
}
</script>

<style scoped>

</style>
