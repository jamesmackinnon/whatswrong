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
        data: function () {
            // Default UI state before fetching initial values from DB
            return {
                injury: {
                    knee: false,
                    hip: false,
                    spinal: false,
                    wrist: false,
                    whiplash: false
                }
            }
        },

        mounted: function () {

            // Fetch initial values from Database via API

            var self = this;
            
            $.ajax({
                url: '/api/injury',
                method: 'GET',
                success: function (data) {
                    var defaults = JSON.parse(data);

                    self.injury = {
                         knee: Boolean(defaults.knee),
                         hip: Boolean(defaults.hip),
                         spinal: Boolean(defaults.spinal),
                         wrist: Boolean(defaults.wrist),
                         whiplash: Boolean(defaults.whiplash)
                    }
                },
                error: function (error) {
                    console.error(error);
                }
            });
        },

        updated() {
            // Tell other components injuries updated
            E.$emit('updated', this.injury);

            // Explcit remap of boolean to int values for DB model
            var injuryMap = {
                knee: +this.injury.knee,
                hip: +this.injury.hip,
                spinal: +this.injury.spinal,
                wrist: +this.injury.wrist,
                whiplash: +this.injury.whiplash,
            }

           
            // Post data to API for update
            $.ajax({
                url: '/api/injury',
                method: 'POST',
                data: injuryMap,
                success: function (data) {
                    // console.log('posted.');
                }
            });
        },
    }

</script>
