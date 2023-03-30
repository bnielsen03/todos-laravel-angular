import {
  MetaReducer,
  ActionReducerMap,
  createFeatureSelector,
  createSelector,
} from '@ngrx/store';

import * as fromAuth from './authentication/auth.reducer';

export interface State {
  [fromAuth.authFeaturesKey]: fromAuth.State
}

export const reducers: ActionReducerMap<State> = {
  [fromAuth.authFeaturesKey]: fromAuth.reducer
}

export const selectAuthState = createFeatureSelector<fromAuth.State>(fromAuth.authFeaturesKey);
export const getUser = createSelector(selectAuthState, fromAuth.getUser)
