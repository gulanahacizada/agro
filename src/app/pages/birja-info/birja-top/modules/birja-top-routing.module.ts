import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { BirjaTopComponent } from '../birja-top.component';

const routes: Routes = [
  {
    path: '',
    component: BirjaTopComponent
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class BirjaTopRoutingModule { }
