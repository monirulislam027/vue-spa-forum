export default {
    state: {
        categories: {},
        questions: {
            test: 'test'
        }
    },
    getters: {
        categories(state) {
            return state.categories;
        },
        questions(state) {
            return state.questions;
        }
    },
    actions: {
        categories(data) {
            axios.get('/api/category')
                .then(response => {
                    data.commit('categories', response.data)
                })
                .catch(error => {
                    console.log(error);
                })
        },
        questions(data) {
            axios.get('/api/question')
                .then(response => {
                    data.commit('questions', response.data)
                })
                .catch(error => {
                    console.log(error);
                })
        }
    },
    mutations: {
        categories(state , data){
           return  state.categories = data
        },
        questions(state , data){
           return  state.questions = data
        },
    },
}


