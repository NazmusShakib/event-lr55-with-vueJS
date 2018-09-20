<template>
    <div>
        <div class="wrapper-full-page">

            <form method="#" action="#">
                <div class="card" data-background="color" data-color="blue">
                    <div class="card-header">
                        <h3 class="card-title">Login</h3>
                    </div>
                    <div class="card-content">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" v-model="user.email" placeholder="Enter email" class="form-control input-no-border">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" v-model="user.password" placeholder="Password" class="form-control input-no-border">
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" @click.prevent="login()" class="btn btn-fill btn-wd ">Let's go</button>
                        <div class="forgot">
                            <router-link to="/register">
                                Forgot your password?
                            </router-link>
                        </div>
                    </div>
                </div>
            </form>



        </div>
    </div>
</template>
<script>

    import Footer from '../Layout/Footer'

    export default {
        components: {
            appFooter : Footer
        },
        data: function () {
          return {
              user: {}
          }
        },
        methods: {
            login() {
                axios.post(this.$baseURL + 'auth/login', this.user)
                    .then((response) => {
                        var token = response.data.access_token;
                        localStorage.setItem('token', token);
                        localStorage.setItem('auth', JSON.stringify(response.data.auth));

                        console.log('Login successfully');
                        this.$router.push('/user');
                    })
                    .catch((error) => {
                        console.log('Failed');
                        this.$router.push('/login')
                        // console.log(this)
                    });
            }
        },
        mounted: function () {
            // console.log(this.$router.push('/dashboard'));
        }
    }
</script>
<style>
</style>
