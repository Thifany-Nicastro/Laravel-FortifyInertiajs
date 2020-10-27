<template>
    <layout title="Home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Home</div>

                        <div class="card-body">
                            <div>You are logged in as: {{ $page.props.authUser.name }}.</div>
                            <inertia-link href="/logout" method="post" as="button" class="btn btn-primary">Logout</inertia-link>
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
    }
</script>