<template>
    <div>

        <div class="wrapper wrapper-full-page">
            <div class="register-page">
                <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="header-text">
                                    <h2>Paper Dashboard PRO</h2>
                                    <h4>Register for free and experience the dashboard today.</h4>
                                    <hr>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <form method="#" action="#">
                                    <div class="card card-plain">
                                        <div class="content">
                                            <div class="form-group">
                                                <input type="text" v-model="user.fname" placeholder="Your First Name"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="user.lname" placeholder="Your Last Name"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="user.company" placeholder="Company"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" v-model="user.email" placeholder="Enter email"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" v-model="user.password" placeholder="Password"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" v-model="user.password_confirmation"
                                                       placeholder="Password Confirmation" class="form-control">
                                            </div>
                                        </div>
                                        <div class="footer text-center">
                                            <button type="button" @click.prevent="register()"
                                                    class="btn btn-fill btn-danger btn-wd">Create Free Account
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data: function () {
            return {
                user: {}
            }
        },
        methods: {
            register: function () {
                axios.post(this.$baseURL + 'auth/signup', this.user)
                    .then((response) => {
                        console.log(response.data);
                        alert(response.data);
                    })
                    .catch(function () {
                        alert('Failed!');
                    })
            }

        },
        beforeDestroy() {

        }
    }
</script>
<style>
</style>
