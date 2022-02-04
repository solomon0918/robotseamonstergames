<template>
    <div>
        <component :is="showFormType(type)" :label="label" :options="options" :model.sync="model[`field_${field}`]" :errors.sync="errors[`field_${field}`]"></component>
    </div>
</template>

<script>
    import FRadio from '../components/Form/FRadio.vue';
    import FCheckbox from '../components/Form/FCheckbox.vue';
    import FDropdown from '../components/Form/FDropdown.vue';
    import FTextarea from '../components/Form/FTextarea.vue';
    import FText from '../components/Form/FText.vue';
    import FEmail from '../components/Form/FEmail.vue';
    import FPassword from '../components/Form/FPassword.vue';
    import FDate from '../components/Form/FDate.vue';
    import FNumber from '../components/Form/FNumber.vue';
    import FTel from '../components/Form/FTel.vue';

    import { constVariables } from '../helpers/const';

    export default {
        name: "Form",
        components: {
            FRadio,
            FCheckbox,
            FDropdown,
            FTextarea,
            FText,
            FEmail,
            FPassword,
            FDate,
            FNumber,
            FTel
        },
        props: [
            'label',
            'type',
            'options',
            'model',
            'field',
            'errors'
        ],
        methods: {
            showFormType(type){
                return constVariables.form.inputs[type];
            }
        },
        mounted () {
            this.model[`field_${this.field}`] = '';
        },
    }
</script>

<style scoped>

</style>