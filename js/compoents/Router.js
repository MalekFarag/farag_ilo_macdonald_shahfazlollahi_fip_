import SupportComponent from "./TheSupportPage.js";
import TalkComponent from "./TheTalkPage.js";
import HomeComponent from "./TheHomePage.js"

const routes = [
    { path: "/", name: "splash", component: SplashComponent },
    { path: "/home", name: "home", component: HomeComponent, props: true }
]

const router = new VueRouter({
    // mode: "history",
    routes
})

export default router