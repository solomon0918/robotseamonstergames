<template>
    <div>
        <b-form-group :label="label" v-slot="{ ariaDescribedby }">
            <b-form-radio-group
                :options="options"
                :aria-describedby="ariaDescribedby"
                :value="model" 
                @input="$emit('update:model', $event)"
                :class="errors ? 'is-invalid' : ''"
                :state="!errors"
            ></b-form-radio-group>

            <b-form-invalid-feedback>
                <span v-for="error in errors" v-bind:key="error">{{ error }}</span>
            </b-form-invalid-feedback>
        </b-form-group>
    </div>
</template>

<script>
    export default {
        name: "FRadio",
        props: {
            label: {
                type: String,
                required: true
            },
            options: {
                type: Object,
                default: []
            },
            model: {
                required: true
            },
            errors: {
            }
        }
    }
</script>

<style scoped>

</style>