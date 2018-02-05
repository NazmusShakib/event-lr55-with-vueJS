<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        You are logged in!
                    </div>
                    <!-- @submit handles any form of submission. -->
                    <!-- .prevent keeps the event from bubbling around and doing anything else. -->
                    <form @submit.prevent="handleSubmit">
                        <label>
                            Email:
                            <input type="email" v-model="user.email"/>
                        </label>
                        <label>
                            Name:
                            <input type="text" v-model="user.name"/>
                        </label>
                        <label>
                            Password:
                            <input type="password" v-model="user.password"/>
                        </label>
                        <button type="submit">Submit</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                user: {
                    email: '',
                    name: '',
                    password: ''
                }
            }
        },

        methods: {
            handleSubmit() {
                // Send data to the server or update your stores and such.
            }
        }
    }
</script>