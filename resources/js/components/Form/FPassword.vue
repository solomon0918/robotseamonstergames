<template>
    <div>
        <b-form-group :label="label"
        >
            <b-form-input
                type="password"
                :value="model" 
                :class="errors ? 'is-invalid' : ''"
                :state="!errors"
                @input="$emit('update:model', $event)"
            ></b-form-input>

            <b-form-invalid-feedback>
                <span v-for="error in errors" v-bind:key="error">{{ error }}</span>
            </b-form-invalid-feedback>
        </b-form-group>
    </div>
</template>

<script>
    export default {
        name: "FPassword",
        props: {
            label: {
                type: String,
                required: true
            },
            model: {
                required: true
            },
            errors: {
                type: String
            }
        }
    }
</script>

<style scoped>

</style>