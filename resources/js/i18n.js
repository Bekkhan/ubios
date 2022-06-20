import Vue from 'vue'
import VueI18n from "vue-i18n";

Vue.use(VueI18n)
import en from './lang/en.json';
import ru from './lang/ru.json';

export const i18n = new VueI18n({
    locale: localStorage.getItem("lang") || 'ru',
    fallbackLocale: "en",
    messages:{
        en: en,
        ru: ru,
    }
});
