import { Alert } from 'react-native'

const axios = require('axios');

class Http {
    static instance = new Http()

    //'http://192.168.100.61:8000/api/v1/dishes'
    get = async(url) => {
        try {

            let request = await axios.get(url)
            let data = request.data
            return data

        } catch (error) {
            Alert.alert(
                "Ups, algo salió mal",
                "Por favor intentalo de nuevo")
            console.error("Http get method error", error);
            throw Error(error)
        }
    }

    //'http://192.168.100.61:8000/api/v1/details' para details
    //'http://192.168.100.61:8000/api/v1/orders' para orders
    post = async(url, body) => {
        try {
            let response = await axios.post(url, body)
            let data = response.data
            return data

        } catch (error) {
            Alert.alert(
                "Ups, algo salió mal",
                "Por favor intentalo de nuevo")
            console.error("Http post method error", error)
            throw Error(error)
        }
    }

}

export default Http