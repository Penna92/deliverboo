import Vue from "vue";

import VueRouter from "vue-router";

Vue.use(VueRouter);

import RestaurantsComponent from "./pages/RestaurantsComponent";
// import AboutComponent from "./pages/AboutComponent";
// import PostsComponent from "./pages/PostsComponent";
// import ContactComponent from "./pages/ContactComponent";
import SingleRestaurantComponent from "./pages/SingleRestaurantComponent";
// import NotFoundComponent from "./pages/NotFoundComponent";
// import CategoryPostsComponent from "./pages/CategoryPostsComponent";
const router = new VueRouter({
    // mode: "history" serve a farci sparire il cancelletto dalla navigazione
    mode: "history",
    routes: [
        {
            path: "/",
            name: "restaurants",
            component: RestaurantsComponent,
        },
        // {
        //     path: "/about",
        //     name: "about",
        //     component: AboutComponent,
        // },
        // {
        //     path: "/posts",
        //     name: "posts",
        //     component: PostsComponent,
        // },
        // {
        //     path: "/contact",
        //     name: "contact",
        //     component: ContactComponent,
        // },
        // {
        //     path: "/categories/:slug",
        //     name: "category-posts",
        //     component: CategoryPostsComponent,
        // },
        {
            path: "/restaurants/:slug",
            name: "single-restaurant",
            component: SingleRestaurantComponent,
        },
        // {
        //     path: "*",
        //     name: "page-404",
        //     component: NotFoundComponent,
        // },
    ],
});

export default router;
