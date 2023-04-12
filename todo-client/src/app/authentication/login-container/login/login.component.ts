import {Component, EventEmitter, Output} from '@angular/core';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent {
  public email: string = 'brett.nielsen@tireguru.net';
  public password: string = 'brett';

  @Output() login: EventEmitter<any> = new EventEmitter<any>();

  loginClicked() {
    this.login.emit({email: this.email, password: this.password});
  }

}
