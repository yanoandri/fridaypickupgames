<template>
  <div id="wrapper">
        <sidebar-component />
        <div id="content-wrapper" class="d-flex flex-column">
            <navbar-component />
            <div class="container-fluid">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
import SidebarComponent from './SidebarComponent.vue';
import NavbarComponent from './NavbarComponent.vue';

export default {
    name: 'home-component',
    components: {
        SidebarComponent,
        NavbarComponent
    }
}
</script>
