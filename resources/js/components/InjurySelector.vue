<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Injuries</strong>
                    </div>

                    <div class="card-body">
                        Knee
                        <toggle-button v-model="injury.knee" :sync="true" /> <br>
                        Hip
                        <toggle-button v-model="injury.hip" :sync="true" /> <br>
                        Spinal
                        <toggle-button v-model="injury.spinal" :sync="true" /> <br>
                        Wrist
                        <toggle-button v-model="injury.wrist" :sync="true" /> <br>
                        Whiplash
                        <toggle-button v-model="injury.whiplash" :sync="true" /> <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
            injury: {
                    knee: true,
                    hip: true,
                    spinal: true,
                    wrist: true,
                    whiplash: false
            }
            }
        },

        mounted() {
            self.injury = {
                    knee: true,
                    hip: true,
                    spinal: false,
                    wrist: true,
                    whiplash: false
            }
        },

        updated() {
            E.$emit('updated', this.injury);
        },

        methods: {

        }
    }

</script>
