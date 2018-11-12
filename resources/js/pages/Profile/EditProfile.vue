<template>
    <form>
        <!-- <md-card> -->
            <!-- <md-card-header :data-background-color="dataBackgroundColor">
                <h4 class="title">Edit Profile</h4>
                <p class="category">Complete your profile</p>
            </md-card-header> -->

            <!-- <md-card-content> -->
                <div class="md-layout">
                    <div class="md-layout-item md-small-size-100 md-size-33">
                        <md-field>
                            <label>Company (disabled)</label>
                            <md-input v-model="profile.company" disabled></md-input>
                        </md-field>
                    </div>
                    <div class="md-layout-item md-small-size-100 md-size-33">
                        <md-field>
                            <label>User Name</label>
                            <md-input v-model="profile.name" type="text"></md-input>
                        </md-field>
                    </div>
                    <div class="md-layout-item md-small-size-100 md-size-33">
                        <md-field>
                            <label>Email Address</label>
                            <md-input v-model="profile.email" type="email"></md-input>
                        </md-field>
                    </div>
                    <div class="md-layout-item md-small-size-100 md-size-50">
                        <md-field>
                            <label>First Name</label>
                            <md-input v-model="profile.first_name" type="text"></md-input>
                        </md-field>
                    </div>
                    <div class="md-layout-item md-small-size-100 md-size-50">
                        <md-field>
                            <label>Last Name</label>
                            <md-input v-model="profile.last_name" type="text"></md-input>
                        </md-field>
                    </div>
                    <div class="md-layout-item md-small-size-100 md-size-100">
                        <md-field>
                            <label>Adress</label>
                            <md-input v-model="profile.address" type="text"></md-input>
                        </md-field>
                    </div>
                    <div class="md-layout-item md-small-size-100 md-size-33">
                        <md-field>
                            <label>City</label>
                            <md-input v-model="profile.city" type="text"></md-input>
                        </md-field>
                    </div>
                    <div class="md-layout-item md-small-size-100 md-size-33">
                        <md-field>
                            <label>Country</label>
                            <md-input v-model="profile.country" type="text"></md-input>
                        </md-field>
                    </div>
                    <div class="md-layout-item md-small-size-100 md-size-33">
                        <md-field>
                            <label>Postal Code</label>
                            <md-input v-model="profile.post_code" type="number"></md-input>
                        </md-field>
                    </div>
                    <div class="md-layout-item md-size-100">
                        <md-field maxlength="5">
                            <label>About Me</label>
                            <md-textarea v-model="profile.about_me"></md-textarea>
                        </md-field>
                    </div>
                    <div class="md-layout-item md-size-100 text-right">
                        <md-button class="md-raised md-success" @click.prevent="updateProfile()">Update Profile</md-button>
                    </div>
                </div>

            <!-- </md-card-content> -->
       <!--  </md-card> -->
    </form>
</template>
<script>
    export default {
        name: 'edit-profile',
        props: {
            dataBackgroundColor: {
                type: String,
                default: ''
            },
            profile : {
                required: true
            }
        },
        methods: {
            updateProfile() {
                axios.put(this.$baseURL + 'auth/profile', this.profile, {
                    headers: {'Authorization': 'Bearer ' + this.$localStorage.get('token')}
                })
                    .then((response) => {
                        this.$notify({message: response.data, type: 'success', horizontalAlign: 'right', verticalAlign: 'top'});
                        console.log(response.data);
                    })
                    .catch((error) => {
                        console.log('Damn it!')
                    });
            }
        }
    }

</script>
<style>

</style>
