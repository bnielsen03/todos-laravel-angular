import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { TodoListRoutingModule } from './todo-list-routing.module';
import { TodoListContainerComponent } from './todo-list-container/todo-list-container.component';


@NgModule({
  declarations: [
    TodoListContainerComponent,
  ],
  imports: [
    CommonModule,
    TodoListRoutingModule
  ]
})
export class TodoListModule { }
