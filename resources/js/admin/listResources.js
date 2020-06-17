import {LISTS} from './api_endpoints';

export const GET_TEAMS = (onSuccess, onError) => {
    return axios.get(LISTS.GET_TEAMS)
      .then(response => onSuccess(response.data))
      .catch(error => onError(error))
}

export const GET_VENUES = (onSuccess, onError) => {
    return axios.get(LISTS.GET_VENUES)
      .then(response => onSuccess(response.data))
      .catch(error => onError(error))
}

export const GET_TEAM_PLAYERS = (params, onSuccess, onError) => {
    return axios.get(LISTS.GET_TEAM_PLAYERS + params)
      .then(response => onSuccess(response.data))
      .catch(error => onError(error))
}