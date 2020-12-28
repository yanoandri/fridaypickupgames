require('./bootstrap');

require('alpinejs');
require('@fortawesome/fontawesome-free/js/all.js');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

import HomeComponent from './components/admin/HomeComponent.vue'
import AttendanceComponent from './components/admin/AttendanceComponent.vue'
import PlayerComponent from './components/admin/PlayerComponent.vue'
import MatchComponent from './components/admin/MatchComponent.vue'
import StatsComponent from './components/admin/StatsComponent.vue'
import TeamComponent from './components/admin/TeamComponent.vue'

const routes = [
  {
      name: 'attendance',
      path: '/',
      component: AttendanceComponent
  },
  {
      name: 'player',
      path: '/player',
      component: PlayerComponent
  },
  {
      name: 'match',
      path: '/match',
      component: MatchComponent
  },
  {
    name: 'stats',
    path: '/stats',
    component: StatsComponent
  },
  {
    name: 'team',
    path: '/team',
    component: TeamComponent
  }
];

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, HomeComponent)).$mount('#app');