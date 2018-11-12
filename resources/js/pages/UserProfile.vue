<template>
    <div class="content">
        <div class="md-layout">


            <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-66">
                <nav-tabs-card>
                    <template slot="content">
                        <span class="md-nav-tabs-title">Profile:</span>
                        <md-tabs md-sync-route class="md-success" md-alignment="left">

                            <md-tab id="tab-home" md-label="Complete your profile" md-icon="account_box">
                                <edit-profile data-background-color="green" :profile="profile"/>
                            </md-tab>

                            <md-tab id="tab-pages" md-label="Display Picture" md-icon="account_circle">
                                2
                            </md-tab>

                            <md-tab id="tab-posts" md-label="Change Password" md-icon="enhanced_encryption">
                                3
                            </md-tab>
                        </md-tabs>
                    </template>
                </nav-tabs-card>
            </div>


            <!-- <div class="md-layout-item md-medium-size-100 md-size-66">
                <edit-profile data-background-color="green" :profile="profile"/>
            </div> -->
            <div class="md-layout-item md-medium-size-100 md-size-33">
                <user-card :name="profile.name" :email="profile.email" :aboutMe="profile.about_me"/>
            </div>
        </div>
    </div>
</template>

<script>
    import {EditProfile, UserCard} from './Profile'
    import {NavTabsCard} from '../components'

    export default {
        components: {
            EditProfile,
            UserCard,
            NavTabsCard
        },
        data() {
            return {
                profile: {
                    name: '',
                    email: '',
                    address: '',
                    first_name: '',
                    last_name: '',
                    post_code: '',
                    city: '',
                    country: '',
                    about_me: '',
                }
            }
        },
        methods: {
            getAuthDetails() {
                axios.get(this.$baseURL + 'auth/profile', {
                    headers: {'Authorization': 'Bearer ' + this.$localStorage.get('token')}
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
