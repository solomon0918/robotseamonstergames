<template>
    <b-container fluid="sm" class="pt-5 pb-3">
        <center><h1>Survey</h1></center>
        <hr>
        <template v-if="sentSurvey">
            <b-row>
                <b-col>
                    <b-alert show variant="primary">
                        <center>
                            <h4>
                                <b-icon icon="check-circle-fill"></b-icon> Your survey has been sent. We will contact you later.
                            </h4>
                        </center>
                    </b-alert>
                </b-col>
            </b-row>
        </template>
        <template v-else>
            <b-overlay :show="loading" rounded="sm">
                <b-form @submit="onSubmit">
                    <b-row>
                        <b-col>
                            <b-form-group label="First Name:" label-for="field_first-name">
                                <b-form-input
                                id="field_first-name"
                                v-model="form.first_name"
                                placeholder="Enter first name"
                                required
                                :disabled="loading"
                                ></b-form-input>
                            </b-form-group>
                        </b-col>
                        <b-col>
                            <b-form-group label="Last Name:" label-for="field_last-name">
                                <b-form-input
                                id="field_last-name"
                                v-model="form.last_name"
                                placeholder="Enter last name"
                                required
                                :disabled="loading"
                                ></b-form-input>
                            </b-form-group>
                        </b-col>
                    </b-row>

                    <b-form-group label="Survey:" label-for="field_survey">
                        <b-form-select
                        id="field_survey"
                        v-model="form.survey"
                        :options="surveys"
                        value-field="id"
                        text-field="name"
                        required
                        :disabled="loading"
                        ></b-form-select>
                    </b-form-group>

                    <template v-if="!loadForm && Object.entries(survey).length !== 0">
                        <div v-for="(question) in survey.questions" v-bind:key="question.id">
                            <form-input :label="question.question" :type="question.type" :field="question.id" :options="question.choices" :model.sync="form" :errors.sync="errors"></form-input>
                        </div>
                    </template>
                    <b-button type="submit" variant="primary" :disabled="!survey || loadForm || loading">Submit</b-button>
                </b-form>
            </b-overlay>
        </template>
    </b-container>
</template>

<script>
    import Form from './Form.vue';
    import _ from 'lodash';

    export default {
        components: {
            'form-input': Form
        },
        mounted() {
            this.$store.dispatch("survey/getSurveys");
        },
        data() {
            return {
                form: {
                    first_name: '',
                    last_name: '',
                    survey: '-1'
                },
                sentSurvey: false
            }
        },
        methods: {
            onSubmit(event) {
                event.preventDefault();

                if(this.$data.form.survey != '-1'){
                    let formData = _.mapValues(this.$data.form, (data) => {
                        return Array.isArray(data) ? JSON.stringify(data) : data;
                    });
    
                    this.$store.dispatch("survey/storeUserSurvey", formData)
                        .then(() => {
                            this.$data.sentSurvey = true;
                            this.$bvToast.toast('Survey successfully saved', {
                                    title: 'Success',
                                    variant: 'success',
                                    solid: true
                                });
                        })
                        .catch(() => {
                            this.$data.sentSurvey = false;
                            window.scrollTo(0,0);
                            this.$bvToast.toast('Something went wrong', {
                                    title: 'Error',
                                    variant: 'danger',
                                    solid: true
                                });
                        });
                }
            }
        },
        computed: {
            surveys() {
                return this.$store.getters["survey/surveys"]; 
            },
            survey() {
                return this.$store.getters["survey/survey"];
            },
            errors() {
                return this.$store.getters["survey/errors"];
            },
            loading() {
                return this.$store.getters["survey/loading"];
            },
            loadForm() {
                return this.$store.getters["survey/loadForm"];
            }
        },
        watch: {
            'form.survey': function(value) {
                if(value === -1){
                    this.$store.commit("survey/setSurvey", {});
                    return;
                }
                this.$data.form = {
                    first_name: this.$data.form.first_name,
                    last_name: this.$data.form.last_name,
                    survey: this.$data.form.survey
                };
                
                this.$store.dispatch("survey/getSurvey", this.$data.form.survey);
            }
        },
    }
</script>
