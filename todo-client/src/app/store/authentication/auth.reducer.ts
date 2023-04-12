import {Action, ActionReducer, createReducer, INIT, on} from '@ngrx/store';

import * as AuthActions from "./auth.actions";

export const authFeaturesKey = 'auth';

export interface State {
  user: any;

  registerLoading: boolean;
  registerSuccessful: boolean|null;
  registerError: string|null;

  loginLoading: boolean;
  loginSuccessful: boolean|null;
  loginError: string|null;
}

export const initialState: State = {
  user: null,

  registerLoading: false,
  registerSuccessful: null,
  registerError: null,

  loginLoading: false,
  loginSuccessful: null,
  loginError: null,
}

const authReducer = createReducer(
  initialState,

  on(AuthActions.registerAction, (state: any) => ({
    ...state,
    registerLoading: true
  })),

  on(AuthActions.registerSuccessfulAction, (state: any, action:any) => ({
    ...state,
    registerLoading: false,
    registerSuccessful: true,
    user: action.user
  })),

  on(AuthActions.registerFailedAction, (state: any, action: any) => ({
    ...state,
    registerLoading: false,
    registerSuccessful: false,
    registerError: action.error
  })),

  on(AuthActions.loginAction, (state: any) => ({
    ...state,
    loginLoading: true
  })),

  on(AuthActions.loginSuccessfulAction, (state: any, action:any) => ({
    ...state,
    loginLoading: false,
    loginSuccessful: true,
    user: action.user
  })),

  on(AuthActions.loginFailedAction, (state: any, action: any) => ({
    ...state,
    loginLoading: false,
    loginSuccessful: false,
    loginError: action.error
  })),
);

export function reducer(state: State | undefined, action: Action) {
  return authReducer(state, action);
}

export const getUser = (state: State) => state.user;
