import { Component } from '@angular/core';

@Component({
  selector: 'app-todo-layout',
  templateUrl: './todo-layout.component.html',
  styleUrls: ['./todo-layout.component.css']
})
export class TodoLayoutComponent {
  clicked() {
    console.log('clicked')
  }
}
