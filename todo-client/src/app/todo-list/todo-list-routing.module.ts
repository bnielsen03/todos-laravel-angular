import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import {TodoListContainerComponent} from "./todo-list-container/todo-list-container.component";

const routes: Routes = [
  {
    path: '',
    component: TodoListContainerComponent
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class TodoListRoutingModule { }
