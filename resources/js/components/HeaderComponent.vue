<template>
    <header>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark primaryColorBG">
            <!-- <div class="container"> -->
                
                    <!-- Left Side Of Navbar -->
                    <a
                        class="navbar-brand text-white ml-5"
                        href="http://127.0.0.1:8000/"
                    >
                        <img
                            src="/media/img/logo.png"
                            width="40"
                            height="40"
                            class="d-inline-block align-center"
                            alt="Deliverboo Logo"
                        />
                        <h4 class="d-inline-block align-center font" id="logo">
                            Deliverboo
                        </h4></a
                    >

                    <!-- Right Side Of Navbar -->
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div
                        class="collapse navbar-collapse justify-content-end mr-5"
                        id="navbarSupportedContent"
                    >
                        <form class="form-inline my-2 my-lg-0">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown">
                                    <a
                                        class="nav-link dropdown-toggle text-white"
                                        href="#"
                                        role="button"
                                        data-toggle="dropdown"
                                        aria-expanded="false"
                                    >
                                        Area Riservata
                                    </a>
                                    <div
                                        class="dropdown-menu"
                                        style="background-color: #9fc131"
                                    >
                                        <a
                                            class="dropdown-item text-white"
                                            href="http://127.0.0.1:8000/login"
                                            >Accedi</a
                                        >
                                        <a
                                            class="dropdown-item text-white"
                                            href="http://127.0.0.1:8000/register"
                                            >Registrati</a
                                        >

                                        <div class="dropdown-divider"></div>
                                        <a
                                            class="dropdown-item text-white"
                                            href="http://127.0.0.1:8000/admin"
                                            >Menu Ristoratore</a
                                        >
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
              
            <!-- </div> -->
        </nav>
       
    </header>
</template>
<script>
export default {
    name: "HeaderComponent",
    data() {
        return {
            menuItem: [
                {
                    label: "Home",
                    routeName: "home",
                },
            ],
        };
    },
};
</script>
<style lang="scss">
 @import url('https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap');

.dropdown-item:hover {
    background-color: #dbf227 !important ;
    color: #005c53 !important;
}

.font {
    font-family: 'Mochiy Pop One', sans-serif;
}

#logo {
    margin-bottom: 0 !important;
    transform: translateY(20%);
}

</style>
