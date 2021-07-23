const { default: axios } = require("axios");

class Status {
    static all(then) {
        return axios.get('/statuses')
            .then(({data}) => then(data))
    }
    
    // static all() {
    //     return axios.get('/statuses')
    // }
}

export default Status