import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import {TodoLayoutComponent} from "./todo-layout/todo-layout.component";

const routes: Routes = [
  {
    path: '',
    component: TodoLayoutComponent,
    children: [
      {
        path: 'todo-list',
        loadChildren: () => import('../todo-list/todo-list.module').then(m => m.TodoListModule),
      }
    ]
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class TodosRoutingModule { }
