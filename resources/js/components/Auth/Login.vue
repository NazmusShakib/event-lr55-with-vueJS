<template>
    <div>
        <div class="wrapper wrapper-full-page">
            <div class="full-page" data-color="azure"
                 data-image="storage/static/img/background/background-21.jpg">
                <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
                <div class="content">
                    <div class="container">
                        <div class="row text-center title-login-div">
                            <router-link class="title-login" to="/login">Southern Staircase</router-link>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                                <form method="post" action="javascript:void(0)">
                                    <div class="card" data-background="color" data-color="blue">
                                        <div class="card-header">
                                            <h3 class="card-title">Login</h3>
                                        </div>
                                        <div class="card-content">
                                            <div class="form-group">
                                                <label>Email address</label>
                                                <input type="email" placeholder="Enter email"
                                                       class="form-control input-no-border" v-model="user.email">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" placeholder="Password"
                                                       class="form-control input-no-border" v-model="user.password">
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <button class="btn btn-fill btn-wd" @click.prevent="login">
                                                Let's go
                                            </button>
                                            <div class="forgot">
                                                <!--<router-link class="" to="/register">Register a new account!</router-link>-->
                                            </div>
                                            <div class="forgot">
                                                <!--<a href="javascript:void(0)">Forgot your password?</a>-->
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <app-footer></app-footer>

                <div class="full-page-background"
                     style="background-image: url(storage/static/img/background/background-21.jpg) "></div>
            </div>
        </div>
    </div>
</template>

<script>
    // import axios from 'axios';
    import Footer from '~/components/GeneralsComponents/Footer';

    export default {
        components: {
            appFooter: Footer
        },

        data: function () {
            return {
                user: {
                    email: '',
                    password: ''
                }
            }
        },

        methods: {
            login: function () {
                axios.post(this.$env.GATEWAY_API + 'login', this.user)
                    .then((response) => {
                        Object.keys(response.data).forEach((key) => {
                            this.$localStorage.set(key, response.data[key]);
                            if (key === 'user') {
                                let roles = response.data[key].roles;
                                let userRoles = [];
                                roles.forEach(function (role) {
                                    userRoles.push(role.name);
                                });
                                this.$localStorage.set('roles', userRoles);
                            }
                        });
                        this.redirectToHome();
                    })
                    .catch((error) => {
                        this.$notification.notifyError(this, error.response.data);
                    })
            },

            redirectToHome: function () {
                if (this.$auth.hasRole('SysAdmin')) {
                    this.$router.push('/quotes/list');
                } else if (this.$auth.hasRole('Sales')) {
                    this.$router.push('/quotes/list');
                } else if (this.$auth.hasRole('SalesManager')) {
                    this.$router.push('/quotes/list');
                } else if (this.$auth.hasRole('SuperAdmin')) {
                    this.$router.push('/quotes/list');
                }
            }
        },

        mounted: function () {
            this.$localStorage.clear();
        }
    }
</script>

<style scoped>
    .title-login-div {
        margin: 25px 0;
        font-size: 25px;
        color: #fff !important;
        font-weight: 600;
    }

    .title-login {
        color: #fff;
    }

    .forgot {
        margin-top: 10px;
    }
</style>
