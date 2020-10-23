<template>
    <button :disabled="loading" class="btn btn-primary">
        <slot />
        <span v-if="loading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" />
    </button>
</template>

<script>
    export default {
        props: {
            loading: Boolean,
        },
    }
</script>