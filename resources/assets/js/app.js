
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
//-------------- Vue SweetAlert v2-------------------------------------------------->
import swal from 'sweetalert2';
window.swal = swal;

const Toast = swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 8000,
  timerProgressBar: true,
  onOpen: (toast) => {
    toast.addEventListener('mouseenter', swal.stopTimer)
    toast.addEventListener('mouseleave', swal.resumeTimer)
  }
});
window.Toast = Toast;

//-------------- Vue Progress-Bar -------------------------------------------------->
import VueProgressBar from 'vue-progressbar';
Vue.use(VueProgressBar, {
  color: '#03e7fc',
  failedColor: '#fc2803',
  thickness: '7px',
  transition: {
    speed: '3s',
    opacity: '0.6s',
    termination: 3000},
  autoRevert: true,
  location: 'top',
  inverse: false
})

//-------------- Vue Filer Imports ----------------------------------------->
import { Form, HasError, AlertError } from 'vform';
import moment from 'moment';

//-------------- Vue Form -------------------------------------------------->
window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

//-------------- Vue CKeditor -------------------------------------------------->
import Vue from 'vue';
import CKEditor from '@ckeditor/ckeditor5-vue';
Vue.use( CKEditor );

//-------------- Vue-Routers--------------------------------------------------//
import VueRouter from 'vue-router'
Vue.use(VueRouter)

let routes = [
  { path: '/academy', component: require('./components/Academy.vue')},

  //------------------ Student-------------------------------//
  { path: '/student_dashboard', component: require('./components/Dashboard.vue')},
  { path: '/profile', component: require('./components/Profile.vue') },
  { path: '/users', component: require('./components/Users.vue') },
  { path: '/students', component: require('./components/Students.vue') },
  { path: '/developer', component: require('./components/Developer.vue') },
  { path: '/mylessons', component: require('./components/Lessons.vue') },
  { path: '/exams', component: require('./components/Exams.vue') },
  { path: '/orders', component: require('./components/Orders.vue') },
  { path: '/results', component: require('./components/Results.vue') },
  { path: '/assignments', component: require('./components/Assignments.vue') },
  { path: '/Student_Reg', component: require('./components/Student_Reg.vue') },

  
  
  //------------------ Lecturer-------------------------------//
  { path: '/Lessons', component: require('./lecturerComp/Lessons/Lesson.vue'), 
    children: [
      { path: '/', component: require('./lecturerComp/Lessons/Overview.vue') },
      { path: 'Overview', component: require('./lecturerComp/Lessons/Overview.vue') },
      { path: 'Analysis', component: require('./lecturerComp/Lessons/Analysis.vue') },
      { path: 'Syllabus', component: require('./lecturerComp/Lessons/Syllabus.vue') },
      
    ] },
  
  { path: '/CreateLessons', component: require('./lecturerComp/Lessons/CreateLessons/CreateLesson.vue'),
  children: [
    { path: '/', component: require('./lecturerComp/Lessons/CreateLessons/WelcomePage.vue') },
    { path: 'Design', component: require('./lecturerComp/Lessons/CreateLessons/Design.vue') },
    { path: 'Content', component: require('./lecturerComp/Lessons/CreateLessons/Content.vue') },
  
  ] },


  { path: '/createPapers', component: require('./lecturerComp/createPapers/CreatePaper.vue'), 
    children: [
      { path: '/', component: require('./lecturerComp/createPapers/WelcomePage.vue') },

      { path: 'questions', component: require('./lecturerComp/createPapers/Questions.vue') },
      { path: 'exams', component: require('./lecturerComp/createPapers/Exams.vue') },
      { path: 'intro-exit', component: require('./lecturerComp/createPapers/Intro-Exit.vue') },
      { path: 'grading', component: require('./lecturerComp/createPapers/Grading.vue') },
    
    ] },
  
    

    { path: '/tutor', component: require('./lecturerComp/Dashboard.vue')},
    { path: '/tutor/lecProfile',  component: require('./lecturerComp/Profile.vue')},
    //{ path: '/Lessons',  component: require('./lecturerComp/MyLessons.vue')},
    { path: '/Schedules',  component: require('./lecturerComp/MySchedules.vue')},
    { path: '/Layout',  component: require('./lecturerComp/SiteLayout.vue')},
    { path: '/Staff',  component: require('./lecturerComp/StaffMgt.vue')},

     
]
//------------- Vue Components-------------------------------------------------//
Vue.component(
  'passport-clients',
  require('./components/passport/Clients.vue')
);

Vue.component(
  'passport-authorized-clients',
  require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
  'passport-personal-access-tokens',
  require('./components/passport/PersonalAccessTokens.vue')
);

Vue.component(
  'tutor-dashboard', 
  require('./lecturerComp/Lmaster.vue')
);

Vue.component(
  'language-switcher', 
  require('./components/LanguageSwitcher.vue')
);
//------------- Vue Custom Event-------------------------------------------------//
let Fire = new Vue();
window.Fire = Fire;


//-------------- Vue Filters-------------------------------------------------//
  Vue.filter('upText', function(text){
    return text.charAt(0).toUpperCase() + text.slice(1)
  });

  Vue.filter('myDate', function(created){
    return moment(created).format('MMMM Do YYYY, h:mm:ss a');
  })


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const router = new VueRouter({
  mode: 'history',
  routes // short for `routes: routes`
})

const app = new Vue({
    el: '#app',
    router
});
