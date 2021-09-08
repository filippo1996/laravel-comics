import Card from './components/Card';
import Product from './components/Product';
import ExampleComponent from './components/ExampleComponent';


export default {
    mode: 'history',

    routes: [
        {
            // Esempio componente Pagina non trovata 404
            path: '*',
            component: ExampleComponent
        },
        {
            path: '/',
            name: 'index',
            component: Card,
        },
        {
            path: '/comics/:id',
            name: 'show-comics',
            component: Product
        }
    ]
}