import { Component } from '@angular/core';
import {Store} from "@ngrx/store";
import * as fromRoot from '../../store';
import * as AuthActions from '../../store/authentication/auth.actions';
import {skipWhile} from "rxjs";
import {take} from "rxjs/operators";
import {Router} from "@angular/router";

@Component({
  selector: 'app-register-container',
  templateUrl: './register-container.component.html',
  styleUrls: ['./register-container.component.css']
})
export class RegisterContainerComponent {

  constructor(private store: Store<fromRoot.State>, private router: Router) {
  }

  register(event: any) {
    if(event.password !== event.password2) {
      // do some error message
    }
    else {
      // register the user
      this.store.dispatch(AuthActions.registerAction({username: event.email, password: event.password}));
      this.subscribeToRegister();
    }
  }

  subscribeToRegister() {
    this.store.select(fromRoot.getUser).pipe(skipWhile(user => !user), take(1)).subscribe((user) => {
      this.router.navigate(['/todos/todo-list'])
    })
  }
}
