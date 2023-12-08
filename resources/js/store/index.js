import auth from './auth'
import loading from './loading'
import customer from './customer'
import { createStore } from 'vuex'

export default createStore({
    modules: {
        auth,
        customer,
        loading
    }
})