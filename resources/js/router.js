
import VueRouter from 'vue-router';
import Note   from './components/Note';
import  Carousel  from './components/Carousel';

export default new VueRouter({
routes: [
    {
        path: '/note',
        component : Note
    },
   
    {
        path: '/carousel',
        component : Carousel
    },

],
    mode: "history"
})
