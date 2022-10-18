import Home from "../components/Home.vue";
import HelloWorld from "../components/HelloWorld.vue";

var rutes = [
    {
        path: '/',
        name: 'Home',
        component: Home,
        meta: {
            guest: true
        }
    },
    {
        path: '/hello',
        name: 'HelloWorld',
        component: HelloWorld,
        meta: {
            guest: true
        }
    }
]

export default rutes;