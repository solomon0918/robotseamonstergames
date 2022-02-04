<template>
    <div>
        <b-form-group
        :label="label"
        >
            <b-form-textarea 
                rows="3"
                max-rows="6"
                :value="model" 
                :class="errors ? 'is-invalid' : ''"
                :state="!errors" 
                @input="$emit('update:model', $event)"
            ></b-form-textarea>

            <b-form-invalid-feedback>
                <span v-for="error in errors" v-bind:key="error">{{ error }}</span>
            </b-form-invalid-feedback>
        </b-form-group>
    </div>
</template>

<script>
    export default {
        name: "FTextarea",
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