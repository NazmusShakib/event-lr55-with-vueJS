<template>
  <md-card class="md-card-profile">
    <div class="md-card-avatar">
       <img class="img" :src="cardUserImage">
    </div>

    <md-card-content>
      <h6 class="category text-gray">{{ name }}</h6>
      <h4 class="card-title">{{ email }}</h4>
      <p class="card-description"> {{ aboutMe }} </p>
      <md-button class="md-round md-success">Follow</md-button>
    </md-card-content>
  </md-card>
</template>
<script>
export default {
  name: 'user-card',
  props: {
    cardUserImage: {
      type: String,
      default: require('../../assets/img/faces/marc.jpg')
    },
      name: {
        type: String,
        required: true
      },
      email: {
        type: String,
        required: true
      },
      aboutMe: {
        type: String,
      },
  },
  data () {
    return {
    }
  }
}

</script>
<style>

</style>
