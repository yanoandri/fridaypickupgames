<template>
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" :class="isDashboardToggled ? 'toggled' : ''" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <div class="mt-5">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <img src="../../../public/images/logo.jpeg" alt="logo" height="80px" width="80px">
                </div>
                <div class="sidebar-brand-text mx-3">Pickup Games Admin</div>
            </a>
        </div>

        <!-- Divider -->
        <hr class="sidebar-divider my-0 mt-5">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link collapsed" :class="!toggledMenu.player ? 'collapsed' : ''" @click="toggledMenu.player = !toggledMenu.player" href="#">
                <i class="fas fa-user-astronaut"></i>
                <span>Player</span>
            </a>
            <div id="collapseDashboard" class="collapse" :class="toggledMenu.player ? 'show' : ''" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="#">Player</a>
                    <a class="collapse-item" href="#">Attendance</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
            Menu
        </div>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" :class="!toggledMenu.team ? 'collapsed' : ''" @click="toggledMenu.team = !toggledMenu.team">
                <i class="fas fa-tshirt"></i>
                <span>Team</span>
            </a>
            <div id="collapseTwo" class="collapse" :class="toggledMenu.team ? 'show' : ''" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="#">Create a team</a>
                    <a class="collapse-item" href="#">Today's Team</a>
                </div>
            </div>
            <a class="nav-link collapsed" href="#" :class="!toggledMenu.match ? 'collapsed' : ''" @click="toggledMenu.match = !toggledMenu.match">
                <i class="fas fa-calendar"></i>
                <span>Match</span>
            </a>
            <div id="collapseThree" class="collapse" :class="toggledMenu.match ? 'show' : ''" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <!-- <a class="collapse-item" href="#">Create a Match</a> -->
                    <a class="collapse-item" href="#">Today's Match</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle" @click="isDashboardToggled = !isDashboardToggled"></button>
        </div>
    </ul>
</template>

<script>
export default {
    name: 'sidebar-component',
    data() {
        return {
            isDashboardToggled: false,
            toggledMenu: {
                player: false,
                team: false,
                match: false
            }
        }
    }
}
</script>