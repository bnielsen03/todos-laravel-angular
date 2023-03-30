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
