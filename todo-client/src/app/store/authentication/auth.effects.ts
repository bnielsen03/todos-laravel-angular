import {Injectable} from '@angular/core';
import {Actions, createEffect, ofType} from '@ngrx/effects';
import {catchError, map, switchMap, take} from 'rxjs/operators';
import {of} from 'rxjs';

import * as AuthActions from "./auth.actions";
import {AuthenticationService} from "../../services/authentication/authentication.service";


@Injectable()
export class AuthEffects {
  register$ = createEffect(() => this.actions$.pipe(
    ofType(AuthActions.registerAction.type),
    switchMap((action: any) => this.authService.register(action.username, action.password)),
    map((response: any) => AuthActions.registerSuccessfulAction({user: response})),
    catchError((error: string) => of(AuthActions.registerFailedAction({error: error})))
  ));

  constructor(
    private actions$: Actions,
    private authService: AuthenticationService
  ) {
  }
}
