import {Component, EventEmitter, OnInit, Output} from '@angular/core';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent implements OnInit {
  public email: string = '';
  public password: string = '';
  public password2: string = '';

  @Output() register: EventEmitter<any> = new EventEmitter<any>();
  ngOnInit(): void {
  }

  registerClicked() {
    this.register.emit({email: this.email, password: this.password, password2: this.password2});
  }
}
