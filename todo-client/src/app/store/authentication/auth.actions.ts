import {createAction, props} from "@ngrx/store";

export const registerAction = createAction(
  '[Auth] register',
  props<{username: string, password: string}>()
);

export const registerSuccessfulAction = createAction(
  '[Auth] register successful',
  props<{user: string}>()
);

export const registerFailedAction = createAction(
  '[Auth] register failed',
  props<{error: string}>()
);

export const loginAction = createAction(
  '[Auth] login',
  props<{username: string, password: string}>()
);

export const loginSuccessfulAction = createAction(
  '[Auth] login successful',
  props<{user: string}>()
);

export const loginFailedAction = createAction(
  '[Auth] login failed',
  props<{error: string}>()
);
