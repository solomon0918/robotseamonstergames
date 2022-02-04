<template>
    <div>
        <b-form-group :label="label" v-slot="{ ariaDescribedby }">
            <b-form-checkbox-group
                :options="options"
                :aria-describedby="ariaDescribedby"
                :value="model"
                :class="errors ? 'is-invalid' : ''"
                :state="!errors"
                @input="$emit('update:model', $event)"
            ></b-form-checkbox-group>

            <b-form-invalid-feedback>
                <span v-for="error in errors" v-bind:key="error">{{ error }}</span>
            </b-form-invalid-feedback>
        </b-form-group>
    </div>
</template>

<script>
    export default {
        name: "FCheckbox",
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