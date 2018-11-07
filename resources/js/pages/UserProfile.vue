<template>
  <div class="content">
    <div class="md-layout">
      <div class="md-layout-item md-medium-size-100 md-size-66">
        <edit-profile data-background-color="green"/>
      </div>
      <div class="md-layout-item md-medium-size-100 md-size-33">
        <user-card/>
      </div>
    </div>
  </div>
</template>

<script>
import { EditProfile, UserCard } from './Profile'

export default{
  components: {
    EditProfile,
    UserCard
  }
}
</script>
