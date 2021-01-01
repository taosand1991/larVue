import Vue from 'vue';
import VueRouter from 'vue-Router';
import Login from './components/Login';
import ExampleComponent from './components/ExampleComponent'


Vue.use(VueRouter);


const routes = [
    {path:'/login', component:Login},
    {path:'/home', component:ExampleComponent},
    {path:'/', redirect:'/home'}
]

const router = new VueRouter({
    routes,
})

export default router;