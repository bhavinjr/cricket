import {ADMIN} from './api_endpoints';

export const STORE_MATCH = (payload, onSuccess, onError) => {
    return axios.post(ADMIN.MATCHES, payload)
      .then(response => onSuccess(response.data))
      .catch(error => onError(error.response))
}

export const UPDATE_MATCH = ({id, payload}, onSuccess, onError) => {
    return axios.put(ADMIN.MATCHES + id, payload)
      .then(response => onSuccess(response.data))
      .catch(error => onError(error.response))
}