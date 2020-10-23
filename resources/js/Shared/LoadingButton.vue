<template>
    <button :disabled="loading" class="btn btn-primary">
        <div v-if="loading">
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        </div>
        <slot />
    </button>
</template>

<script>
    export default {
        props: {
            loading: Boolean,
        },
    }
</script>