import { Component } from '@angular/core';
import {Store} from "@ngrx/store";
import * as fromRoot from "../../store";
import * as AuthActions from '../../store/authentication/auth.actions';
import {skipWhile} from "rxjs";
import {take} from "rxjs/operators";
import {Router} from "@angular/router";

@Component({
  selector: 'app-login-container',
  templateUrl: './login-container.component.html',
  styleUrls: ['./login-container.component.css']
})
export class LoginContainerComponent {

  constructor(private store: Store<fromRoot.State>, private router: Router) {
  }

  login(event: any) {
    this.store.dispatch(AuthActions.loginAction({username: event.email, password: event.password}))
    this.subscribeToLogin();
  }

  subscribeToLogin() {
    this.store.select(fromRoot.getUser).pipe(skipWhile(user => !user), take(1)).subscribe((user) => {
      this.router.navigate(['/todos/todo-list'])
    })
  }
}
