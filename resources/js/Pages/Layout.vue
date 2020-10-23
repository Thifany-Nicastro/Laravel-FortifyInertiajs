<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item" :class="{ 'active': $inertia.page.url == '/' }">
                        <inertia-link class="nav-link" href="/">Welcome</inertia-link>
                    </li>
                    <template v-if="!$page.props.authUser">
                        <li class="nav-item" :class="{ 'active': $inertia.page.url.startsWith('/login') }">
                            <inertia-link class="nav-link" href="/login">Login</inertia-link>
                        </li>
                        <li class="nav-item" :class="{ 'active': $inertia.page.url.startsWith('/register') }">
                            <inertia-link class="nav-link" href="/register">Register</inertia-link>
                        </li>
                    </template>
                    <template v-else>
                        <li class="nav-item">
                            <inertia-link class="nav-link btn btn-link" href="/logout" method="post" as="button">Logout</inertia-link>
                        </li>
                    </template>
                </ul>
            </div>
        </nav>
        <article>
            <slot />
        </article>
    </div>
</template>

<script>
  export default {
    props: {
      title: String,
    },

    watch: {
        title: {
            immediate: true,
            handler(title) {
                document.title = title
            },
        },
    },
  }
</script>