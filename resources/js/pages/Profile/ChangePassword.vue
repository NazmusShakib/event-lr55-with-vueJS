<template>
	<form novalidate @submit.prevent="changePassword">

		<div class="md-layout">

			<div class="md-layout-item md-small-size-100 md-size-100">
				<md-field>
					<label>Password</label>
					<md-input v-model="profile.password"  v-validate="'required'" name="password" type="password" required></md-input>
                    <!--<span v-show="errors.has('password')" class="md-error help is-danger">{{ errors.first('password') }}</span>-->
                    <i class="fa fa-warning"></i>
                    <span class="help is-danger">121312</span>
				</md-field>
			</div>
			<div class="md-layout-item md-small-size-100 md-size-100">
				<md-field>
					<label>Confirm Password</label>
					<md-input v-model="profile.confirm_password" type="password" required></md-input>
				</md-field>
			</div>
			<div class="md-layout-item md-size-100 text-right">
				<md-button class="md-raised md-success" type="submit" >Update Password</md-button>
			</div>
		</div>

	</form>
</template>

<script>
    import Vue from 'vue';
    import VeeValidate from 'vee-validate';
    Vue.use(VeeValidate);

    export default {
        name: 'change-password',
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
            changePassword() {
                this.$validator.validateAll().then((result) => {
                    if (result) {
                        // eslint-disable-next-line
                        alert('Form Submitted!');
                        return;
                    }

                    alert('Correct them errors!');
                });
            }
        }
    }

</script>
<style>

</style>
