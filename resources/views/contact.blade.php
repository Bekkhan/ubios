@extends("main_layout")
@section("scripts-added")
    <script src="https://api-maps.yandex.ru/2.1/?apikey=1b3f72f7-741d-4cc0-b88c-19a4525d18e3&lang=ru_RU" type="text/javascript"></script>
@endsection

@section("section")

    <contacts-component></contacts-component>

@endsection

@section("js-scripts")
    <script>
        ymaps.ready(init);
        function init(){

            var myMap = new ymaps.Map("map", {

                center: [43.256, 76.928],

                zoom: 12
            });
        }
    </script>
@endsection
