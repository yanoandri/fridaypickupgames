<template>
  <div id="wrapper">
        <sidebar-component />
        <div id="content-wrapper" class="d-flex flex-column">
            <div class="container-fluid">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
import SidebarComponent from './SidebarComponent.vue';

export default {
    name: 'home-component',
    components: {
        SidebarComponent
    }
}
</script>
