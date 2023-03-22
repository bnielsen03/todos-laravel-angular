import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { AuthenticationRoutingModule } from './authentication-routing.module';
import { LoginContainerComponent } from './login-container/login-container.component';
import {MatCardModule} from "@angular/material/card";
import { LoginComponent } from './login-container/login/login.component';
import {MatInputModule} from "@angular/material/input";
import {MatButtonModule} from "@angular/material/button";
import { RegisterContainerComponent } from './register-container/register-container.component';
import { RegisterComponent } from './register-container/register/register.component';
import {FormsModule} from "@angular/forms";


@NgModule({
  declarations: [
    LoginContainerComponent,
    LoginComponent,
    RegisterContainerComponent,
    RegisterComponent
  ],
  imports: [
    CommonModule,
    AuthenticationRoutingModule,
    MatCardModule,
    MatInputModule,
    MatButtonModule,
    FormsModule
  ]
})
export class AuthenticationModule { }
