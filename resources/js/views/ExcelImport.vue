    <template>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="m-b-md">
                    <h2 class="title m-b-md">
                        Import Injury Data
                    </h2>

                    <form @submit="formSubmit" enctype="multipart/form-data">

                        <strong>Excel File:</strong>
                        <div>
                            <input type="file" class="form-control-file" v-on:change="onFileChange">
                            <br>
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </template>


    <style scoped>
        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 60px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
            color: #000000;
        }

    </style>


    <script>
        export default {

            mounted() {
                console.log('Component mounted.')
            },

            data() {
               return {
                    name: '',
                    file: '',
                    success: ''
                };

            },

            methods: {

                onFileChange(e) {
                    // Update model data with file info

                    //console.log(e.target.files[0]);
                    this.file = e.target.files[0];
                },

                formSubmit(e) {

                    // Prevent normal submissions
                    e.preventDefault();

                    // build form data with file
                    let formData = new FormData();
                    formData.append('file', this.file);
                    
                    // Upload via ajax
                    $.ajax({
                        url: '/formSubmit',
                        type: 'POST',
                        data: formData,
                        async: false,
                        cache: false,
                        contentType: false,
                        enctype: 'multipart/form-data',
                        processData: false,
                        success: function (response) {
                            console.log(response);
                        }
                    });


                }

            }

        }

    </script>
