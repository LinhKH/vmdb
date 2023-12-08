const listApi = {
    csrfToken: { method: 'GET', url: 'sanctum/csrf-cookie' },
    //Auth
    login: { method: 'POST', url: 'api/auth/login' },
    logout: { method: 'POST', url: 'api/auth/logout' },
    forgot: { method: 'POST', url: 'api/auth/forgot' },
    reset_password: { method: 'POST', url: 'api/auth/reset_password' },
    

}

export default listApi