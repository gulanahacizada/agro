import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { BirjaComponent } from '../birja.component';

const routes: Routes = [

  {
    path: '',
    component: BirjaComponent
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class BirjaRoutingModule { }
