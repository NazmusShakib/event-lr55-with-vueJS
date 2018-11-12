<template>
    <md-toolbar md-elevation="0" class="md-transparent">
        <div class="md-toolbar-row">
            <div class="md-toolbar-section-start">
                <h3 class="md-title">{{$route.name}}</h3>
            </div>
            <div class="md-toolbar-section-end">
                <md-button class="md-just-icon md-simple md-toolbar-toggle" :class="{toggled: $sidebar.showSidebar}"
                           @click="toggleSidebar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </md-button>

                <div class="md-collapse">
                    <div class="md-autocomplete">
                        <md-autocomplete class="search" v-model="selectedEmployee" :md-options="employees">
                            <label>Search...</label>
                        </md-autocomplete>
                    </div>
                    <md-list>
                        <md-list-item to="/">
                            <i class="material-icons">dashboard</i>
                            <p class="hidden-lg hidden-md">Dashboard</p>
                        </md-list-item>

                        <md-list-item to="/notifications" class="dropdown">
                            <drop-down>
                                <a slot="title" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">3</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Mike John responded to your email</a></li>
                                    <li><a href="#">You have 5 new tasks</a></li>
                                    <li><a href="#">You're now friend with Andrew</a></li>
                                </ul>
                            </drop-down>
                        </md-list-item>

                        <md-list-item to="profile" class="dropdown">
                            <drop-down>
                                <a slot="title" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Profile</a></li>
                                    <li><a href="javascript:void(0);">Logout</a></li>
                                </ul>
                            </drop-down>
                        </md-list-item>
                    </md-list>
                </div>
            </div>
        </div>

    </md-toolbar>
</template>

<script>

    export default {
        data() {
            return {
                selectedEmployee: null,
                employees: [
                    'Jim Halpert',
                    'Dwight Schrute',
                    'Michael Scott',
                    'Pam Beesly',
                    'Angela Martin',
                    'Kelly Kapoor',
                    'Ryan Howard',
                    'Kevin Malone'
                ]
            }
        },
        methods: {
            toggleSidebar() {
                this.$sidebar.displaySidebar(!this.$sidebar.showSidebar)
            },
            logoutUser() {
                // this.$localStorage.clear();
                this.$router.push({ name: 'Login' });
                console.log('logout called.');
            }
        }
    }
</script>

<style lang="css">
</style>
