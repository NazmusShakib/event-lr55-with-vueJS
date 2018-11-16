<template>

    <form>
        <div class="md-layout">

            <div class="md-layout-item md-small-size-100 md-size-25">
                <md-card>
                        <md-ripple>
                            <img :src="localHeadShot" :alt="name">
                        </md-ripple>
                </md-card>
            </div>

            <div class="md-layout-item md-small-size-100 md-size-50">
                <md-field>
                    <label>Only images</label>
                    <md-file v-on:change="onFileChange" accept="image/*" />
                </md-field>
            </div>
            <div class="md-layout-item md-small-size-100 text-right md-size-25">
                <md-button class="md-raised md-success" @click="upload">Upload</md-button>
            </div>
        </div>
    </form>

</template>
<style scoped>
    img {
        width: 100%;
        max-width: 400px;
        height: auto;
    }
</style>
<script>
    export default {
        props : {
            headshot: {
                type: String,
                default: require('../../assets/img/faces/headshot.png')
            },
            name: {
                type: String,
                default: 'Headshot'
            }
        },
        data() {
            return {
                localHeadShot: this.headshot
            }
        },
        methods: {
            onFileChange(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
            },
            createImage(file) {
                let reader = new FileReader();
                // let vm = this;
                reader.onload = (e) => {
                    this.localHeadShot = e.target.result;
                    this.$emit('updateHeadShot', this.localHeadShot);
                };
                reader.readAsDataURL(file);
            },
            upload() {
                axios.post('/api/upload', {headshot: this.localHeadShot}).then(response => {

                });
            }
        },
        mounted () {

        }
    }
</script>