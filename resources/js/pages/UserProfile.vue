<template>
    <div class="content">
        <div class="md-layout">
            <div class="md-layout-item md-medium-size-100 md-size-66">
                <edit-profile data-background-color="green" :profile="profile"/>
            </div>
            <div class="md-layout-item md-medium-size-100 md-size-33">
                <user-card :name="profile.name" :email="profile.email" :aboutMe="profile.about_me"/>
            </div>
        </div>
    </div>
</template>

<script>
    import {EditProfile, UserCard} from './Profile'

    export default {
        components: {
            EditProfile,
            UserCard
        },
        data() {
            return {
                profile: {
                    name: '',
                    email: '',
                    address: '',
                    first_name: '',
                    last_name: '',
                    city: '',
                    country: '',
                    about_me: '',
                }
            }
        },
        methods: {
            getAuthDetails() {
                axios.get(this.$baseURL + 'auth/profile', {
                    headers: {'Authorization': 'Bearer ' + localStorage.getItem('token')}
                })
                    .then((response) => {
                        this.profile = response.data;
                    })
                    .catch((error) => {

                    });
            }

        },
        mounted: function () {
            this.getAuthDetails();
        }
    }
</script>
