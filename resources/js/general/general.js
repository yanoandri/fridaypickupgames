const API_URL = process.env.MIX_API_URL

const path = {
    auth: {
        login: `${API_URL}/login`,
        logout: `${API_URL}/logout`
    }
}

export {
    path
}