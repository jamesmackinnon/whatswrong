<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Diagnoses</strong>
                    </div>

                    <div class="card-body">
                        <h3 v-if="injury.knee">Knee Fracture</h3>
                        <h3 v-if="injury.hip">Hip Dislocation</h3>
                        <h3 v-if="injury.spinal">Spinal Compression</h3>
                        <h3 v-if="injury.wrist">Broken Wrist</h3>
                        <h3 v-if="injury.whiplash">Severe Whiplash</h3>             
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

        },

        created() {
            E.$on('updated', (injury) => {
                this.injury = injury;
            })
        },

        methods: {

        }
    }

</script>
