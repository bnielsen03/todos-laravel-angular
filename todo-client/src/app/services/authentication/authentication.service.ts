import { Injectable } from '@angular/core';
import {HttpClient} from "@angular/common/http";
import {environment} from "../../environment/environment";

@Injectable({
  providedIn: 'root'
})
export class AuthenticationService {

  constructor(private http: HttpClient) { }

  register(username: string, password: string) {
    console.log(username, password);
    return this.http.post(environment.apiUrl + '/auth/register', {username, password});
  }
}
