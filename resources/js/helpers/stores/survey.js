export const survey = {
    namespaced: true,
    state: { 
        surveys: [
            { id: -1, name: "Select Survey Type" }
        ],
        survey: {},
        loading: false,
        loadForm: false,
        errors: []
    },
    getters: {
        surveys(state){
            return state.surveys;
        },
        loading(state){
            return state.loading
        },
        errors(state){
            return state.errors
        },
        loadForm(state){
            return state.loadForm;
        },
        survey(state){
            return state.survey;
        }
    },
    mutations: {
        requestSurveys(state){
            state.loading = true;
        },
        setSurveys(state, payload){
            state.loading = false;
            state.errors = [];
            state.surveys = state.surveys.concat(payload);
        },
        failedSurveys(state, payload){
            state.loading = false;
            state.errors = payload;
        },
        requestSurvey(state){
            state.loading = true;
            state.loadForm = true;
        },
        setSurvey(state, payload){
            state.survey = payload;
            state.loading = false;
            state.loadForm = false;
        },
        successSurvey(state){
            state.errors = [];
            state.loading = false;
        },
        failedSurvey(state, payload){
            state.errors = payload;
            state.loading = false;
        }
    },
    actions: {
        getSurveys(context){
            return new Promise((ok, rej) => {
                context.commit("requestSurveys");

                axios.get("api/surveys")
                    .then((res) => {
                        context.commit("setSurveys", res.data);
                        ok();
                    })
                    .catch((err) => {
                        context.commit("failedSurveys", err.response.data.errors);
                        rej();
                    });
            });
        },
        getSurvey(context, payload){
            return new Promise((ok, rej) => {
                context.commit("requestSurvey");

                axios.get(`api/surveys/${payload}`)
                    .then((res) => {
                        context.commit("setSurvey", res.data);
                    })
                    .catch((err) => {
                        context.commit("failedSurvey", err.response.data.errors)
                    });
            });
        },
        storeUserSurvey(context, payload){
            return new Promise((ok, rej) => {
                context.commit("requestSurveys");
                
                axios.post("api/user-surveys", payload)
                    .then(() => {
                        context.commit("successSurvey");
                        ok();
                    })
                    .catch((err) => {
                        context.commit("failedSurvey", err.response.data.errors.message);
                        rej();
                    });
            });
        }
    }
}