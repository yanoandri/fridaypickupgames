<template>
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow" @click="isShow = !isShow">
                <a class="nav-link dropdown-toggle" :class="isShow ? 'show' : ''" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                    <!-- <img class="img-profile rounded-circle" src="img/undraw_profile.svg"> -->
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" :class="isShow ? 'show' : ''" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal" @click.prevent="logout">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                    <form id="logout" method="POST" :action="logoutUrl" style="display: none;">
                        <input type="hidden" name="_token" :value="csrf">
                    </form>
                </div>
            </li>

        </ul>

    </nav>
</template>

<script>
export default {
    name: 'navbar-component',
    data() {
        return {
            isShow: false,
            logoutUrl: 'http://localhost:8000/logout',
            loginUrl: 'http://localhost:8000/login',
            csrf: ''
        }
    },
    methods: {
        logout(){
            document.getElementById('logout').submit()
        }
    },
    mounted(){
        this.csrf = document.head.querySelector('meta[name="csrf-token"]').getAttribute('content')
    }
}
</script>
