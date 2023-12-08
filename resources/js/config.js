export default {
    install(Vue) {
        Vue.config.globalProperties.$imgUrl = import.meta.env.VITE_BASE_PATH+'img/'

    }
}