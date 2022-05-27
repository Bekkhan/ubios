<template>
    <div>
        <v-header></v-header>
        <!-- bradcam_area  -->
        <div class="bradcam_area bradcam_bg_1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text text-center">
                            <h3>Contact Us</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ bradcam_area  -->

        <!-- ================ contact section start ================= -->
        <section class="contact-section">
            <div class="container">
                <div id="map">


                </div>


                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Ask a question?</h2>
                    </div>
                    <form-contact-component></form-contact-component>
                    <div class="col-lg-3 offset-lg-1">

                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+7 777 962 99 96</h3>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>ubios-service@gmail.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ contact section end ================= -->

        <v-footer></v-footer>
    </div>
</template>

<script>
export default {
    name: "ContanctsComponent"
}
</script>

<style scoped>

#map{
    width: 100%;
    max-height: 500px;
    min-height: 350px;
}

</style>
