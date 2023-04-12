import {Injectable} from '@angular/core';
import {ActivatedRouteSnapshot, CanActivate, Router, RouterStateSnapshot, UrlTree} from '@angular/router';
import {from, Observable} from 'rxjs';
import {Store} from "@ngrx/store";
import * as fromRoot from "../store";
import {take} from "rxjs/operators";

@Injectable({
  providedIn: 'root'
})
export class AuthGuard implements CanActivate {

  public success: boolean = false;

  public constructor(private store: Store<fromRoot.State>, private router: Router) {
    this.subscribeToUser();
  }

  canActivate(
    route: ActivatedRouteSnapshot,
    state: RouterStateSnapshot): Observable<boolean | UrlTree> | Promise<boolean | UrlTree> | boolean | UrlTree {

    if(!this.success) {
      this.router.navigate(['']);
    }

    return this.success;
  }

  subscribeToUser() {
    this.store.select(fromRoot.getUser).subscribe((user) => {
      this.success = user;
    });
  }
}
