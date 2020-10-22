<template>
    <layout title="Login">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Login</div>

                        <div class="card-body">
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" :class="{ 'is-invalid': errors.email }" name="email" v-model="form.email">
                                    <div v-if="errors.email" class="invalid-feedback">{{ errors.email }}</div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" :class="{ 'is-invalid': errors.password }" name="password" v-model="form.password">
                                    <div v-if="errors.password" class="invalid-feedback">{{ errors.password }}</div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="button" class="btn btn-primary" @click.prevent="submit()">
                                        Login
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
    import Layout from './../Layout'

    export default {
        components: {
            Layout,
        },

        props: {
            errors: Object,
        },

        data() {
            return {
                form: {
                    email: '',
                    password: ''
                },
            }
        },

        methods: {
            // reset () {
            //     this.form = {
            //         email: '',
            //         password: ''
            //     }
            // },

            submit() {
                this.$inertia.post('/login', this.form);
                // this.reset();
            },
        },
    }
</script>