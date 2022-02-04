<template>
    <div>
        <b-form-group
        :label="label"
        >
            <b-form-select 
                :options="options" 
                :value="model" 
                :class="errors ? 'is-invalid' : ''"
                :state="!errors"
                @input="$emit('update:model', $event)">
            </b-form-select>

            <b-form-invalid-feedback>
                <span v-for="error in errors" v-bind:key="error">{{ error }}</span>
            </b-form-invalid-feedback>
        </b-form-group>
    </div>
</template>

<script>
    export default {
        name: "FDropdown",
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
                type: String
            }
        }
    }
</script>

<style scoped>

</style>