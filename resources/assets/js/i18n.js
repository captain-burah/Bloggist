import VueI18n from 'vue-i18n'
import Vue from 'vue'
Vue.use(VueI18n);

const i18n = new VueI18n({
  locale: 'en',
  messages: {}
})
 
export default new VueI18n({
  locale: localStorage.getItem('lang') || 'en',
  messages: {
    en: en,
    si: si,
    ta: ta
  }
})