<template>
    <layout title="Welcome">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Welcome</div>

                        <div class="card-body">
                            <inertia-link href="/login">Login</inertia-link>
                            <inertia-link href="/register">Register</inertia-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
    import Layout from './Layout'

    export default {
        components: {
            Layout,
        },
    }
</script>