import { Component } from '@angular/core';

@Component({
  selector: 'app-register-container',
  templateUrl: './register-container.component.html',
  styleUrls: ['./register-container.component.css']
})
export class RegisterContainerComponent {

  register(event: any) {
    if(event.password !== event.password2) {
      // do some error message
    }
    else {
      // register the user
    }
    console.log(event)
  }
}
